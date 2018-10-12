<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fidelity
 *
 * @ORM\Table(name="tbltesserafidelity", indexes={@ORM\Index(name="FK_TBLTesseraFidelity_TBLAnagClienteFidelity", columns={"IDCodSocio"})})
 * @ORM\Entity
 */
class Fidelity
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDCodTessera", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodtessera;
    
    /**
     * @var string
     *
     * @ORM\Column(name="IDCodNeg", type="string", length=10, nullable=false)
     */
    private $idcodneg;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataRilascio", type="string", length=16, nullable=false)
     */
    private $flgdatarilascio;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataUltimoAcq", type="string", length=16, nullable=false)
     */
    private $flgdataultimoacq;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataUltimoUpd", type="string", length=16, nullable=false)
     */
    private $flgdataultimoupd;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataUltimoRitiroPremi", type="string", length=16, nullable=false)
     */
    private $flgdataultimoritiropremi;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataUltimoRitiroPremiPrecPromo", type="string", length=16, nullable=false)
     */
    private $flgdataultimoritiropremiprecpromo;
    
    /**
     * @var int
     *
     * @ORM\Column(name="IDSaldoPunti", type="integer", nullable=false)
     */
    private $idsaldopunti;
    
    /**
     * @var int
     *
     * @ORM\Column(name="IDSaldoPuntiPr", type="integer", nullable=false)
     */
    private $idsaldopuntipr;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="FlgBlackList", type="boolean", nullable=false)
     */
    private $flgblacklist;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="FlgStatotessera", type="boolean", nullable=false)
     */
    private $flgstatotessera;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgDataBlocco", type="string", length=16, nullable=false)
     */
    private $flgdatablocco;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgNewTessera", type="string", length=20, nullable=false)
     */
    private $flgnewtessera;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgTotAcq", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $flgtotacq;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgTotSconti", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $flgtotsconti;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgTotScontr", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $flgtotscontr;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgTotArt", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $flgtotart;
    
    /**
     * @var string
     *
     * @ORM\Column(name="FlgTotPremi", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $flgtotpremi;
    
    /**
     * @var \App\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCodSocio", referencedColumnName="IDCodiceCliente")
     * })
     */
    private $idcodsocio;

    public function getIdcodtessera(): ?string
    {
        return $this->idcodtessera;
    }

    public function getIdcodneg(): ?string
    {
        return $this->idcodneg;
    }

    public function setIdcodneg(string $idcodneg): self
    {
        $this->idcodneg = $idcodneg;

        return $this;
    }

    public function getFlgdatarilascio(): ?string
    {
        return $this->flgdatarilascio;
    }

    public function setFlgdatarilascio(string $flgdatarilascio): self
    {
        $this->flgdatarilascio = $flgdatarilascio;

        return $this;
    }

    public function getFlgdataultimoacq(): ?string
    {
        return $this->flgdataultimoacq;
    }

    public function setFlgdataultimoacq(string $flgdataultimoacq): self
    {
        $this->flgdataultimoacq = $flgdataultimoacq;

        return $this;
    }

    public function getFlgdataultimoupd(): ?string
    {
        return $this->flgdataultimoupd;
    }

    public function setFlgdataultimoupd(string $flgdataultimoupd): self
    {
        $this->flgdataultimoupd = $flgdataultimoupd;

        return $this;
    }

    public function getFlgdataultimoritiropremi(): ?string
    {
        return $this->flgdataultimoritiropremi;
    }

    public function setFlgdataultimoritiropremi(string $flgdataultimoritiropremi): self
    {
        $this->flgdataultimoritiropremi = $flgdataultimoritiropremi;

        return $this;
    }

    public function getFlgdataultimoritiropremiprecpromo(): ?string
    {
        return $this->flgdataultimoritiropremiprecpromo;
    }

    public function setFlgdataultimoritiropremiprecpromo(string $flgdataultimoritiropremiprecpromo): self
    {
        $this->flgdataultimoritiropremiprecpromo = $flgdataultimoritiropremiprecpromo;

        return $this;
    }

    public function getIdsaldopunti(): ?int
    {
        return $this->idsaldopunti;
    }

    public function setIdsaldopunti(int $idsaldopunti): self
    {
        $this->idsaldopunti = $idsaldopunti;

        return $this;
    }

    public function getIdsaldopuntipr(): ?int
    {
        return $this->idsaldopuntipr;
    }

    public function setIdsaldopuntipr(int $idsaldopuntipr): self
    {
        $this->idsaldopuntipr = $idsaldopuntipr;

        return $this;
    }

    public function getFlgblacklist(): ?bool
    {
        return $this->flgblacklist;
    }

    public function setFlgblacklist(bool $flgblacklist): self
    {
        $this->flgblacklist = $flgblacklist;

        return $this;
    }

    public function getFlgstatotessera(): ?bool
    {
        return $this->flgstatotessera;
    }

    public function setFlgstatotessera(bool $flgstatotessera): self
    {
        $this->flgstatotessera = $flgstatotessera;

        return $this;
    }

    public function getFlgdatablocco(): ?string
    {
        return $this->flgdatablocco;
    }

    public function setFlgdatablocco(string $flgdatablocco): self
    {
        $this->flgdatablocco = $flgdatablocco;

        return $this;
    }

    public function getFlgnewtessera(): ?string
    {
        return $this->flgnewtessera;
    }

    public function setFlgnewtessera(string $flgnewtessera): self
    {
        $this->flgnewtessera = $flgnewtessera;

        return $this;
    }

    public function getFlgtotacq()
    {
        return $this->flgtotacq;
    }

    public function setFlgtotacq($flgtotacq): self
    {
        $this->flgtotacq = $flgtotacq;

        return $this;
    }

    public function getFlgtotsconti()
    {
        return $this->flgtotsconti;
    }

    public function setFlgtotsconti($flgtotsconti): self
    {
        $this->flgtotsconti = $flgtotsconti;

        return $this;
    }

    public function getFlgtotscontr()
    {
        return $this->flgtotscontr;
    }

    public function setFlgtotscontr($flgtotscontr): self
    {
        $this->flgtotscontr = $flgtotscontr;

        return $this;
    }

    public function getFlgtotart()
    {
        return $this->flgtotart;
    }

    public function setFlgtotart($flgtotart): self
    {
        $this->flgtotart = $flgtotart;

        return $this;
    }

    public function getFlgtotpremi()
    {
        return $this->flgtotpremi;
    }

    public function setFlgtotpremi($flgtotpremi): self
    {
        $this->flgtotpremi = $flgtotpremi;

        return $this;
    }

    public function getIdcodsocio(): ?Customer
    {
        return $this->idcodsocio;
    }

    public function setIdcodsocio(?Customer $idcodsocio): self
    {
        $this->idcodsocio = $idcodsocio;

        return $this;
    }
}
