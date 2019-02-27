<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="tblanagclientefidelity")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDCodiceCliente", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcodicecliente;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Nome", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $nome = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Cognome", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $cognome = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="CodiceFiscale", type="string", length=16, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $codicefiscale = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DataNascita", type="string", length=16, nullable=true, options={"default"=NULL})
     */
    private $datanascita = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgLuogoNascita", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    private $flgluogonascita = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="StatoCivile", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $statocivile = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="Professione", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $professione = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="DataInserimento", type="string", length=16, nullable=true, options={"default"=NULL})
     */
    private $datainserimento = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgSesso", type="string", length=1, nullable=true, options={"default"=NULL,"fixed"=true})
     */
    private $flgsesso = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="FlgComponentiFamiglia", type="integer", nullable=true, options={"default"=NULL})
     */
    private $flgcomponentifamiglia = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgIndirizzoDom", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgindirizzodom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCivicoDom", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $flgcivicodom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgLocalitàDom", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flglocalitadom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCittàDom", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgcittadom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgProvinciaDom", type="string", length=2, nullable=true, options={"default"=NULL})
     */
    private $flgprovinciadom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCapDom", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $flgcapdom = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgIndirizzoRes", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgindirizzores = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCivicoRes", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $flgcivicores = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgLocalitàRes", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flglocalitares = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCittàRes", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgcittares = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgProvinciaRes", type="string", length=2, nullable=true, options={"default"=NULL})
     */
    private $flgprovinciares = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCapRes", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    private $flgcapres = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgTelefono", type="string", length=16, nullable=true, options={"default"=NULL})
     */
    private $flgtelefono = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgEMail", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgemail = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgCellulare", type="string", length=16, nullable=true, options={"default"=NULL})
     */
    private $flgcellulare = NULL;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="FlgWeb", type="string", length=30, nullable=true, options={"default"=NULL})
     */
    private $flgweb = NULL;
    
    /**
     * @var bool|null
     *
     * @ORM\Column(name="FlgConsenso", type="boolean", nullable=true, options={"default"=NULL})
     */
    private $flgconsenso = NULL;

    public function getIdcodicecliente(): ?string
    {
        return $this->idcodicecliente;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(?string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }

    public function getCodicefiscale(): ?string
    {
        return $this->codicefiscale;
    }

    public function setCodicefiscale(?string $codicefiscale): self
    {
        $this->codicefiscale = $codicefiscale;

        return $this;
    }

    public function getDatanascita(): ?string
    {
        return $this->datanascita;
    }

    public function setDatanascita(?string $datanascita): self
    {
        $this->datanascita = $datanascita;

        return $this;
    }

    public function getFlgluogonascita(): ?string
    {
        return $this->flgluogonascita;
    }

    public function setFlgluogonascita(?string $flgluogonascita): self
    {
        $this->flgluogonascita = $flgluogonascita;

        return $this;
    }

    public function getStatocivile(): ?string
    {
        return $this->statocivile;
    }

    public function setStatocivile(?string $statocivile): self
    {
        $this->statocivile = $statocivile;

        return $this;
    }

    public function getProfessione(): ?string
    {
        return $this->professione;
    }

    public function setProfessione(?string $professione): self
    {
        $this->professione = $professione;

        return $this;
    }

    public function getDatainserimento(): ?string
    {
        return $this->datainserimento;
    }

    public function setDatainserimento(?string $datainserimento): self
    {
        $this->datainserimento = $datainserimento;

        return $this;
    }

    public function getFlgsesso(): ?string
    {
        return $this->flgsesso;
    }

    public function setFlgsesso(?string $flgsesso): self
    {
        $this->flgsesso = $flgsesso;

        return $this;
    }

    public function getFlgcomponentifamiglia(): ?int
    {
        return $this->flgcomponentifamiglia;
    }

    public function setFlgcomponentifamiglia(?int $flgcomponentifamiglia): self
    {
        $this->flgcomponentifamiglia = $flgcomponentifamiglia;

        return $this;
    }

    public function getFlgindirizzodom(): ?string
    {
        return $this->flgindirizzodom;
    }

    public function setFlgindirizzodom(?string $flgindirizzodom): self
    {
        $this->flgindirizzodom = $flgindirizzodom;

        return $this;
    }

    public function getFlgcivicodom(): ?string
    {
        return $this->flgcivicodom;
    }

    public function setFlgcivicodom(?string $flgcivicodom): self
    {
        $this->flgcivicodom = $flgcivicodom;

        return $this;
    }

    public function getFlglocalitadom(): ?string
    {
        return $this->flglocalitadom;
    }

    public function setFlglocalitadom(?string $flglocalitadom): self
    {
        $this->flglocalitadom = $flglocalitadom;

        return $this;
    }

    public function getFlgcittadom(): ?string
    {
        return $this->flgcittadom;
    }

    public function setFlgcittadom(?string $flgcittadom): self
    {
        $this->flgcittadom = $flgcittadom;

        return $this;
    }

    public function getFlgprovinciadom(): ?string
    {
        return $this->flgprovinciadom;
    }

    public function setFlgprovinciadom(?string $flgprovinciadom): self
    {
        $this->flgprovinciadom = $flgprovinciadom;

        return $this;
    }

    public function getFlgcapdom(): ?string
    {
        return $this->flgcapdom;
    }

    public function setFlgcapdom(?string $flgcapdom): self
    {
        $this->flgcapdom = $flgcapdom;

        return $this;
    }

    public function getFlgindirizzores(): ?string
    {
        return $this->flgindirizzores;
    }

    public function setFlgindirizzores(?string $flgindirizzores): self
    {
        $this->flgindirizzores = $flgindirizzores;

        return $this;
    }

    public function getFlgcivicores(): ?string
    {
        return $this->flgcivicores;
    }

    public function setFlgcivicores(?string $flgcivicores): self
    {
        $this->flgcivicores = $flgcivicores;

        return $this;
    }

    public function getFlglocalitares(): ?string
    {
        return $this->flglocalitares;
    }

    public function setFlglocalitares(?string $flglocalitares): self
    {
        $this->flglocalitares = $flglocalitares;

        return $this;
    }

    public function getFlgcittares(): ?string
    {
        return $this->flgcittares;
    }

    public function setFlgcittares(?string $flgcittares): self
    {
        $this->flgcittares = $flgcittares;

        return $this;
    }

    public function getFlgprovinciares(): ?string
    {
        return $this->flgprovinciares;
    }

    public function setFlgprovinciares(?string $flgprovinciares): self
    {
        $this->flgprovinciares = $flgprovinciares;

        return $this;
    }

    public function getFlgcapres(): ?string
    {
        return $this->flgcapres;
    }

    public function setFlgcapres(?string $flgcapres): self
    {
        $this->flgcapres = $flgcapres;

        return $this;
    }

    public function getFlgtelefono(): ?string
    {
        return $this->flgtelefono;
    }

    public function setFlgtelefono(?string $flgtelefono): self
    {
        $this->flgtelefono = $flgtelefono;

        return $this;
    }

    public function getFlgemail(): ?string
    {
        return $this->flgemail;
    }

    public function setFlgemail(?string $flgemail): self
    {
        $this->flgemail = $flgemail;

        return $this;
    }

    public function getFlgcellulare(): ?string
    {
        return $this->flgcellulare;
    }

    public function setFlgcellulare(?string $flgcellulare): self
    {
        $this->flgcellulare = $flgcellulare;

        return $this;
    }

    public function getFlgweb(): ?string
    {
        return $this->flgweb;
    }

    public function setFlgweb(?string $flgweb): self
    {
        $this->flgweb = $flgweb;

        return $this;
    }

    public function getFlgconsenso(): ?bool
    {
        return $this->flgconsenso;
    }

    public function setFlgconsenso(?bool $flgconsenso): self
    {
        $this->flgconsenso = $flgconsenso;

        return $this;
    }
}
