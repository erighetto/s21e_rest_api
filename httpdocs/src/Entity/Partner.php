<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partner
 *
 * @ORM\Table(name="tblinterlocutori")
 * @ORM\Entity
 */
class Partner
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodInt", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codint;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodCEDI", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $codcedi = NULL;
    
    /**
     * @var string
     *
     * @ORM\Column(name="RagSoc", type="string", length=50, nullable=false)
     */
    private $ragsoc;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Piva", type="string", length=11, nullable=true, options={"default"=NULL})
     */
    private $piva = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CF", type="string", length=16, nullable=true, options={"default"=NULL})
     */
    private $cf = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Ind", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $ind = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Loc", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $loc = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Citta", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $citta = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Prv", type="string", length=2, nullable=true, options={"default"=NULL})
     */
    private $prv = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CAP", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $cap = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Tel", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $tel = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Mail", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $mail = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Web", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $web = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataCreaz", type="string", length=20, nullable=true, options={"default"=NULL})
     */
    private $flgdatacreaz = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataEliminaz", type="string", length=20, nullable=true, options={"default"=NULL})
     */
    private $flgdataeliminaz = NULL;
    
    /**
     * @var bool|null
     *
     * @ORM\Column(name="flgStato", type="boolean", nullable=true)
     */
    private $flgstato = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodTipoPag", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $codtipopag = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="SctListinoAcq", type="integer", nullable=true)
     */
    private $sctlistinoacq = '0';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="SctListinoVend", type="integer", nullable=true)
     */
    private $sctlistinovend = '0';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="SctFattura", type="integer", nullable=true)
     */
    private $sctfattura = '0';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="flgDayConsegna", type="integer", nullable=true)
     */
    private $flgdayconsegna = '0';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="flgFreqConsegna", type="integer", nullable=true)
     */
    private $flgfreqconsegna = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgContoC", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgcontoc = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgABI", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgabi = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgCAB", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgcab = NULL;

    public function getCodint(): ?string
    {
        return $this->codint;
    }

    public function getCodcedi(): ?string
    {
        return $this->codcedi;
    }

    public function setCodcedi(?string $codcedi): self
    {
        $this->codcedi = $codcedi;

        return $this;
    }

    public function getRagsoc(): ?string
    {
        return $this->ragsoc;
    }

    public function setRagsoc(string $ragsoc): self
    {
        $this->ragsoc = $ragsoc;

        return $this;
    }

    public function getPiva(): ?string
    {
        return $this->piva;
    }

    public function setPiva(?string $piva): self
    {
        $this->piva = $piva;

        return $this;
    }

    public function getCf(): ?string
    {
        return $this->cf;
    }

    public function setCf(?string $cf): self
    {
        $this->cf = $cf;

        return $this;
    }

    public function getInd(): ?string
    {
        return $this->ind;
    }

    public function setInd(?string $ind): self
    {
        $this->ind = $ind;

        return $this;
    }

    public function getLoc(): ?string
    {
        return $this->loc;
    }

    public function setLoc(?string $loc): self
    {
        $this->loc = $loc;

        return $this;
    }

    public function getCitta(): ?string
    {
        return $this->citta;
    }

    public function setCitta(?string $citta): self
    {
        $this->citta = $citta;

        return $this;
    }

    public function getPrv(): ?string
    {
        return $this->prv;
    }

    public function setPrv(?string $prv): self
    {
        $this->prv = $prv;

        return $this;
    }

    public function getCap(): ?string
    {
        return $this->cap;
    }

    public function setCap(?string $cap): self
    {
        $this->cap = $cap;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getFlgdatacreaz(): ?string
    {
        return $this->flgdatacreaz;
    }

    public function setFlgdatacreaz(?string $flgdatacreaz): self
    {
        $this->flgdatacreaz = $flgdatacreaz;

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

    public function getFlgstato(): ?bool
    {
        return $this->flgstato;
    }

    public function setFlgstato(?bool $flgstato): self
    {
        $this->flgstato = $flgstato;

        return $this;
    }

    public function getCodtipopag(): ?string
    {
        return $this->codtipopag;
    }

    public function setCodtipopag(?string $codtipopag): self
    {
        $this->codtipopag = $codtipopag;

        return $this;
    }

    public function getSctlistinoacq(): ?int
    {
        return $this->sctlistinoacq;
    }

    public function setSctlistinoacq(?int $sctlistinoacq): self
    {
        $this->sctlistinoacq = $sctlistinoacq;

        return $this;
    }

    public function getSctlistinovend(): ?int
    {
        return $this->sctlistinovend;
    }

    public function setSctlistinovend(?int $sctlistinovend): self
    {
        $this->sctlistinovend = $sctlistinovend;

        return $this;
    }

    public function getSctfattura(): ?int
    {
        return $this->sctfattura;
    }

    public function setSctfattura(?int $sctfattura): self
    {
        $this->sctfattura = $sctfattura;

        return $this;
    }

    public function getFlgdayconsegna(): ?int
    {
        return $this->flgdayconsegna;
    }

    public function setFlgdayconsegna(?int $flgdayconsegna): self
    {
        $this->flgdayconsegna = $flgdayconsegna;

        return $this;
    }

    public function getFlgfreqconsegna(): ?int
    {
        return $this->flgfreqconsegna;
    }

    public function setFlgfreqconsegna(?int $flgfreqconsegna): self
    {
        $this->flgfreqconsegna = $flgfreqconsegna;

        return $this;
    }

    public function getFlgcontoc(): ?string
    {
        return $this->flgcontoc;
    }

    public function setFlgcontoc(?string $flgcontoc): self
    {
        $this->flgcontoc = $flgcontoc;

        return $this;
    }

    public function getFlgabi(): ?string
    {
        return $this->flgabi;
    }

    public function setFlgabi(?string $flgabi): self
    {
        $this->flgabi = $flgabi;

        return $this;
    }

    public function getFlgcab(): ?string
    {
        return $this->flgcab;
    }

    public function setFlgcab(?string $flgcab): self
    {
        $this->flgcab = $flgcab;

        return $this;
    }
}
