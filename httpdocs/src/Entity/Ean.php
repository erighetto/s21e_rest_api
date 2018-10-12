<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ean
 *
 * @ORM\Table(name="tblean", indexes={@ORM\Index(name="FK_TBLEan_TBLArticolo", columns={"CodArt"})})
 * @ORM\Entity
 */
class Ean
{
    /**
     * @var \App\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Item", inversedBy="ean")
     * @ORM\JoinColumn(name="CodArt", referencedColumnName="CodArt")
     */
    private $codart;
    
    /**
     * @var string
     *
     * @ORM\Column(name="CodEAN", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codean;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgStatoEAN", type="string", length=1, nullable=true, options={"default"="'S'"})
     */
    private $flgstatoean = 'S';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataInizioValidità", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $flgdatainiziovalidita = 'NULL';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataFineValidità", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $flgdatafinevalidita = 'NULL';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataEliminaz", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $flgdataeliminaz = 'NULL';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataIns", type="string", length=16, nullable=true, options={"default"="NULL"})
     */
    private $flgdatains = 'NULL';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgPrimario", type="string", length=1, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $flgprimario = 'NULL';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="FlgDivulgataEliminaz", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $flgdivulgataeliminaz = 'NULL';

    public function getCodean(): ?string
    {
        return $this->codean;
    }

    public function getFlgstatoean(): ?string
    {
        return $this->flgstatoean;
    }

    public function setFlgstatoean(?string $flgstatoean): self
    {
        $this->flgstatoean = $flgstatoean;

        return $this;
    }

    public function getFlgdatainiziovalidita(): ?string
    {
        return $this->flgdatainiziovalidita;
    }

    public function setFlgdatainiziovalidita(?string $flgdatainiziovalidita): self
    {
        $this->flgdatainiziovalidita = $flgdatainiziovalidita;

        return $this;
    }

    public function getFlgdatafinevalidita(): ?string
    {
        return $this->flgdatafinevalidita;
    }

    public function setFlgdatafinevalidita(?string $flgdatafinevalidita): self
    {
        $this->flgdatafinevalidita = $flgdatafinevalidita;

        return $this;
    }

    public function getFlgdataeliminaz(): ?string
    {
        return $this->flgdataeliminaz;
    }

    public function setFlgdataeliminaz(?string $flgdataeliminaz): self
    {
        $this->flgdataeliminaz = $flgdataeliminaz;

        return $this;
    }

    public function getFlgdatains(): ?string
    {
        return $this->flgdatains;
    }

    public function setFlgdatains(?string $flgdatains): self
    {
        $this->flgdatains = $flgdatains;

        return $this;
    }

    public function getFlgprimario(): ?string
    {
        return $this->flgprimario;
    }

    public function setFlgprimario(?string $flgprimario): self
    {
        $this->flgprimario = $flgprimario;

        return $this;
    }

    public function getFlgdivulgataeliminaz(): ?int
    {
        return $this->flgdivulgataeliminaz;
    }

    public function setFlgdivulgataeliminaz(?int $flgdivulgataeliminaz): self
    {
        $this->flgdivulgataeliminaz = $flgdivulgataeliminaz;

        return $this;
    }

    public function getCodart(): ?Item
    {
        return $this->codart;
    }

    public function setCodart(?Item $codart): self
    {
        $this->codart = $codart;

        return $this;
    }
}
