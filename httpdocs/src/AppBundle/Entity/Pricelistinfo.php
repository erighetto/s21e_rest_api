<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricelistinfo
 *
 * @ORM\Table(name="tblanaglistini")
 * @ORM\Entity
 */
class Pricelistinfo
{
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

    /**
     * @var string
     *
     * @ORM\Column(name="CodListino", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codlistino;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Item", mappedBy="codlistino")
     */
    private $codart;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codart = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Pricelistinfo
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set flgdatainiziovalidita
     *
     * @param \DateTime $flgdatainiziovalidita
     *
     * @return Pricelistinfo
     */
    public function setFlgdatainiziovalidita($flgdatainiziovalidita)
    {
        $this->flgdatainiziovalidita = $flgdatainiziovalidita;

        return $this;
    }

    /**
     * Get flgdatainiziovalidita
     *
     * @return \DateTime
     */
    public function getFlgdatainiziovalidita()
    {
        return $this->flgdatainiziovalidita;
    }

    /**
     * Set flgdatafinevalidita
     *
     * @param \DateTime $flgdatafinevalidita
     *
     * @return Pricelistinfo
     */
    public function setFlgdatafinevalidita($flgdatafinevalidita)
    {
        $this->flgdatafinevalidita = $flgdatafinevalidita;

        return $this;
    }

    /**
     * Get flgdatafinevalidita
     *
     * @return \DateTime
     */
    public function getFlgdatafinevalidita()
    {
        return $this->flgdatafinevalidita;
    }

    /**
     * Set flgdatainserimento
     *
     * @param \DateTime $flgdatainserimento
     *
     * @return Pricelistinfo
     */
    public function setFlgdatainserimento($flgdatainserimento)
    {
        $this->flgdatainserimento = $flgdatainserimento;

        return $this;
    }

    /**
     * Get flgdatainserimento
     *
     * @return \DateTime
     */
    public function getFlgdatainserimento()
    {
        return $this->flgdatainserimento;
    }

    /**
     * Set flgdataeliminazione
     *
     * @param \DateTime $flgdataeliminazione
     *
     * @return Pricelistinfo
     */
    public function setFlgdataeliminazione($flgdataeliminazione)
    {
        $this->flgdataeliminazione = $flgdataeliminazione;

        return $this;
    }

    /**
     * Get flgdataeliminazione
     *
     * @return \DateTime
     */
    public function getFlgdataeliminazione()
    {
        return $this->flgdataeliminazione;
    }

    /**
     * Get codlistino
     *
     * @return string
     */
    public function getCodlistino()
    {
        return $this->codlistino;
    }

    /**
     * Add codart
     *
     * @param \AppBundle\Entity\Item $codart
     *
     * @return Pricelistinfo
     */
    public function addCodart(\AppBundle\Entity\Item $codart)
    {
        $this->codart[] = $codart;

        return $this;
    }

    /**
     * Remove codart
     *
     * @param \AppBundle\Entity\Item $codart
     */
    public function removeCodart(\AppBundle\Entity\Item $codart)
    {
        $this->codart->removeElement($codart);
    }

    /**
     * Get codart
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCodart()
    {
        return $this->codart;
    }
}
