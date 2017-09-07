<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="tblarticolo", indexes={@ORM\Index(name="TBLArticolo_TBLArticolo$TBLArticoloCodArt", columns={"CodArt"}), @ORM\Index(name="FK_TBLArticolo_TBLStatiArticoli", columns={"flgStatoArticolo"}), @ORM\Index(name="FK_TBLArticolo_TBLFamMerc", columns={"CodFamMerc"}), @ORM\Index(name="FK_TBLArticolo_TBLTipoEtichette", columns={"CodTipoEtic"}), @ORM\Index(name="FK_TBLArticolo_TBLRepartiECR", columns={"CodRepECR"}), @ORM\Index(name="FK_TBLArticolo_TBLUnitaMisura", columns={"CodUmis"}), @ORM\Index(name="FK_TBLArticolo_TBLInterlocutori", columns={"CodFornitore"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item {

  /**
   * @var string
   *
   * @ORM\Column(name="CodArtForn", type="string", length=50, nullable=true)
   */
  private $codartforn;

  /**
   * @var string
   *
   * @ORM\Column(name="CodFornitoreCEDI", type="string", length=20,
   *   nullable=true)
   */
  private $codfornitorecedi;

  /**
   * @var string
   *
   * @ORM\Column(name="CodRepBIL", type="string", length=10, nullable=true)
   */
  private $codrepbil;

  /**
   * @var string
   *
   * @ORM\Column(name="CodSottoFam", type="string", length=6, nullable=true)
   */
  private $codsottofam;

  /**
   * @var string
   *
   * @ORM\Column(name="CodFornitoreAlt", type="string", length=30,
   *   nullable=true)
   */
  private $codfornitorealt;

  /**
   * @var string
   *
   * @ORM\Column(name="CodAliq", type="string", length=6, nullable=false)
   */
  private $codaliq;


  /**
   * @var string
   *
   * @ORM\Column(name="CodTipoEAN", type="string", length=6, nullable=true)
   */
  private $codtipoean;

  /**
   * @var string
   *
   * @ORM\Column(name="CodBilancia", type="string", length=6, nullable=true)
   */
  private $codbilancia;

  /**
   * @var string
   *
   * @ORM\Column(name="CodBanco", type="string", length=50, nullable=true)
   */
  private $codbanco;

  /**
   * @var string
   *
   * @ORM\Column(name="CodAgg", type="string", length=10, nullable=true)
   */
  private $codagg;

  /**
   * @var string
   *
   * @ORM\Column(name="DescArticolo", type="string", length=100, nullable=false)
   */
  private $descarticolo;

  /**
   * @var string
   *
   * @ORM\Column(name="DescArticoloAlt", type="string", length=100,
   *   nullable=true)
   */
  private $descarticoloalt;

  /**
   * @var string
   *
   * @ORM\Column(name="DescArticoloEcr", type="string", length=30,
   *   nullable=true)
   */
  private $descarticoloecr;

  /**
   * @var string
   *
   * @ORM\Column(name="DescArticoloBil", type="string", length=30,
   *   nullable=true)
   */
  private $descarticolobil;

  /**
   * @var integer
   *
   * @ORM\Column(name="PxC", type="integer", nullable=true)
   */
  private $pxc;

  /**
   * @var integer
   *
   * @ORM\Column(name="CxC", type="integer", nullable=true)
   */
  private $cxc = '0';

  /**
   * @var integer
   *
   * @ORM\Column(name="CxS", type="integer", nullable=true)
   */
  private $cxs = '0';

  /**
   * @var float
   *
   * @ORM\Column(name="Qta", type="float", precision=10, scale=0, nullable=true)
   */
  private $qta = '0';

  /**
   * @var float
   *
   * @ORM\Column(name="PesoSgocciolato", type="float", precision=10, scale=0,
   *   nullable=true)
   */
  private $pesosgocciolato = '0';

  /**
   * @var float
   *
   * @ORM\Column(name="Sfrido", type="float", precision=10, scale=0,
   *   nullable=true)
   */
  private $sfrido = '0';

  /**
   * @var string
   *
   * @ORM\Column(name="flgSpedBil", type="string", length=1, nullable=true)
   */
  private $flgspedbil = 'N';

  /**
   * @var string
   *
   * @ORM\Column(name="flgArtTracc", type="string", length=50, nullable=true)
   */
  private $flgarttracc;

  /**
   * @var string
   *
   * @ORM\Column(name="flgAssortimento", type="string", length=1,
   *   nullable=false)
   */
  private $flgassortimento = 'S';

  /**
   * @var string
   *
   * @ORM\Column(name="flgVend", type="string", length=1, nullable=false)
   */
  private $flgvend = 'S';

  /**
   * @var string
   *
   * @ORM\Column(name="flgPrintEtic", type="string", length=1, nullable=false)
   */
  private $flgprintetic = 'S';

  /**
   * @var string
   *
   * @ORM\Column(name="flgVariaz", type="string", length=1, nullable=false)
   */
  private $flgvariaz = 'S';

  /**
   * @var string
   *
   * @ORM\Column(name="flgProvenienza", type="string", length=50, nullable=true)
   */
  private $flgprovenienza;

  /**
   * @var string
   *
   * @ORM\Column(name="flgCalibro", type="string", length=50, nullable=true)
   */
  private $flgcalibro = '0';

  /**
   * @var string
   *
   * @ORM\Column(name="flgCategoria", type="string", length=50, nullable=true)
   */
  private $flgcategoria = '0';

  /**
   * @var string
   *
   * @ORM\Column(name="flgDataCreaz", type="string", length=20, nullable=true)
   */
  private $flgdatacreaz;

  /**
   * @var string
   *
   * @ORM\Column(name="flgDataEliminaz", type="string", length=50,
   *   nullable=true)
   */
  private $flgdataeliminaz;

  /**
   * @var string
   *
   * @ORM\Column(name="flgArtTO", type="string", length=50, nullable=true)
   */
  private $flgartto;

  /**
   * @var string
   *
   * @ORM\Column(name="flgAspetto", type="string", length=5, nullable=true)
   */
  private $flgaspetto;

  /**
   * @var string
   *
   * @ORM\Column(name="IDTipoArticolo", type="string", length=5, nullable=true)
   */
  private $idtipoarticolo;

  /**
   * @var boolean
   *
   * @ORM\Column(name="FlgOfferta", type="boolean", nullable=true)
   */
  private $flgofferta;

  /**
   * @var string
   *
   * @ORM\Column(name="CodiceOfferta", type="string", length=20, nullable=true)
   */
  private $codiceofferta;

  /**
   * @var integer
   *
   * @ORM\Column(name="flgMultiplo", type="integer", nullable=true)
   */
  private $flgmultiplo = '1';

  /**
   * @var integer
   *
   * @ORM\Column(name="flgDivulgataEliminaz", type="integer", nullable=true)
   */
  private $flgdivulgataeliminaz;

  /**
   * @var string
   *
   * @ORM\Column(name="CodArt", type="string", length=20)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $codart;

  /**
   * @var \AppBundle\Entity\Category
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodFamMerc", referencedColumnName="CodRep")
   * })
   */
  private $codfammerc;

  /**
   * @var \AppBundle\Entity\Partner
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Partner")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodFornitore", referencedColumnName="CodInt")
   * })
   */
  private $codfornitore;

  /**
   * @var \AppBundle\Entity\Departement
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodRepECR", referencedColumnName="CodRep")
   * })
   */
  private $codrepecr;

  /**
   * @var \AppBundle\Entity\Status
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Status")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="flgStatoArticolo", referencedColumnName="CodStato")
   * })
   */
  private $flgstatoarticolo;

  /**
   * @var \AppBundle\Entity\Label
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Label")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodTipoEtic", referencedColumnName="CodTipoEtic")
   * })
   */
  private $codtipoetic;

  /**
   * @var \AppBundle\Entity\Unitmeasure
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Unitmeasure")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="CodUmis", referencedColumnName="CodUmis")
   * })
   */
  private $codumis;

  /**
   * @var \Doctrine\Common\Collections\Collection
   *
   * @ORM\OneToMany(targetEntity="AppBundle\Entity\Pricelist", mappedBy="codart")
   */
  private $listino;

  /**
   * @var \Doctrine\Common\Collections\Collection
   *
   * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ean", mappedBy="codart")
   */
  private $ean;

  /**
   * Constructor
   */
  public function __construct() {
    $this->listino = new \Doctrine\Common\Collections\ArrayCollection();
    $this->ean = new \Doctrine\Common\Collections\ArrayCollection();
  }


  /**
   * Set codartforn
   *
   * @param string $codartforn
   *
   * @return Item
   */
  public function setCodartforn($codartforn) {
    $this->codartforn = $codartforn;

    return $this;
  }

  /**
   * Get codartforn
   *
   * @return string
   */
  public function getCodartforn() {
    return $this->codartforn;
  }

  /**
   * Set codfornitorecedi
   *
   * @param string $codfornitorecedi
   *
   * @return Item
   */
  public function setCodfornitorecedi($codfornitorecedi) {
    $this->codfornitorecedi = $codfornitorecedi;

    return $this;
  }

  /**
   * Get codfornitorecedi
   *
   * @return string
   */
  public function getCodfornitorecedi() {
    return $this->codfornitorecedi;
  }

  /**
   * Set codrepbil
   *
   * @param string $codrepbil
   *
   * @return Item
   */
  public function setCodrepbil($codrepbil) {
    $this->codrepbil = $codrepbil;

    return $this;
  }

  /**
   * Get codrepbil
   *
   * @return string
   */
  public function getCodrepbil() {
    return $this->codrepbil;
  }

  /**
   * Set codsottofam
   *
   * @param string $codsottofam
   *
   * @return Item
   */
  public function setCodsottofam($codsottofam) {
    $this->codsottofam = $codsottofam;

    return $this;
  }

  /**
   * Get codsottofam
   *
   * @return string
   */
  public function getCodsottofam() {
    return $this->codsottofam;
  }

  /**
   * Set codfornitorealt
   *
   * @param string $codfornitorealt
   *
   * @return Item
   */
  public function setCodfornitorealt($codfornitorealt) {
    $this->codfornitorealt = $codfornitorealt;

    return $this;
  }

  /**
   * Get codfornitorealt
   *
   * @return string
   */
  public function getCodfornitorealt() {
    return $this->codfornitorealt;
  }

  /**
   * Set codaliq
   *
   * @param string $codaliq
   *
   * @return Item
   */
  public function setCodaliq($codaliq) {
    $this->codaliq = $codaliq;

    return $this;
  }

  /**
   * Get codaliq
   *
   * @return string
   */
  public function getCodaliq() {
    return $this->codaliq;
  }

  /** Set codtipoean
   *
   * @param string $codtipoean
   *
   * @return Item
   */
  public function setCodtipoean($codtipoean) {
    $this->codtipoean = $codtipoean;
    return $this;
  }

  /**
   * Get codtipoean
   *
   * @return string
   */
  public function getCodtipoean() {
    return $this->codtipoean;
  }

  /**
   * Set codbilancia
   *
   * @param string $codbilancia
   *
   * @return Item
   */
  public function setCodbilancia($codbilancia) {
    $this->codbilancia = $codbilancia;

    return $this;
  }

  /**
   * Get codbilancia
   *
   * @return string
   */
  public function getCodbilancia() {
    return $this->codbilancia;
  }

  /**
   * Set codbanco
   *
   * @param string $codbanco
   *
   * @return Item
   */
  public function setCodbanco($codbanco) {
    $this->codbanco = $codbanco;

    return $this;
  }

  /**
   * Get codbanco
   *
   * @return string
   */
  public function getCodbanco() {
    return $this->codbanco;
  }

  /**
   * Set codagg
   *
   * @param string $codagg
   *
   * @return Item
   */
  public function setCodagg($codagg) {
    $this->codagg = $codagg;

    return $this;
  }

  /**
   * Get codagg
   *
   * @return string
   */
  public function getCodagg() {
    return $this->codagg;
  }

  /**
   * Set descarticolo
   *
   * @param string $descarticolo
   *
   * @return Item
   */
  public function setDescarticolo($descarticolo) {
    $this->descarticolo = $descarticolo;

    return $this;
  }

  /**
   * Get descarticolo
   *
   * @return string
   */
  public function getDescarticolo() {
    return $this->descarticolo;
  }

  /**
   * Set descarticoloalt
   *
   * @param string $descarticoloalt
   *
   * @return Item
   */
  public function setDescarticoloalt($descarticoloalt) {
    $this->descarticoloalt = $descarticoloalt;

    return $this;
  }

  /**
   * Get descarticoloalt
   *
   * @return string
   */
  public function getDescarticoloalt() {
    return $this->descarticoloalt;
  }

  /**
   * Set descarticoloecr
   *
   * @param string $descarticoloecr
   *
   * @return Item
   */
  public function setDescarticoloecr($descarticoloecr) {
    $this->descarticoloecr = $descarticoloecr;

    return $this;
  }

  /**
   * Get descarticoloecr
   *
   * @return string
   */
  public function getDescarticoloecr() {
    return $this->descarticoloecr;
  }

  /**
   * Set descarticolobil
   *
   * @param string $descarticolobil
   *
   * @return Item
   */
  public function setDescarticolobil($descarticolobil) {
    $this->descarticolobil = $descarticolobil;

    return $this;
  }

  /**
   * Get descarticolobil
   *
   * @return string
   */
  public function getDescarticolobil() {
    return $this->descarticolobil;
  }

  /**
   * Set pxc
   *
   * @param integer $pxc
   *
   * @return Item
   */
  public function setPxc($pxc) {
    $this->pxc = $pxc;

    return $this;
  }

  /**
   * Get pxc
   *
   * @return integer
   */
  public function getPxc() {
    return $this->pxc;
  }

  /**
   * Set cxc
   *
   * @param integer $cxc
   *
   * @return Item
   */
  public function setCxc($cxc) {
    $this->cxc = $cxc;

    return $this;
  }

  /**
   * Get cxc
   *
   * @return integer
   */
  public function getCxc() {
    return $this->cxc;
  }

  /**
   * Set cxs
   *
   * @param integer $cxs
   *
   * @return Item
   */
  public function setCxs($cxs) {
    $this->cxs = $cxs;

    return $this;
  }

  /**
   * Get cxs
   *
   * @return integer
   */
  public function getCxs() {
    return $this->cxs;
  }

  /**
   * Set qta
   *
   * @param float $qta
   *
   * @return Item
   */
  public function setQta($qta) {
    $this->qta = $qta;

    return $this;
  }

  /**
   * Get qta
   *
   * @return float
   */
  public function getQta() {
    return $this->qta;
  }

  /**
   * Set pesosgocciolato
   *
   * @param float $pesosgocciolato
   *
   * @return Item
   */
  public function setPesosgocciolato($pesosgocciolato) {
    $this->pesosgocciolato = $pesosgocciolato;

    return $this;
  }

  /**
   * Get pesosgocciolato
   *
   * @return float
   */
  public function getPesosgocciolato() {
    return $this->pesosgocciolato;
  }

  /**
   * Set sfrido
   *
   * @param float $sfrido
   *
   * @return Item
   */
  public function setSfrido($sfrido) {
    $this->sfrido = $sfrido;

    return $this;
  }

  /**
   * Get sfrido
   *
   * @return float
   */
  public function getSfrido() {
    return $this->sfrido;
  }

  /**
   * Set flgspedbil
   *
   * @param string $flgspedbil
   *
   * @return Item
   */
  public function setFlgspedbil($flgspedbil) {
    $this->flgspedbil = $flgspedbil;

    return $this;
  }

  /**
   * Get flgspedbil
   *
   * @return string
   */
  public function getFlgspedbil() {
    return $this->flgspedbil;
  }

  /**
   * Set flgarttracc
   *
   * @param string $flgarttracc
   *
   * @return Item
   */
  public function setFlgarttracc($flgarttracc) {
    $this->flgarttracc = $flgarttracc;

    return $this;
  }

  /**
   * Get flgarttracc
   *
   * @return string
   */
  public function getFlgarttracc() {
    return $this->flgarttracc;
  }

  /**
   * Set flgassortimento
   *
   * @param string $flgassortimento
   *
   * @return Item
   */
  public function setFlgassortimento($flgassortimento) {
    $this->flgassortimento = $flgassortimento;

    return $this;
  }

  /**
   * Get flgassortimento
   *
   * @return string
   */
  public function getFlgassortimento() {
    return $this->flgassortimento;
  }

  /**
   * Set flgvend
   *
   * @param string $flgvend
   *
   * @return Item
   */
  public function setFlgvend($flgvend) {
    $this->flgvend = $flgvend;

    return $this;
  }

  /**
   * Get flgvend
   *
   * @return string
   */
  public function getFlgvend() {
    return $this->flgvend;
  }

  /**
   * Set flgprintetic
   *
   * @param string $flgprintetic
   *
   * @return Item
   */
  public function setFlgprintetic($flgprintetic) {
    $this->flgprintetic = $flgprintetic;

    return $this;
  }

  /**
   * Get flgprintetic
   *
   * @return string
   */
  public function getFlgprintetic() {
    return $this->flgprintetic;
  }

  /**
   * Set flgvariaz
   *
   * @param string $flgvariaz
   *
   * @return Item
   */
  public function setFlgvariaz($flgvariaz) {
    $this->flgvariaz = $flgvariaz;

    return $this;
  }

  /**
   * Get flgvariaz
   *
   * @return string
   */
  public function getFlgvariaz() {
    return $this->flgvariaz;
  }

  /**
   * Set flgprovenienza
   *
   * @param string $flgprovenienza
   *
   * @return Item
   */
  public function setFlgprovenienza($flgprovenienza) {
    $this->flgprovenienza = $flgprovenienza;

    return $this;
  }

  /**
   * Get flgprovenienza
   *
   * @return string
   */
  public function getFlgprovenienza() {
    return $this->flgprovenienza;
  }

  /**
   * Set flgcalibro
   *
   * @param string $flgcalibro
   *
   * @return Item
   */
  public function setFlgcalibro($flgcalibro) {
    $this->flgcalibro = $flgcalibro;

    return $this;
  }

  /**
   * Get flgcalibro
   *
   * @return string
   */
  public function getFlgcalibro() {
    return $this->flgcalibro;
  }

  /**
   * Set flgcategoria
   *
   * @param string $flgcategoria
   *
   * @return Item
   */
  public function setFlgcategoria($flgcategoria) {
    $this->flgcategoria = $flgcategoria;

    return $this;
  }

  /**
   * Get flgcategoria
   *
   * @return string
   */
  public function getFlgcategoria() {
    return $this->flgcategoria;
  }

  /**
   * Set flgdatacreaz
   *
   * @param string $flgdatacreaz
   *
   * @return Item
   */
  public function setFlgdatacreaz($flgdatacreaz) {
    $this->flgdatacreaz = $flgdatacreaz;

    return $this;
  }

  /**
   * Get flgdatacreaz
   *
   * @return string
   */
  public function getFlgdatacreaz() {
    return $this->flgdatacreaz;
  }

  /**
   * Set flgdataeliminaz
   *
   * @param string $flgdataeliminaz
   *
   * @return Item
   */
  public function setFlgdataeliminaz($flgdataeliminaz) {
    $this->flgdataeliminaz = $flgdataeliminaz;

    return $this;
  }

  /**
   * Get flgdataeliminaz
   *
   * @return string
   */
  public function getFlgdataeliminaz() {
    return $this->flgdataeliminaz;
  }

  /**
   * Set flgartto
   *
   * @param string $flgartto
   *
   * @return Item
   */
  public function setFlgartto($flgartto) {
    $this->flgartto = $flgartto;

    return $this;
  }

  /**
   * Get flgartto
   *
   * @return string
   */
  public function getFlgartto() {
    return $this->flgartto;
  }

  /**
   * Set flgaspetto
   *
   * @param string $flgaspetto
   *
   * @return Item
   */
  public function setFlgaspetto($flgaspetto) {
    $this->flgaspetto = $flgaspetto;

    return $this;
  }

  /**
   * Get flgaspetto
   *
   * @return string
   */
  public function getFlgaspetto() {
    return $this->flgaspetto;
  }

  /**
   * Set idtipoarticolo
   *
   * @param string $idtipoarticolo
   *
   * @return Item
   */
  public function setIdtipoarticolo($idtipoarticolo) {
    $this->idtipoarticolo = $idtipoarticolo;

    return $this;
  }

  /**
   * Get idtipoarticolo
   *
   * @return string
   */
  public function getIdtipoarticolo() {
    return $this->idtipoarticolo;
  }

  /**
   * Set flgofferta
   *
   * @param boolean $flgofferta
   *
   * @return Item
   */
  public function setFlgofferta($flgofferta) {
    $this->flgofferta = $flgofferta;

    return $this;
  }

  /**
   * Get flgofferta
   *
   * @return boolean
   */
  public function getFlgofferta() {
    return $this->flgofferta;
  }

  /**
   * Set codiceofferta
   *
   * @param string $codiceofferta
   *
   * @return Item
   */
  public function setCodiceofferta($codiceofferta) {
    $this->codiceofferta = $codiceofferta;

    return $this;
  }

  /**
   * Get codiceofferta
   *
   * @return string
   */
  public function getCodiceofferta() {
    return $this->codiceofferta;
  }

  /**
   * Set flgmultiplo
   *
   * @param integer $flgmultiplo
   *
   * @return Item
   */
  public function setFlgmultiplo($flgmultiplo) {
    $this->flgmultiplo = $flgmultiplo;

    return $this;
  }

  /**
   * Get flgmultiplo
   *
   * @return integer
   */
  public function getFlgmultiplo() {
    return $this->flgmultiplo;
  }

  /**
   * Set flgdivulgataeliminaz
   *
   * @param integer $flgdivulgataeliminaz
   *
   * @return Item
   */
  public function setFlgdivulgataeliminaz($flgdivulgataeliminaz) {
    $this->flgdivulgataeliminaz = $flgdivulgataeliminaz;

    return $this;
  }

  /**
   * Get flgdivulgataeliminaz
   *
   * @return integer
   */
  public function getFlgdivulgataeliminaz() {
    return $this->flgdivulgataeliminaz;
  }

  /**
   * Get codart
   *
   * @return string
   */
  public function getCodart() {
    return $this->codart;
  }

  /**
   * Set codfammerc
   *
   * @param \AppBundle\Entity\Category $codfammerc
   *
   * @return Item
   */
  public function setCodfammerc(\AppBundle\Entity\Category $codfammerc = NULL) {
    $this->codfammerc = $codfammerc;

    return $this;
  }

  /**
   * Get codfammerc
   *
   * @return \AppBundle\Entity\Category
   */
  public function getCodfammerc() {
    return $this->codfammerc;
  }

  /**
   * Set codfornitore
   *
   * @param \AppBundle\Entity\Partner $codfornitore
   *
   * @return Item
   */
  public function setCodfornitore(\AppBundle\Entity\Partner $codfornitore = NULL) {
    $this->codfornitore = $codfornitore;

    return $this;
  }

  /**
   * Get codfornitore
   *
   * @return \AppBundle\Entity\Partner
   */
  public function getCodfornitore() {
    return $this->codfornitore;
  }

  /**
   * Set codrepecr
   *
   * @param \AppBundle\Entity\Departement $codrepecr
   *
   * @return Item
   */
  public function setCodrepecr(\AppBundle\Entity\Departement $codrepecr = NULL) {
    $this->codrepecr = $codrepecr;

    return $this;
  }

  /**
   * Get codrepecr
   *
   * @return \AppBundle\Entity\Departement
   */
  public function getCodrepecr() {
    return $this->codrepecr;
  }

  /**
   * Set flgstatoarticolo
   *
   * @param \AppBundle\Entity\Status $flgstatoarticolo
   *
   * @return Item
   */
  public function setFlgstatoarticolo(\AppBundle\Entity\Status $flgstatoarticolo = NULL) {
    $this->flgstatoarticolo = $flgstatoarticolo;

    return $this;
  }

  /**
   * Get flgstatoarticolo
   *
   * @return \AppBundle\Entity\Status
   */
  public function getFlgstatoarticolo() {
    return $this->flgstatoarticolo;
  }

  /**
   * Set codtipoetic
   *
   * @param \AppBundle\Entity\Label $codtipoetic
   *
   * @return Item
   */
  public function setCodtipoetic(\AppBundle\Entity\Label $codtipoetic = NULL) {
    $this->codtipoetic = $codtipoetic;

    return $this;
  }

  /**
   * Get codtipoetic
   *
   * @return \AppBundle\Entity\Label
   */
  public function getCodtipoetic() {
    return $this->codtipoetic;
  }

  /**
   * Set codumis
   *
   * @param \AppBundle\Entity\Unitmeasure $codumis
   *
   * @return Item
   */
  public function setCodumis(\AppBundle\Entity\Unitmeasure $codumis = NULL) {
    $this->codumis = $codumis;

    return $this;
  }

  /**
   * Get codumis
   *
   * @return \AppBundle\Entity\Unitmeasure
   */
  public function getCodumis() {
    return $this->codumis;
  }

  /**
   * Add listino
   *
   * @param \AppBundle\Entity\Pricelist $listino
   *
   * @return Item
   */
  public function addListino(\AppBundle\Entity\Pricelist $listino) {
    $this->listino[] = $listino;

    return $this;
  }

  /**
   * Remove $listino
   *
   * @param \AppBundle\Entity\Pricelist $listino
   */
  public function removeListino(\AppBundle\Entity\Pricelist $listino) {
    $this->listino->removeElement($listino);
  }

  /**
   * Get istino
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getListino() {
    return $this->listino;
  }

  /**
   * Add ean
   *
   * @param \AppBundle\Entity\Ean $ean
   *
   * @return Item
   */
  public function addEan(\AppBundle\Entity\Ean $ean) {
    $this->ean[] = $ean;

    return $this;
  }

  /**
   * Remove $ean
   *
   * @param \AppBundle\Entity\Ean $ean
   */
  public function removeEan(\AppBundle\Entity\Ean $ean) {
    $this->ean->removeElement($ean);
  }

  /**
   * Get istino
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getEan() {
    return $this->ean;
  }
}
