<?php

namespace App\Entity;

use App\Repository\TarefaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TarefaRepository::class)]
class Tarefa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $descricao = null;

    #[ORM\Column]
    private ?bool $concluida = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank]
    private ?\DateTimeInterface $dataCriacao = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dataConclusao = null;

    #[ORM\ManyToOne(inversedBy: 'tarefas')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Lista $lista = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): static
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function isConcluida(): ?bool
    {
        return $this->concluida;
    }

    public function setConcluida(bool $concluida): static
    {
        $this->concluida = $concluida;

        return $this;
    }

    public function getDataCriacao(): ?\DateTimeInterface
    {
        return $this->dataCriacao;
    }

    public function setDataCriacao(\DateTimeInterface $dataCriacao): static
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    public function getDataConclusao(): ?\DateTimeInterface
    {
        return $this->dataConclusao;
    }

    public function setDataConclusao(?\DateTimeInterface $dataConclusao): static
    {
        $this->dataConclusao = $dataConclusao;

        return $this;
    }

    public function getLista(): ?Lista
    {
        return $this->lista;
    }

    public function setLista(?Lista $lista): static
    {
        $this->lista = $lista;

        return $this;
    }
}