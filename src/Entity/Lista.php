<?php

namespace App\Entity;

use App\Repository\ListaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ListaRepository::class)]
class Lista
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $nome = null;

    #[ORM\ManyToOne(inversedBy: 'listas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $usuario = null;

    #[ORM\OneToMany(mappedBy: 'lista', targetEntity: Tarefa::class, orphanRemoval: true)]
    private Collection $tarefas;

    #[ORM\ManyToMany(targetEntity: Usuario::class, inversedBy: 'listasCompartilhadas')]
    private Collection $usuariosCompartilhados;

    public function __construct()
    {
        $this->tarefas = new ArrayCollection();
        $this->usuariosCompartilhados = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * @return Collection<int, Tarefa>
     */
    public function getTarefas(): Collection
    {
        return $this->tarefas;
    }

    public function addTarefa(Tarefa $tarefa): static
    {
        if (!$this->tarefas->contains($tarefa)) {
            $this->tarefas->add($tarefa);
            $tarefa->setLista($this);
        }

        return $this;
    }

    public function removeTarefa(Tarefa $tarefa): static
    {
        if ($this->tarefas->removeElement($tarefa)) {
            // set the owning side to null (unless already changed)
            if ($tarefa->getLista() === $this) {
                $tarefa->setLista(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Usuario>
     */
    public function getUsuariosCompartilhados(): Collection
    {
        return $this->usuariosCompartilhados;
    }

    public function addUsuariosCompartilhado(Usuario $usuariosCompartilhado): static
    {
        if (!$this->usuariosCompartilhados->contains($usuariosCompartilhado)) {
            $this->usuariosCompartilhados->add($usuariosCompartilhado);
        }

        return $this;
    }

    public function removeUsuariosCompartilhado(Usuario $usuariosCompartilhado): static
    {
        $this->usuariosCompartilhados->removeElement($usuariosCompartilhado);

        return $this;
    }
}