<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="articoli", indexes={@ORM\Index(name="TBLALIQUOTEIVATBLARTICOLI", columns={"art_codAliquota"}), @ORM\Index(name="TBLARTICOLICODARTICOLO", columns={"art_cda"}), @ORM\Index(name="TBLFAMIGLIETBLARTICOLI", columns={"art_codFam"}), @ORM\Index(name="TBLPLUGINTBLARTICOLI", columns={"art_idPlugin"}), @ORM\Index(name="TBLREPARTITBLARTICOLI", columns={"art_codRep"}), @ORM\Index(name="TBLSETTORITBLARTICOLI", columns={"art_codSettore"}), @ORM\Index(name="TBLUMTBLARTICOLI", columns={"art_codUm"}), @ORM\Index(name="FK_articoli_cluster_idx", columns={"art_cluster"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="art_cda", type="string", length=30, nullable=true)
     */
    private $artCda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_flgstato", type="boolean", nullable=true)
     */
    private $artFlgstato;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_tipoArticolo", type="integer", nullable=false)
     */
    private $artTipoarticolo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="art_descEstesa", type="string", length=50, nullable=true)
     */
    private $artDescestesa;

    /**
     * @var string
     *
     * @ORM\Column(name="art_descScontrino", type="string", length=42, nullable=true)
     */
    private $artDescscontrino;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_przObbligato", type="boolean", nullable=false)
     */
    private $artPrzobbligato;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przVen", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzven;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przAlt01", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzalt01;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przAlt02", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzalt02;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przAlt03", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzalt03;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przAlt04", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzalt04;

    /**
     * @var string
     *
     * @ORM\Column(name="art_przAlt05", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artPrzalt05;

    /**
     * @var string
     *
     * @ORM\Column(name="art_valMax", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artValmax;

    /**
     * @var string
     *
     * @ORM\Column(name="art_valMin", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $artValmin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_qtaObbligata", type="boolean", nullable=true)
     */
    private $artQtaobbligata;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_ctrlReso", type="boolean", nullable=false)
     */
    private $artCtrlreso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_sctSubtotale", type="boolean", nullable=false)
     */
    private $artSctsubtotale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_sctProdotto", type="boolean", nullable=false)
     */
    private $artSctprodotto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_editingPrzArticolo", type="boolean", nullable=false)
     */
    private $artEditingprzarticolo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_finalizzaScontrino", type="boolean", nullable=false)
     */
    private $artFinalizzascontrino;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_tipoMoltiplicatori", type="integer", nullable=true)
     */
    private $artTipomoltiplicatori;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_tipoEan", type="integer", nullable=true)
     */
    private $artTipoean;

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_eseguePlugin", type="boolean", nullable=false)
     */
    private $artEsegueplugin;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_numDecimali", type="integer", nullable=true)
     */
    private $artNumdecimali;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_tipoVendita", type="integer", nullable=true)
     */
    private $artTipovendita;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_numMoltiplicatori", type="integer", nullable=true)
     */
    private $artNummoltiplicatori;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_resaBollini", type="integer", nullable=true)
     */
    private $artResabollini = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="art_contenuto", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $artContenuto = '0.000';

    /**
     * @var boolean
     *
     * @ORM\Column(name="art_gestioneLotto", type="boolean", nullable=false)
     */
    private $artGestionelotto = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_dataCreazione", type="datetime", nullable=true)
     */
    private $artDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $artDataultimamodifica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_dataVariazione", type="datetime", nullable=true)
     */
    private $artDatavariazione;

    /**
     * @var string
     *
     * @ORM\Column(name="art_barcode", type="string", length=30)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artBarcode;

    /**
     * @var \AppBundle\Entity\Vat
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Vat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_codAliquota", referencedColumnName="aliq_codaliqiva")
     * })
     */
    private $artCodaliquota;

    /**
     * @var \AppBundle\Entity\Cluster
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cluster")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_cluster", referencedColumnName="clu_idCluster")
     * })
     */
    private $artCluster;

    /**
     * @var \AppBundle\Entity\Family
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Family")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_codFam", referencedColumnName="fam_codfam")
     * })
     */
    private $artCodfam;

    /**
     * @var \AppBundle\Entity\Posplugin
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Posplugin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_idPlugin", referencedColumnName="ppl_codPlugin")
     * })
     */
    private $artplugin;

    /**
     * @var \AppBundle\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_codRep", referencedColumnName="rep_codrep")
     * })
     */
    private $artCodrep;

    /**
     * @var \AppBundle\Entity\Section
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Section")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_codSettore", referencedColumnName="set_codSettore")
     * })
     */
    private $artCodsettore;

    /**
     * @var \AppBundle\Entity\Measureunit
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Measureunit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_codUm", referencedColumnName="um_codUm")
     * })
     */
    private $artCodum;

  /**
   * @return mixed
   */
  public function getArtCda() {
    return $this->artCda;
  }

  /**
   * @param mixed $artCda
   */
  public function setArtCda($artCda) {
    $this->artCda = $artCda;
  }

  /**
   * @return bool
   */
  public function isArtFlgstato(): bool {
    return $this->artFlgstato;
  }

  /**
   * @param bool $artFlgstato
   */
  public function setArtFlgstato(bool $artFlgstato) {
    $this->artFlgstato = $artFlgstato;
  }

  /**
   * @return int
   */
  public function getArtTipoarticolo(): int {
    return $this->artTipoarticolo;
  }

  /**
   * @param int $artTipoarticolo
   */
  public function setArtTipoarticolo(int $artTipoarticolo) {
    $this->artTipoarticolo = $artTipoarticolo;
  }

  /**
   * @return string
   */
  public function getArtDescestesa(): string {
    return $this->artDescestesa;
  }

  /**
   * @param string $artDescestesa
   */
  public function setArtDescestesa(string $artDescestesa) {
    $this->artDescestesa = $artDescestesa;
  }

  /**
   * @return string
   */
  public function getArtDescscontrino(): string {
    return $this->artDescscontrino;
  }

  /**
   * @param string $artDescscontrino
   */
  public function setArtDescscontrino(string $artDescscontrino) {
    $this->artDescscontrino = $artDescscontrino;
  }

  /**
   * @return bool
   */
  public function isArtPrzobbligato(): bool {
    return $this->artPrzobbligato;
  }

  /**
   * @param bool $artPrzobbligato
   */
  public function setArtPrzobbligato(bool $artPrzobbligato) {
    $this->artPrzobbligato = $artPrzobbligato;
  }

  /**
   * @return string
   */
  public function getArtPrzven(): string {
    return $this->artPrzven;
  }

  /**
   * @param string $artPrzven
   */
  public function setArtPrzven(string $artPrzven) {
    $this->artPrzven = $artPrzven;
  }

  /**
   * @return string
   */
  public function getArtPrzalt01(): string {
    return $this->artPrzalt01;
  }

  /**
   * @param string $artPrzalt01
   */
  public function setArtPrzalt01(string $artPrzalt01) {
    $this->artPrzalt01 = $artPrzalt01;
  }

  /**
   * @return string
   */
  public function getArtPrzalt02(): string {
    return $this->artPrzalt02;
  }

  /**
   * @param string $artPrzalt02
   */
  public function setArtPrzalt02(string $artPrzalt02) {
    $this->artPrzalt02 = $artPrzalt02;
  }

  /**
   * @return string
   */
  public function getArtPrzalt03(): string {
    return $this->artPrzalt03;
  }

  /**
   * @param string $artPrzalt03
   */
  public function setArtPrzalt03(string $artPrzalt03) {
    $this->artPrzalt03 = $artPrzalt03;
  }

  /**
   * @return string
   */
  public function getArtPrzalt04(): string {
    return $this->artPrzalt04;
  }

  /**
   * @param string $artPrzalt04
   */
  public function setArtPrzalt04(string $artPrzalt04) {
    $this->artPrzalt04 = $artPrzalt04;
  }

  /**
   * @return string
   */
  public function getArtPrzalt05(): string {
    return $this->artPrzalt05;
  }

  /**
   * @param string $artPrzalt05
   */
  public function setArtPrzalt05(string $artPrzalt05) {
    $this->artPrzalt05 = $artPrzalt05;
  }

  /**
   * @return string
   */
  public function getArtValmax(): string {
    return $this->artValmax;
  }

  /**
   * @param string $artValmax
   */
  public function setArtValmax(string $artValmax) {
    $this->artValmax = $artValmax;
  }

  /**
   * @return string
   */
  public function getArtValmin(): string {
    return $this->artValmin;
  }

  /**
   * @param string $artValmin
   */
  public function setArtValmin(string $artValmin) {
    $this->artValmin = $artValmin;
  }

  /**
   * @return bool
   */
  public function isArtQtaobbligata(): bool {
    return $this->artQtaobbligata;
  }

  /**
   * @param bool $artQtaobbligata
   */
  public function setArtQtaobbligata(bool $artQtaobbligata) {
    $this->artQtaobbligata = $artQtaobbligata;
  }

  /**
   * @return bool
   */
  public function isArtCtrlreso(): bool {
    return $this->artCtrlreso;
  }

  /**
   * @param bool $artCtrlreso
   */
  public function setArtCtrlreso(bool $artCtrlreso) {
    $this->artCtrlreso = $artCtrlreso;
  }

  /**
   * @return bool
   */
  public function isArtSctsubtotale(): bool {
    return $this->artSctsubtotale;
  }

  /**
   * @param bool $artSctsubtotale
   */
  public function setArtSctsubtotale(bool $artSctsubtotale) {
    $this->artSctsubtotale = $artSctsubtotale;
  }

  /**
   * @return bool
   */
  public function isArtSctprodotto(): bool {
    return $this->artSctprodotto;
  }

  /**
   * @param bool $artSctprodotto
   */
  public function setArtSctprodotto(bool $artSctprodotto) {
    $this->artSctprodotto = $artSctprodotto;
  }

  /**
   * @return bool
   */
  public function isArtEditingprzarticolo(): bool {
    return $this->artEditingprzarticolo;
  }

  /**
   * @param bool $artEditingprzarticolo
   */
  public function setArtEditingprzarticolo(bool $artEditingprzarticolo) {
    $this->artEditingprzarticolo = $artEditingprzarticolo;
  }

  /**
   * @return bool
   */
  public function isArtFinalizzascontrino(): bool {
    return $this->artFinalizzascontrino;
  }

  /**
   * @param bool $artFinalizzascontrino
   */
  public function setArtFinalizzascontrino(bool $artFinalizzascontrino) {
    $this->artFinalizzascontrino = $artFinalizzascontrino;
  }

  /**
   * @return int
   */
  public function getArtTipomoltiplicatori(): int {
    return $this->artTipomoltiplicatori;
  }

  /**
   * @param int $artTipomoltiplicatori
   */
  public function setArtTipomoltiplicatori(int $artTipomoltiplicatori) {
    $this->artTipomoltiplicatori = $artTipomoltiplicatori;
  }

  /**
   * @return int
   */
  public function getArtTipoean(): int {
    return $this->artTipoean;
  }

  /**
   * @param int $artTipoean
   */
  public function setArtTipoean(int $artTipoean) {
    $this->artTipoean = $artTipoean;
  }

  /**
   * @return bool
   */
  public function isArtEsegueplugin(): bool {
    return $this->artEsegueplugin;
  }

  /**
   * @param bool $artEsegueplugin
   */
  public function setArtEsegueplugin(bool $artEsegueplugin) {
    $this->artEsegueplugin = $artEsegueplugin;
  }

  /**
   * @return int
   */
  public function getArtNumdecimali(): int {
    return $this->artNumdecimali;
  }

  /**
   * @param int $artNumdecimali
   */
  public function setArtNumdecimali(int $artNumdecimali) {
    $this->artNumdecimali = $artNumdecimali;
  }

  /**
   * @return int
   */
  public function getArtTipovendita(): int {
    return $this->artTipovendita;
  }

  /**
   * @param int $artTipovendita
   */
  public function setArtTipovendita(int $artTipovendita) {
    $this->artTipovendita = $artTipovendita;
  }

  /**
   * @return int
   */
  public function getArtNummoltiplicatori(): int {
    return $this->artNummoltiplicatori;
  }

  /**
   * @param int $artNummoltiplicatori
   */
  public function setArtNummoltiplicatori(int $artNummoltiplicatori) {
    $this->artNummoltiplicatori = $artNummoltiplicatori;
  }

  /**
   * @return int
   */
  public function getArtResabollini(): int {
    return $this->artResabollini;
  }

  /**
   * @param int $artResabollini
   */
  public function setArtResabollini(int $artResabollini) {
    $this->artResabollini = $artResabollini;
  }

  /**
   * @return string
   */
  public function getArtContenuto(): string {
    return $this->artContenuto;
  }

  /**
   * @param string $artContenuto
   */
  public function setArtContenuto(string $artContenuto) {
    $this->artContenuto = $artContenuto;
  }

  /**
   * @return bool
   */
  public function isArtGestionelotto(): bool {
    return $this->artGestionelotto;
  }

  /**
   * @param bool $artGestionelotto
   */
  public function setArtGestionelotto(bool $artGestionelotto) {
    $this->artGestionelotto = $artGestionelotto;
  }

  /**
   * @return \DateTime
   */
  public function getArtDatacreazione(): \DateTime {
    return $this->artDatacreazione;
  }

  /**
   * @param \DateTime $artDatacreazione
   */
  public function setArtDatacreazione(\DateTime $artDatacreazione) {
    $this->artDatacreazione = $artDatacreazione;
  }

  /**
   * @return \DateTime
   */
  public function getArtDataultimamodifica(): \DateTime {
    return $this->artDataultimamodifica;
  }

  /**
   * @param \DateTime $artDataultimamodifica
   */
  public function setArtDataultimamodifica(\DateTime $artDataultimamodifica) {
    $this->artDataultimamodifica = $artDataultimamodifica;
  }

  /**
   * @return \DateTime
   */
  public function getArtDatavariazione(): \DateTime {
    return $this->artDatavariazione;
  }

  /**
   * @param \DateTime $artDatavariazione
   */
  public function setArtDatavariazione(\DateTime $artDatavariazione) {
    $this->artDatavariazione = $artDatavariazione;
  }

  /**
   * @return string
   */
  public function getArtBarcode(): string {
    return $this->artBarcode;
  }

  /**
   * @param string $artBarcode
   */
  public function setArtBarcode(string $artBarcode) {
    $this->artBarcode = $artBarcode;
  }

  /**
   * @return \AppBundle\Entity\Vat
   */
  public function getArtCodaliquota(): \AppBundle\Entity\Vat {
    return $this->artCodaliquota;
  }

  /**
   * @param \AppBundle\Entity\Vat $artCodaliquota
   */
  public function setArtCodaliquota(\AppBundle\Entity\Vat $artCodaliquota) {
    $this->artCodaliquota = $artCodaliquota;
  }

  /**
   * @return \AppBundle\Entity\Cluster
   */
  public function getArtCluster(): \AppBundle\Entity\Cluster {
    return $this->artCluster;
  }

  /**
   * @param \AppBundle\Entity\Cluster $artCluster
   */
  public function setArtCluster(\AppBundle\Entity\Cluster $artCluster) {
    $this->artCluster = $artCluster;
  }

  /**
   * @return \AppBundle\Entity\Family
   */
  public function getArtCodfam(): \AppBundle\Entity\Family {
    return $this->artCodfam;
  }

  /**
   * @param \AppBundle\Entity\Family $artCodfam
   */
  public function setArtCodfam(\AppBundle\Entity\Family $artCodfam) {
    $this->artCodfam = $artCodfam;
  }

  /**
   * @return \AppBundle\Entity\Posplugin
   */
  public function getArtplugin(): \AppBundle\Entity\Posplugin {
    return $this->artplugin;
  }

  /**
   * @param \AppBundle\Entity\Posplugin $artplugin
   */
  public function setArtplugin(\AppBundle\Entity\Posplugin $artplugin) {
    $this->artplugin = $artplugin;
  }

  /**
   * @return \AppBundle\Entity\Departement
   */
  public function getArtCodrep(): \AppBundle\Entity\Departement {
    return $this->artCodrep;
  }

  /**
   * @param \AppBundle\Entity\Departement $artCodrep
   */
  public function setArtCodrep(\AppBundle\Entity\Departement $artCodrep) {
    $this->artCodrep = $artCodrep;
  }

  /**
   * @return \AppBundle\Entity\Section
   */
  public function getArtCodsettore(): \AppBundle\Entity\Section {
    return $this->artCodsettore;
  }

  /**
   * @param \AppBundle\Entity\Section $artCodsettore
   */
  public function setArtCodsettore(\AppBundle\Entity\Section $artCodsettore) {
    $this->artCodsettore = $artCodsettore;
  }

  /**
   * @return \AppBundle\Entity\Measureunit
   */
  public function getArtCodum(): \AppBundle\Entity\Measureunit {
    return $this->artCodum;
  }

  /**
   * @param \AppBundle\Entity\Measureunit $artCodum
   */
  public function setArtCodum(\AppBundle\Entity\Measureunit $artCodum) {
    $this->artCodum = $artCodum;
  }



}

