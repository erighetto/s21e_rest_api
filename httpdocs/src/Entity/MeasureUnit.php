<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MeasureUnit
 *
 * @ORM\Table(name="tblunitamisura")
 * @ORM\Entity
 */
class MeasureUnit
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodUmis", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codumis;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescUmis", type="string", length=50, nullable=false)
     */
    private $descumis;
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="ValUmis", type="float", precision=10, scale=0, nullable=true, options={"default"=NULL})
     */
    private $valumis = NULL;
    
    /**
     * @var string
     *
     * @ORM\Column(name="SSMA_TimeStamp", type="blob", length=255, nullable=false)
     */
    private $ssmaTimestamp;

    public function getCodumis(): ?string
    {
        return $this->codumis;
    }

    public function getDescumis(): ?string
    {
        return $this->descumis;
    }

    public function setDescumis(string $descumis): self
    {
        $this->descumis = $descumis;

        return $this;
    }

    public function getValumis(): ?float
    {
        return $this->valumis;
    }

    public function setValumis(?float $valumis): self
    {
        $this->valumis = $valumis;

        return $this;
    }

    public function getSsmaTimestamp()
    {
        return $this->ssmaTimestamp;
    }

    public function setSsmaTimestamp($ssmaTimestamp): self
    {
        $this->ssmaTimestamp = $ssmaTimestamp;

        return $this;
    }
}
