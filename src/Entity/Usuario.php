<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Lista::class, orphanRemoval: true)]
    private Collection $listas;

    #[ORM\ManyToMany(targetEntity: Lista::class, mappedBy: 'usuariosCompartilhados')]
    private Collection $listasCompartilhadas;

    public function __construct()
    {
        $this->listas = new ArrayCollection();
        $this->listasCompartilhadas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Lista>
     */
    public function getListas(): Collection
    {
        return $this->listas;
    }

    public function addLista(Lista $lista): static
    {
        if (!$this->listas->contains($lista)) {
            $this->listas->add($lista);
            $lista->setUsuario($this);
        }

        return $this;
    }

    public function removeLista(Lista $lista): static
    {
        if ($this->listas->removeElement($lista)) {
            // set the owning side to null (unless already changed)
            if ($lista->getUsuario() === $this) {
                $lista->setUsuario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lista>
     */
    public function getListasCompartilhadas(): Collection
    {
        return $this->listasCompartilhadas;
    }

    public function addListasCompartilhada(Lista $listasCompartilhada): static
    {
        if (!$this->listasCompartilhadas->contains($listasCompartilhada)) {
            $this->listasCompartilhadas->add($listasCompartilhada);
            $listasCompartilhada->addUsuariosCompartilhado($this);
        }

        return $this;
    }

    public function removeListasCompartilhada(Lista $listasCompartilhada): static
    {
        if ($this->listasCompartilhadas->removeElement($listasCompartilhada)) {
            $listasCompartilhada->removeUsuariosCompartilhado($this);
        }

        return $this;
    }
}