<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="tblstatiarticoli")
 * @ORM\Entity
 */
class Status
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodStato", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codstato;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DescStato", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $descstato = NULL;

    public function getCodstato(): ?string
    {
        return $this->codstato;
    }

    public function getDescstato(): ?string
    {
        return $this->descstato;
    }

    public function setDescstato(?string $descstato): self
    {
        $this->descstato = $descstato;

        return $this;
    }
}
