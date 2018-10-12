<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ean
 *
 * @ORM\Table(name="tbltipoean")
 * @ORM\Entity
 */
class EanType
{
    
    /**
     * @var string
     *
     * @ORM\Column(name="CodTipoEan", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtipoean;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescTipoEan", type="string", length=50, nullable=false)
     */
    private $desctipoean;

    public function getCodtipoean(): ?string
    {
        return $this->codtipoean;
    }

    public function getDesctipoean(): ?string
    {
        return $this->desctipoean;
    }

    public function setDesctipoean(string $desctipoean): self
    {
        $this->desctipoean = $desctipoean;

        return $this;
    }
		
}