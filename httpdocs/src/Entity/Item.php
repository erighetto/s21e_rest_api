<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="tblarticolo", indexes={@ORM\Index(name="TBLArticolo_TBLArticolo_TBLArticoloCodArt", columns={"CodArt"}), @ORM\Index(name="FK_TBLArticolo_TBLStatiArticoli", columns={"flgStatoArticolo"}), @ORM\Index(name="FK_TBLArticolo_TBLFamMerc", columns={"CodFamMerc"}), @ORM\Index(name="FK_TBLArticolo_TBLTipoEtichette", columns={"CodTipoEtic"}), @ORM\Index(name="FK_TBLArticolo_TBLRepartiECR", columns={"CodRepECR"}), @ORM\Index(name="FK_TBLArticolo_TBLUnitaMisura", columns={"CodUmis"}), @ORM\Index(name="FK_TBLArticolo_TBLInterlocutori", columns={"CodFornitore"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ItemRepository")
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodArt", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codart;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodArtForn", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $codartforn = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodFornitoreCEDI", type="string", length=20, nullable=true, options={"default"=NULL})
     */
    private $codfornitorecedi = NULL;
    
    /**
     * @var \App\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodRepECR", referencedColumnName="CodRep")
     * })
     */
    private $codrepecr = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodRepBIL", type="string", length=10, nullable=true, options={"default"=NULL})
     */
    private $codrepbil = NULL;
    
    /**
     * @var \App\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodFamMerc", referencedColumnName="CodRep")
     * })
     */
    private $codfammerc;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodSottoFam", type="string", length=6, nullable=true, options={"default"=NULL})
     */
    private $codsottofam = NULL;
    
    /**
     * @var \App\Entity\Partner
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Partner")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodFornitore", referencedColumnName="CodInt")
     * })
     */
    private $codfornitore = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodFornitoreAlt", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $codfornitorealt = NULL;
    
    /**
     * @var \App\Entity\Vat
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Vat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodAliq", referencedColumnName="IDAliquota")
     * })
     */
    private $codaliq;
    
    /**
     * @var \App\Entity\MeasureUnit
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\MeasureUnit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodUmis", referencedColumnName="CodUmis")
     * })
     */
    private $codumis;
    
    /**
     * @var \App\Entity\Label
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Label")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodTipoEtic", referencedColumnName="CodTipoEtic")
     * })
     */
    private $codtipoetic;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodTipoEAN", type="string", length=6, nullable=true, options={"default"=NULL})
     */
    private $codtipoean = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodBilancia", type="string", length=6, nullable=true, options={"default"=NULL})
     */
    private $codbilancia = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodBanco", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $codbanco = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodAgg", type="string", length=10, nullable=true, options={"default"=NULL})
     */
    private $codagg = NULL;
    
    /**
     * @var string
     *
     * @ORM\Column(name="DescArticolo", type="string", length=100, nullable=false)
     */
    private $descarticolo;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DescArticoloAlt", type="string", length=100, nullable=true, options={"default"=NULL})
     */
    private $descarticoloalt = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DescArticoloEcr", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $descarticoloecr = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DescArticoloBil", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $descarticolobil = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="PxC", type="integer", nullable=true, options={"default"=NULL})
     */
    private $pxc = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="CxC", type="integer", nullable=true)
     */
    private $cxc = '0';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="CxS", type="integer", nullable=true)
     */
    private $cxs = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="Qta", type="float", precision=10, scale=0, nullable=true)
     */
    private $qta = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="PesoSgocciolato", type="float", precision=10, scale=0, nullable=true)
     */
    private $pesosgocciolato = '0';
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="Sfrido", type="float", precision=10, scale=0, nullable=true)
     */
    private $sfrido = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgSpedBil", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $flgspedbil = 'N';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgArtTracc", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgarttracc = NULL;
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgAssortimento", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgassortimento = 'S';
    
    /**
     * @var \App\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flgStatoArticolo", referencedColumnName="CodStato")
     * })
     */
    private $flgstatoarticolo = '2';
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgVend", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgvend = 'S';
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgPrintEtic", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgprintetic = 'S';
    
    /**
     * @var string
     *
     * @ORM\Column(name="flgVariaz", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $flgvariaz = 'S';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgProvenienza", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgprovenienza = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgCalibro", type="string", length=50, nullable=true, options={"default"="0"})
     */
    private $flgcalibro = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgCategoria", type="string", length=50, nullable=true, options={"default"="0"})
     */
    private $flgcategoria = '0';
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataCreaz", type="string", length=20, nullable=true, options={"default"=NULL})
     */
    private $flgdatacreaz = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgDataEliminaz", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgdataeliminaz = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgArtTO", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgartto = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="flgAspetto", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $flgaspetto = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="IDTipoArticolo", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $idtipoarticolo = NULL;
    
    /**
     * @var bool|null
     *
     * @ORM\Column(name="FlgOfferta", type="boolean", nullable=true, options={"default"=NULL})
     */
    private $flgofferta = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceOfferta", type="string", length=20, nullable=true, options={"default"=NULL})
     */
    private $codiceofferta = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="flgMultiplo", type="integer", nullable=true, options={"default"="1"})
     */
    private $flgmultiplo = '1';
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="flgDivulgataEliminaz", type="integer", nullable=true, options={"default"=NULL})
     */
    private $flgdivulgataeliminaz = NULL;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\PriceList", mappedBy="codart")
     */
    private $listino;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="App\Entity\Ean", mappedBy="codart")
     */
    private $ean;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listino = new ArrayCollection();
        $this->ean = new ArrayCollection();
    }

    public function getCodart(): ?string
    {
        return $this->codart;
    }

    public function getCodartforn(): ?string
    {
        return $this->codartforn;
    }

    public function setCodartforn(?string $codartforn): self
    {
        $this->codartforn = $codartforn;

        return $this;
    }

    public function getCodfornitorecedi(): ?string
    {
        return $this->codfornitorecedi;
    }

    public function setCodfornitorecedi(?string $codfornitorecedi): self
    {
        $this->codfornitorecedi = $codfornitorecedi;

        return $this;
    }

    public function getCodrepbil(): ?string
    {
        return $this->codrepbil;
    }

    public function setCodrepbil(?string $codrepbil): self
    {
        $this->codrepbil = $codrepbil;

        return $this;
    }

    public function getCodsottofam(): ?string
    {
        return $this->codsottofam;
    }

    public function setCodsottofam(?string $codsottofam): self
    {
        $this->codsottofam = $codsottofam;

        return $this;
    }

    public function getCodfornitorealt(): ?string
    {
        return $this->codfornitorealt;
    }

    public function setCodfornitorealt(?string $codfornitorealt): self
    {
        $this->codfornitorealt = $codfornitorealt;

        return $this;
    }

    public function getCodaliq(): ?Vat
    {
        return $this->codaliq;
    }

    public function setCodaliq(Vat $codaliq): self
    {
        $this->codaliq = $codaliq;

        return $this;
    }

    public function getCodtipoean(): ?string
    {
        return $this->codtipoean;
    }

    public function setCodtipoean(?string $codtipoean): self
    {
        $this->codtipoean = $codtipoean;

        return $this;
    }

    public function getCodbilancia(): ?string
    {
        return $this->codbilancia;
    }

    public function setCodbilancia(?string $codbilancia): self
    {
        $this->codbilancia = $codbilancia;

        return $this;
    }

    public function getCodbanco(): ?string
    {
        return $this->codbanco;
    }

    public function setCodbanco(?string $codbanco): self
    {
        $this->codbanco = $codbanco;

        return $this;
    }

    public function getCodagg(): ?string
    {
        return $this->codagg;
    }

    public function setCodagg(?string $codagg): self
    {
        $this->codagg = $codagg;

        return $this;
    }

    public function getDescarticolo(): ?string
    {
        return $this->descarticolo;
    }

    public function setDescarticolo(string $descarticolo): self
    {
        $this->descarticolo = $descarticolo;

        return $this;
    }

    public function getDescarticoloalt(): ?string
    {
        return $this->descarticoloalt;
    }

    public function setDescarticoloalt(?string $descarticoloalt): self
    {
        $this->descarticoloalt = $descarticoloalt;

        return $this;
    }

    public function getDescarticoloecr(): ?string
    {
        return $this->descarticoloecr;
    }

    public function setDescarticoloecr(?string $descarticoloecr): self
    {
        $this->descarticoloecr = $descarticoloecr;

        return $this;
    }

    public function getDescarticolobil(): ?string
    {
        return $this->descarticolobil;
    }

    public function setDescarticolobil(?string $descarticolobil): self
    {
        $this->descarticolobil = $descarticolobil;

        return $this;
    }

    public function getPxc(): ?int
    {
        return $this->pxc;
    }

    public function setPxc(?int $pxc): self
    {
        $this->pxc = $pxc;

        return $this;
    }

    public function getCxc(): ?int
    {
        return $this->cxc;
    }

    public function setCxc(?int $cxc): self
    {
        $this->cxc = $cxc;

        return $this;
    }

    public function getCxs(): ?int
    {
        return $this->cxs;
    }

    public function setCxs(?int $cxs): self
    {
        $this->cxs = $cxs;

        return $this;
    }

    public function getQta(): ?float
    {
        return $this->qta;
    }

    public function setQta(?float $qta): self
    {
        $this->qta = $qta;

        return $this;
    }

    public function getPesosgocciolato(): ?float
    {
        return $this->pesosgocciolato;
    }

    public function setPesosgocciolato(?float $pesosgocciolato): self
    {
        $this->pesosgocciolato = $pesosgocciolato;

        return $this;
    }

    public function getSfrido(): ?float
    {
        return $this->sfrido;
    }

    public function setSfrido(?float $sfrido): self
    {
        $this->sfrido = $sfrido;

        return $this;
    }

    public function getFlgspedbil(): ?string
    {
        return $this->flgspedbil;
    }

    public function setFlgspedbil(?string $flgspedbil): self
    {
        $this->flgspedbil = $flgspedbil;

        return $this;
    }

    public function getFlgarttracc(): ?string
    {
        return $this->flgarttracc;
    }

    public function setFlgarttracc(?string $flgarttracc): self
    {
        $this->flgarttracc = $flgarttracc;

        return $this;
    }

    public function getFlgassortimento(): ?string
    {
        return $this->flgassortimento;
    }

    public function setFlgassortimento(string $flgassortimento): self
    {
        $this->flgassortimento = $flgassortimento;

        return $this;
    }

    public function getFlgvend(): ?string
    {
        return $this->flgvend;
    }

    public function setFlgvend(string $flgvend): self
    {
        $this->flgvend = $flgvend;

        return $this;
    }

    public function getFlgprintetic(): ?string
    {
        return $this->flgprintetic;
    }

    public function setFlgprintetic(string $flgprintetic): self
    {
        $this->flgprintetic = $flgprintetic;

        return $this;
    }

    public function getFlgvariaz(): ?string
    {
        return $this->flgvariaz;
    }

    public function setFlgvariaz(string $flgvariaz): self
    {
        $this->flgvariaz = $flgvariaz;

        return $this;
    }

    public function getFlgprovenienza(): ?string
    {
        return $this->flgprovenienza;
    }

    public function setFlgprovenienza(?string $flgprovenienza): self
    {
        $this->flgprovenienza = $flgprovenienza;

        return $this;
    }

    public function getFlgcalibro(): ?string
    {
        return $this->flgcalibro;
    }

    public function setFlgcalibro(?string $flgcalibro): self
    {
        $this->flgcalibro = $flgcalibro;

        return $this;
    }

    public function getFlgcategoria(): ?string
    {
        return $this->flgcategoria;
    }

    public function setFlgcategoria(?string $flgcategoria): self
    {
        $this->flgcategoria = $flgcategoria;

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

    public function getFlgartto(): ?string
    {
        return $this->flgartto;
    }

    public function setFlgartto(?string $flgartto): self
    {
        $this->flgartto = $flgartto;

        return $this;
    }

    public function getFlgaspetto(): ?string
    {
        return $this->flgaspetto;
    }

    public function setFlgaspetto(?string $flgaspetto): self
    {
        $this->flgaspetto = $flgaspetto;

        return $this;
    }

    public function getIdtipoarticolo(): ?string
    {
        return $this->idtipoarticolo;
    }

    public function setIdtipoarticolo(?string $idtipoarticolo): self
    {
        $this->idtipoarticolo = $idtipoarticolo;

        return $this;
    }

    public function getFlgofferta(): ?bool
    {
        return $this->flgofferta;
    }

    public function setFlgofferta(?bool $flgofferta): self
    {
        $this->flgofferta = $flgofferta;

        return $this;
    }

    public function getCodiceofferta(): ?string
    {
        return $this->codiceofferta;
    }

    public function setCodiceofferta(?string $codiceofferta): self
    {
        $this->codiceofferta = $codiceofferta;

        return $this;
    }

    public function getFlgmultiplo(): ?int
    {
        return $this->flgmultiplo;
    }

    public function setFlgmultiplo(?int $flgmultiplo): self
    {
        $this->flgmultiplo = $flgmultiplo;

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

    public function getCodrepecr(): ?Departement
    {
        return $this->codrepecr;
    }

    public function setCodrepecr(?Departement $codrepecr): self
    {
        $this->codrepecr = $codrepecr;

        return $this;
    }

    public function getCodfammerc(): ?Category
    {
        return $this->codfammerc;
    }

    public function setCodfammerc(?Category $codfammerc): self
    {
        $this->codfammerc = $codfammerc;

        return $this;
    }

    public function getCodfornitore(): ?Partner
    {
        return $this->codfornitore;
    }

    public function setCodfornitore(?Partner $codfornitore): self
    {
        $this->codfornitore = $codfornitore;

        return $this;
    }

    public function getCodumis(): ?MeasureUnit
    {
        return $this->codumis;
    }

    public function setCodumis(?MeasureUnit $codumis): self
    {
        $this->codumis = $codumis;

        return $this;
    }

    public function getCodtipoetic(): ?Label
    {
        return $this->codtipoetic;
    }

    public function setCodtipoetic(?Label $codtipoetic): self
    {
        $this->codtipoetic = $codtipoetic;

        return $this;
    }

    public function getFlgstatoarticolo(): ?Status
    {
        return $this->flgstatoarticolo;
    }

    public function setFlgstatoarticolo(?Status $flgstatoarticolo): self
    {
        $this->flgstatoarticolo = $flgstatoarticolo;

        return $this;
    }

    /**
     * @return Collection|PriceList[]
     */
    public function getListino(): Collection
    {
        return $this->listino;
    }

    public function addListino(PriceList $listino): self
    {
        if (!$this->listino->contains($listino)) {
            $this->listino[] = $listino;
            $listino->setCodart($this);
        }

        return $this;
    }

    public function removeListino(PriceList $listino): self
    {
        if ($this->listino->contains($listino)) {
            $this->listino->removeElement($listino);
            // set the owning side to null (unless already changed)
            if ($listino->getCodart() === $this) {
                $listino->setCodart(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ean[]
     */
    public function getEan(): Collection
    {
        return $this->ean;
    }

    public function addEan(Ean $ean): self
    {
        if (!$this->ean->contains($ean)) {
            $this->ean[] = $ean;
            $ean->setCodart($this);
        }

        return $this;
    }

    public function removeEan(Ean $ean): self
    {
        if ($this->ean->contains($ean)) {
            $this->ean->removeElement($ean);
            // set the owning side to null (unless already changed)
            if ($ean->getCodart() === $this) {
                $ean->setCodart(null);
            }
        }

        return $this;
    }
}
