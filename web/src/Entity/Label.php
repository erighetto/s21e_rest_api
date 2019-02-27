<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Label
 *
 * @ORM\Table(name="tbltipoetichette")
 * @ORM\Entity
 */
class Label
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTipoEtic", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtipoetic;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescTipoEtic", type="string", length=50, nullable=false)
     */
    private $desctipoetic;

    public function getCodtipoetic(): ?string
    {
        return $this->codtipoetic;
    }

    public function getDesctipoetic(): ?string
    {
        return $this->desctipoetic;
    }

    public function setDesctipoetic(string $desctipoetic): self
    {
        $this->desctipoetic = $desctipoetic;

        return $this;
    }
}
