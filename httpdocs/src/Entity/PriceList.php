<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceList
 *
 * @ORM\Table(name="tbllistinovend", indexes={@ORM\Index(name="FK_TBLListinoVend_TBLAnagListini", columns={"CodListino"}), @ORM\Index(name="FK_TBLListinoVend_TBLArticolo", columns={"CodArt"})})
 * @ORM\Entity
 */
class PriceList
{
    /**
     * @var \App\Entity\Item
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\ManyToOne(targetEntity="App\Entity\Item", inversedBy="ean")
     * @ORM\JoinColumn(name="CodArt", referencedColumnName="CodArt")
     *
     */
    private $codart;
    
    /**
     * @var \App\Entity\PriceListInfo
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\PriceListInfo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodListino", referencedColumnName="CodListino")
     * })
     */
    private $codlistino;
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVendCons", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvendcons = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVendPub", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvendpub = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVendPromo", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvendpromo = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVend01", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvend01 = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVend02", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvend02 = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PrzVend03", type="float", precision=10, scale=0, nullable=true)
     */
    private $przvend03 = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="pRic", type="float", precision=10, scale=0, nullable=true)
     */
    private $pric = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="pMarg", type="float", precision=10, scale=0, nullable=true)
     */
    private $pmarg = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgDataInizioValidita", type="string", length=19, nullable=true, options={"default"=NULL})
     */
    private $flgdatainiziovalidita = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgDataFineValidita", type="string", length=19, nullable=true, options={"default"=NULL})
     */
    private $flgdatafinevalidita = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgDataUltimaModifica", type="string", length=19, nullable=true, options={"default"=NULL})
     */
    private $flgdataultimamodifica = NULL;

    public function getPrzvendcons(): ?float
    {
        return $this->przvendcons;
    }

    public function setPrzvendcons(?float $przvendcons): self
    {
        $this->przvendcons = $przvendcons;

        return $this;
    }

    public function getPrzvendpub(): ?float
    {
        return $this->przvendpub;
    }

    public function setPrzvendpub(?float $przvendpub): self
    {
        $this->przvendpub = $przvendpub;

        return $this;
    }

    public function getPrzvendpromo(): ?float
    {
        return $this->przvendpromo;
    }

    public function setPrzvendpromo(?float $przvendpromo): self
    {
        $this->przvendpromo = $przvendpromo;

        return $this;
    }

    public function getPrzvend01(): ?float
    {
        return $this->przvend01;
    }

    public function setPrzvend01(?float $przvend01): self
    {
        $this->przvend01 = $przvend01;

        return $this;
    }

    public function getPrzvend02(): ?float
    {
        return $this->przvend02;
    }

    public function setPrzvend02(?float $przvend02): self
    {
        $this->przvend02 = $przvend02;

        return $this;
    }

    public function getPrzvend03(): ?float
    {
        return $this->przvend03;
    }

    public function setPrzvend03(?float $przvend03): self
    {
        $this->przvend03 = $przvend03;

        return $this;
    }

    public function getPric(): ?float
    {
        return $this->pric;
    }

    public function setPric(?float $pric): self
    {
        $this->pric = $pric;

        return $this;
    }

    public function getPmarg(): ?float
    {
        return $this->pmarg;
    }

    public function setPmarg(?float $pmarg): self
    {
        $this->pmarg = $pmarg;

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

    public function getFlgdataultimamodifica(): ?string
    {
        return $this->flgdataultimamodifica;
    }

    public function setFlgdataultimamodifica(?string $flgdataultimamodifica): self
    {
        $this->flgdataultimamodifica = $flgdataultimamodifica;

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

    public function getCodlistino(): ?PriceListInfo
    {
        return $this->codlistino;
    }

    public function setCodlistino(?PriceListInfo $codlistino): self
    {
        $this->codlistino = $codlistino;

        return $this;
    }
		
}