<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pricelist
 *
 * @ORM\Table(name="tbllistinovend", indexes={@ORM\Index(name="FK_TBLListinoVend_TBLAnagListini", columns={"CodListino"}), @ORM\Index(name="FK_TBLListinoVend_TBLArticolo", columns={"CodArt"})})
 * @ORM\Entity
 */
class Pricelist {

  /**
   * @var \AppBundle\Entity\Item
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Item", inversedBy="ean")
   * @ORM\JoinColumn(name="CodArt", referencedColumnName="CodArt")
   *
   */
  private $codart;

  /**
   * @var \AppBundle\Entity\Pricelistinfo
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pricelistinfo")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodListino", referencedColumnName="CodListino")
   * })
   */
  private $codlist;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVendCons", type="float")
   */
  private $przvendcons;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVendPub", type="float")
   */
  private $przvendpub;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVendPromo", type="float")
   */
  private $przvendpromo;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVend01", type="float")
   */
  private $przvend01;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVend02", type="float")
   */
  private $przvend02;

  /**
   * @var double
   *
   * @ORM\Column(name="PrzVend03", type="float")
   */
  private $przvend03;

  /**
   * @var double
   *
   * @ORM\Column(name="pRic", type="float")
   */
  private $pric;

  /**
   * @var double
   *
   * @ORM\Column(name="pMarg", type="float")
   */
  private $pmarg;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="FlgDataInizioValidita", type="string", length=20,
   *   nullable=true)
   */
  private $flgdatainiziovalidita;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="FlgDataFineValidita", type="string", length=20,
   *   nullable=true)
   */
  private $flgdatafinevalidita;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="	FlgDataUltimaModifica", type="string", length=20,
   *   nullable=true)
   */
  private $flgdataultimamodifica;


  /**
   * @return float
   */
  public function getPrzvendcons(): float {
    return $this->przvendcons;
  }

  /**
   * @param float $przvendcons
   */
  public function setPrzvendcons(float $przvendcons) {
    $this->przvendcons = $przvendcons;
  }

  /**
   * @return float
   */
  public function getPrzvendpub(): float {
    return $this->przvendpub;
  }

  /**
   * @param float $przvendpub
   */
  public function setPrzvendpub(float $przvendpub) {
    $this->przvendpub = $przvendpub;
  }

  /**
   * @return float
   */
  public function getPrzvendpromo(): float {
    return $this->przvendpromo;
  }

  /**
   * @param float $przvendpromo
   */
  public function setPrzvendpromo(float $przvendpromo) {
    $this->przvendpromo = $przvendpromo;
  }

  /**
   * @return float
   */
  public function getPrzvend01(): float {
    return $this->przvend01;
  }

  /**
   * @param float $przvend01
   */
  public function setPrzvend01(float $przvend01) {
    $this->przvend01 = $przvend01;
  }

  /**
   * @return float
   */
  public function getPrzvend02(): float {
    return $this->przvend02;
  }

  /**
   * @param float $przvend02
   */
  public function setPrzvend02(float $przvend02) {
    $this->przvend02 = $przvend02;
  }

  /**
   * @return float
   */
  public function getPrzvend03(): float {
    return $this->przvend03;
  }

  /**
   * @param float $przvend03
   */
  public function setPrzvend03(float $przvend03) {
    $this->przvend03 = $przvend03;
  }

  /**
   * @return float
   */
  public function getPric(): float {
    return $this->pric;
  }

  /**
   * @param float $pric
   */
  public function setPric(float $pric) {
    $this->pric = $pric;
  }

  /**
   * @return float
   */
  public function getPmarg(): float {
    return $this->pmarg;
  }

  /**
   * @param float $pmarg
   */
  public function setPmarg(float $pmarg) {
    $this->pmarg = $pmarg;
  }

  /**
   * @return \DateTime
   */
  public function getFlgdatainiziovalidita(): \DateTime {
    return $this->flgdatainiziovalidita;
  }

  /**
   * @param \DateTime $flgdatainiziovalidita
   */
  public function setFlgdatainiziovalidita(\DateTime $flgdatainiziovalidita) {
    $this->flgdatainiziovalidita = $flgdatainiziovalidita;
  }

  /**
   * @return \DateTime
   */
  public function getFlgdatafinevalidita(): \DateTime {
    return $this->flgdatafinevalidita;
  }

  /**
   * @param \DateTime $flgdatafinevalidita
   */
  public function setFlgdatafinevalidita(\DateTime $flgdatafinevalidita) {
    $this->flgdatafinevalidita = $flgdatafinevalidita;
  }

  /**
   * @return \DateTime
   */
  public function getFlgdataultimamodifica(): \DateTime {
    return $this->flgdataultimamodifica;
  }

  /**
   * @param \DateTime $flgdataultimamodifica
   */
  public function setFlgdataultimamodifica(\DateTime $flgdataultimamodifica) {
    $this->flgdataultimamodifica = $flgdataultimamodifica;
  }

  /**
   * @param \AppBundle\Entity\Pricelistinfo $codlist
   *
   * @return \AppBundle\Entity\Pricelist
   */
  public function setCodlist(\AppBundle\Entity\Pricelistinfo $codlist = NULL) {
    $this->codlist = $codlist;

    return $this;
  }

  /**
   * @return \AppBundle\Entity\Pricelistinfo
   */
  public function getCodlist() {
    return $this->codlist;
  }

  /**
   * Set codart
   *
   * @param \AppBundle\Entity\Item $codart
   *
   * @return \AppBundle\Entity\Pricelist
   */
  public function setCodart(\AppBundle\Entity\Item $codart = NULL) {
    $this->codart = $codart;

    return $this;
  }

  /**
   * Get codart
   *
   * @return \AppBundle\Entity\Item
   */
  public function getCodart() {
    return $this->codart;
  }

}