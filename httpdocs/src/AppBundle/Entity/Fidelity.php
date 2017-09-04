<?php

namespace AppBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="IDSaldoPunti", type="integer", nullable=false)
     */
    private $idsaldopunti;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDSaldoPuntiPr", type="integer", nullable=false)
     */
    private $idsaldopuntipr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="FlgBlackList", type="boolean", nullable=false)
     */
    private $flgblacklist;

    /**
     * @var boolean
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
     * @var string
     *
     * @ORM\Column(name="IDCodTessera", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodtessera;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDCodSocio", referencedColumnName="IDCodiceCliente")
     * })
     */
    private $idcodsocio;



    /**
     * Set idcodneg
     *
     * @param string $idcodneg
     *
     * @return Fidelity
     */
    public function setIdcodneg($idcodneg)
    {
        $this->idcodneg = $idcodneg;

        return $this;
    }

    /**
     * Get idcodneg
     *
     * @return string
     */
    public function getIdcodneg()
    {
        return $this->idcodneg;
    }

    /**
     * Set flgdatarilascio
     *
     * @param string $flgdatarilascio
     *
     * @return Fidelity
     */
    public function setFlgdatarilascio($flgdatarilascio)
    {
        $this->flgdatarilascio = $flgdatarilascio;

        return $this;
    }

    /**
     * Get flgdatarilascio
     *
     * @return string
     */
    public function getFlgdatarilascio()
    {
        return $this->flgdatarilascio;
    }

    /**
     * Set flgdataultimoacq
     *
     * @param string $flgdataultimoacq
     *
     * @return Fidelity
     */
    public function setFlgdataultimoacq($flgdataultimoacq)
    {
        $this->flgdataultimoacq = $flgdataultimoacq;

        return $this;
    }

    /**
     * Get flgdataultimoacq
     *
     * @return string
     */
    public function getFlgdataultimoacq()
    {
        return $this->flgdataultimoacq;
    }

    /**
     * Set flgdataultimoupd
     *
     * @param string $flgdataultimoupd
     *
     * @return Fidelity
     */
    public function setFlgdataultimoupd($flgdataultimoupd)
    {
        $this->flgdataultimoupd = $flgdataultimoupd;

        return $this;
    }

    /**
     * Get flgdataultimoupd
     *
     * @return string
     */
    public function getFlgdataultimoupd()
    {
        return $this->flgdataultimoupd;
    }

    /**
     * Set flgdataultimoritiropremi
     *
     * @param string $flgdataultimoritiropremi
     *
     * @return Fidelity
     */
    public function setFlgdataultimoritiropremi($flgdataultimoritiropremi)
    {
        $this->flgdataultimoritiropremi = $flgdataultimoritiropremi;

        return $this;
    }

    /**
     * Get flgdataultimoritiropremi
     *
     * @return string
     */
    public function getFlgdataultimoritiropremi()
    {
        return $this->flgdataultimoritiropremi;
    }

    /**
     * Set flgdataultimoritiropremiprecpromo
     *
     * @param string $flgdataultimoritiropremiprecpromo
     *
     * @return Fidelity
     */
    public function setFlgdataultimoritiropremiprecpromo($flgdataultimoritiropremiprecpromo)
    {
        $this->flgdataultimoritiropremiprecpromo = $flgdataultimoritiropremiprecpromo;

        return $this;
    }

    /**
     * Get flgdataultimoritiropremiprecpromo
     *
     * @return string
     */
    public function getFlgdataultimoritiropremiprecpromo()
    {
        return $this->flgdataultimoritiropremiprecpromo;
    }

    /**
     * Set idsaldopunti
     *
     * @param integer $idsaldopunti
     *
     * @return Fidelity
     */
    public function setIdsaldopunti($idsaldopunti)
    {
        $this->idsaldopunti = $idsaldopunti;

        return $this;
    }

    /**
     * Get idsaldopunti
     *
     * @return integer
     */
    public function getIdsaldopunti()
    {
        return $this->idsaldopunti;
    }

    /**
     * Set idsaldopuntipr
     *
     * @param integer $idsaldopuntipr
     *
     * @return Fidelity
     */
    public function setIdsaldopuntipr($idsaldopuntipr)
    {
        $this->idsaldopuntipr = $idsaldopuntipr;

        return $this;
    }

    /**
     * Get idsaldopuntipr
     *
     * @return integer
     */
    public function getIdsaldopuntipr()
    {
        return $this->idsaldopuntipr;
    }

    /**
     * Set flgblacklist
     *
     * @param boolean $flgblacklist
     *
     * @return Fidelity
     */
    public function setFlgblacklist($flgblacklist)
    {
        $this->flgblacklist = $flgblacklist;

        return $this;
    }

    /**
     * Get flgblacklist
     *
     * @return boolean
     */
    public function getFlgblacklist()
    {
        return $this->flgblacklist;
    }

    /**
     * Set flgstatotessera
     *
     * @param boolean $flgstatotessera
     *
     * @return Fidelity
     */
    public function setFlgstatotessera($flgstatotessera)
    {
        $this->flgstatotessera = $flgstatotessera;

        return $this;
    }

    /**
     * Get flgstatotessera
     *
     * @return boolean
     */
    public function getFlgstatotessera()
    {
        return $this->flgstatotessera;
    }

    /**
     * Set flgdatablocco
     *
     * @param string $flgdatablocco
     *
     * @return Fidelity
     */
    public function setFlgdatablocco($flgdatablocco)
    {
        $this->flgdatablocco = $flgdatablocco;

        return $this;
    }

    /**
     * Get flgdatablocco
     *
     * @return string
     */
    public function getFlgdatablocco()
    {
        return $this->flgdatablocco;
    }

    /**
     * Set flgnewtessera
     *
     * @param string $flgnewtessera
     *
     * @return Fidelity
     */
    public function setFlgnewtessera($flgnewtessera)
    {
        $this->flgnewtessera = $flgnewtessera;

        return $this;
    }

    /**
     * Get flgnewtessera
     *
     * @return string
     */
    public function getFlgnewtessera()
    {
        return $this->flgnewtessera;
    }

    /**
     * Set flgtotacq
     *
     * @param string $flgtotacq
     *
     * @return Fidelity
     */
    public function setFlgtotacq($flgtotacq)
    {
        $this->flgtotacq = $flgtotacq;

        return $this;
    }

    /**
     * Get flgtotacq
     *
     * @return string
     */
    public function getFlgtotacq()
    {
        return $this->flgtotacq;
    }

    /**
     * Set flgtotsconti
     *
     * @param string $flgtotsconti
     *
     * @return Fidelity
     */
    public function setFlgtotsconti($flgtotsconti)
    {
        $this->flgtotsconti = $flgtotsconti;

        return $this;
    }

    /**
     * Get flgtotsconti
     *
     * @return string
     */
    public function getFlgtotsconti()
    {
        return $this->flgtotsconti;
    }

    /**
     * Set flgtotscontr
     *
     * @param string $flgtotscontr
     *
     * @return Fidelity
     */
    public function setFlgtotscontr($flgtotscontr)
    {
        $this->flgtotscontr = $flgtotscontr;

        return $this;
    }

    /**
     * Get flgtotscontr
     *
     * @return string
     */
    public function getFlgtotscontr()
    {
        return $this->flgtotscontr;
    }

    /**
     * Set flgtotart
     *
     * @param string $flgtotart
     *
     * @return Fidelity
     */
    public function setFlgtotart($flgtotart)
    {
        $this->flgtotart = $flgtotart;

        return $this;
    }

    /**
     * Get flgtotart
     *
     * @return string
     */
    public function getFlgtotart()
    {
        return $this->flgtotart;
    }

    /**
     * Set flgtotpremi
     *
     * @param string $flgtotpremi
     *
     * @return Fidelity
     */
    public function setFlgtotpremi($flgtotpremi)
    {
        $this->flgtotpremi = $flgtotpremi;

        return $this;
    }

    /**
     * Get flgtotpremi
     *
     * @return string
     */
    public function getFlgtotpremi()
    {
        return $this->flgtotpremi;
    }

    /**
     * Get idcodtessera
     *
     * @return string
     */
    public function getIdcodtessera()
    {
        return $this->idcodtessera;
    }

    /**
     * Set idcodsocio
     *
     * @param \AppBundle\Entity\Customer $idcodsocio
     *
     * @return Fidelity
     */
    public function setIdcodsocio(\AppBundle\Entity\Customer $idcodsocio = null)
    {
        $this->idcodsocio = $idcodsocio;

        return $this;
    }

    /**
     * Get idcodsocio
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getIdcodsocio()
    {
        return $this->idcodsocio;
    }
}
