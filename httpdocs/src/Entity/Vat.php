<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vat
 *
 * @ORM\Table(name="tblaliquoteiva")
 * @ORM\Entity
 */
class Vat
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDAliquota", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaliquota;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescAliquota", type="string", length=50, nullable=false)
     */
    private $descaliquota;
    
    /**
     * @var int
     *
     * @ORM\Column(name="ValAliq", type="integer", nullable=false)
     */
    private $valaliq;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgUltimaModifica", type="string", length=16, nullable=false)
     */
    private $flgultimamodifica;

    public function getIdaliquota(): ?string
    {
        return $this->idaliquota;
    }

    public function getDescaliquota(): ?string
    {
        return $this->descaliquota;
    }

    public function setDescaliquota(string $descaliquota): self
    {
        $this->descaliquota = $descaliquota;

        return $this;
    }

    public function getValaliq(): ?int
    {
        return $this->valaliq;
    }

    public function setValaliq(int $valaliq): self
    {
        $this->valaliq = $valaliq;

        return $this;
    }

    public function getFlgultimamodifica(): ?string
    {
        return $this->flgultimamodifica;
    }

    public function setFlgultimamodifica(string $flgultimamodifica): self
    {
        $this->flgultimamodifica = $flgultimamodifica;

        return $this;
    }
}
