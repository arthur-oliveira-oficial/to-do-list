<?php

namespace App\Security\Voter;

use App\Entity\Lista;
use App\Entity\Usuario;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class ListaVoter extends Voter
{
    public const EDIT = 'edit';
    public const VIEW = 'view';
    public const DELETE = 'delete';
    public const ADD_TAREFA = 'add_tarefa';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::VIEW, self::DELETE, self::ADD_TAREFA])
            && $subject instanceof Lista;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof Usuario) {
            return false;
        }

        /** @var Lista $lista */
        $lista = $subject;

        switch ($attribute) {
            case self::EDIT:
            case self::DELETE:
                // Somente o dono da lista pode editar e deletar
                return $lista->getUsuario() === $user;
            case self::VIEW:
                // O dono da lista e usuários com quem ela foi compartilhada podem visualizar
                return $lista->getUsuario() === $user || $lista->getUsuariosCompartilhados()->contains($user);
            case self::ADD_TAREFA:
                // O dono da lista e usuários com quem ela foi compartilhada podem adicionar tarefas
                return $lista->getUsuario() === $user || $lista->getUsuariosCompartilhados()->contains($user);
        }

        return false;
    }
}