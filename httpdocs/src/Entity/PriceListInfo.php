<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceListInfo
 *
 * @ORM\Table(name="tblanaglistini")
 * @ORM\Entity
 */
class PriceListInfo
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodListino", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codlistino;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Descrizione", type="string", length=50, nullable=false)
     */
    private $descrizione;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FlgDataInizioValidita", type="datetime", nullable=false)
     */
    private $flgdatainiziovalidita;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FlgDataFineValidita", type="datetime", nullable=false)
     */
    private $flgdatafinevalidita;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FlgDataInserimento", type="datetime", nullable=false)
     */
    private $flgdatainserimento;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FlgDataEliminazione", type="datetime", nullable=false)
     */
    private $flgdataeliminazione;

    public function getCodlistino(): ?string
    {
        return $this->codlistino;
    }

    public function getDescrizione(): ?string
    {
        return $this->descrizione;
    }

    public function setDescrizione(string $descrizione): self
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    public function getFlgdatainiziovalidita(): ?\DateTimeInterface
    {
        return $this->flgdatainiziovalidita;
    }

    public function setFlgdatainiziovalidita(\DateTimeInterface $flgdatainiziovalidita): self
    {
        $this->flgdatainiziovalidita = $flgdatainiziovalidita;

        return $this;
    }

    public function getFlgdatafinevalidita(): ?\DateTimeInterface
    {
        return $this->flgdatafinevalidita;
    }

    public function setFlgdatafinevalidita(\DateTimeInterface $flgdatafinevalidita): self
    {
        $this->flgdatafinevalidita = $flgdatafinevalidita;

        return $this;
    }

    public function getFlgdatainserimento(): ?\DateTimeInterface
    {
        return $this->flgdatainserimento;
    }

    public function setFlgdatainserimento(\DateTimeInterface $flgdatainserimento): self
    {
        $this->flgdatainserimento = $flgdatainserimento;

        return $this;
    }

    public function getFlgdataeliminazione(): ?\DateTimeInterface
    {
        return $this->flgdataeliminazione;
    }

    public function setFlgdataeliminazione(\DateTimeInterface $flgdataeliminazione): self
    {
        $this->flgdataeliminazione = $flgdataeliminazione;

        return $this;
    }
		
}
