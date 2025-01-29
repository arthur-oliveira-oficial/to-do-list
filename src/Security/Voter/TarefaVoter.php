<?php

namespace App\Security\Voter;

use App\Entity\Tarefa;
use App\Entity\Usuario;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class TarefaVoter extends Voter
{
    public const EDIT = 'edit';
    public const VIEW = 'view';
    public const DELETE = 'delete';

    protected function supports(string $attribute, mixed $subject): bool
    {
        // Suporta os atributos EDIT, VIEW e DELETE apenas para objetos Tarefa
        return in_array($attribute, [self::EDIT, self::VIEW, self::DELETE])
            && $subject instanceof Tarefa;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof Usuario) {
            return false;
        }

        /** @var Tarefa $tarefa */
        $tarefa = $subject;
        $lista = $tarefa->getLista();

        switch ($attribute) {
            case self::EDIT:
            case self::DELETE:
                // Somente quem pode adicionar tarefas na lista (dono ou compartilhado) pode editar e deletar
                return $lista->getUsuario() === $user || $lista->getUsuariosCompartilhados()->contains($user);
            case self::VIEW:
                // Somente quem pode visualizar a lista (dono ou compartilhado) pode visualizar a tarefa
                return $lista->getUsuario() === $user || $lista->getUsuariosCompartilhados()->contains($user);
        }

        return false;
    }
}