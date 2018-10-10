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
		 * @ORM\Column(name="Nome", type="string", length=30, nullable=true)
		 */
		private $nome;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Cognome", type="string", length=30, nullable=true)
		 */
		private $cognome;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodiceFiscale", type="string", length=16,
		 *   nullable=true)
		 */
		private $codicefiscale;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DataNascita", type="string", length=16, nullable=true)
		 */
		private $datanascita;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgLuogoNascita", type="string", length=50,
		 *   nullable=true)
		 */
		private $flgluogonascita;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="StatoCivile", type="string", length=30, nullable=true)
		 */
		private $statocivile;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Professione", type="string", length=30, nullable=true)
		 */
		private $professione;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DataInserimento", type="string", length=16,
		 *   nullable=true)
		 */
		private $datainserimento;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgSesso", type="string", length=1, nullable=true)
		 */
		private $flgsesso;
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="FlgComponentiFamiglia", type="integer", nullable=true)
		 */
		private $flgcomponentifamiglia;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgIndirizzoDom", type="string", length=30,
		 *   nullable=true)
		 */
		private $flgindirizzodom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCivicoDom", type="string", length=5, nullable=true)
		 */
		private $flgcivicodom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgLocalitàDom", type="string", length=30,
		 *   nullable=true)
		 */
		private $flglocalitadom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCittàDom", type="string", length=30, nullable=true)
		 */
		private $flgcittadom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgProvinciaDom", type="string", length=2,
		 *   nullable=true)
		 */
		private $flgprovinciadom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCapDom", type="string", length=5, nullable=true)
		 */
		private $flgcapdom;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgIndirizzoRes", type="string", length=30,
		 *   nullable=true)
		 */
		private $flgindirizzores;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCivicoRes", type="string", length=5, nullable=true)
		 */
		private $flgcivicores;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgLocalitàRes", type="string", length=30,
		 *   nullable=true)
		 */
		private $flglocalitares;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCittàRes", type="string", length=30, nullable=true)
		 */
		private $flgcittares;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgProvinciaRes", type="string", length=2,
		 *   nullable=true)
		 */
		private $flgprovinciares;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCapRes", type="string", length=5, nullable=true)
		 */
		private $flgcapres;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgTelefono", type="string", length=16, nullable=true)
		 */
		private $flgtelefono;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgEMail", type="string", length=30, nullable=true)
		 */
		private $flgemail;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgCellulare", type="string", length=16, nullable=true)
		 */
		private $flgcellulare;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgWeb", type="string", length=30, nullable=true)
		 */
		private $flgweb;
		
		/**
		 * @var boolean
		 *
		 * @ORM\Column(name="FlgConsenso", type="boolean", nullable=true)
		 */
		private $flgconsenso;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="IDCodiceCliente", type="string", length=30)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $idcodicecliente;
		
		
		/**
		 * Set nome
		 *
		 * @param string $nome
		 *
		 * @return Customer
		 */
		public function setNome($nome)
		{
				$this->nome = $nome;
				
				return $this;
		}
		
		/**
		 * Get nome
		 *
		 * @return string
		 */
		public function getNome()
		{
				return $this->nome;
		}
		
		/**
		 * Set cognome
		 *
		 * @param string $cognome
		 *
		 * @return Customer
		 */
		public function setCognome($cognome)
		{
				$this->cognome = $cognome;
				
				return $this;
		}
		
		/**
		 * Get cognome
		 *
		 * @return string
		 */
		public function getCognome()
		{
				return $this->cognome;
		}
		
		/**
		 * Set codicefiscale
		 *
		 * @param string $codicefiscale
		 *
		 * @return Customer
		 */
		public function setCodicefiscale($codicefiscale)
		{
				$this->codicefiscale = $codicefiscale;
				
				return $this;
		}
		
		/**
		 * Get codicefiscale
		 *
		 * @return string
		 */
		public function getCodicefiscale()
		{
				return $this->codicefiscale;
		}
		
		/**
		 * Set datanascita
		 *
		 * @param string $datanascita
		 *
		 * @return Customer
		 */
		public function setDatanascita($datanascita)
		{
				$this->datanascita = $datanascita;
				
				return $this;
		}
		
		/**
		 * Get datanascita
		 *
		 * @return string
		 */
		public function getDatanascita()
		{
				return $this->datanascita;
		}
		
		/**
		 * Set flgluogonascita
		 *
		 * @param string $flgluogonascita
		 *
		 * @return Customer
		 */
		public function setFlgluogonascita($flgluogonascita)
		{
				$this->flgluogonascita = $flgluogonascita;
				
				return $this;
		}
		
		/**
		 * Get flgluogonascita
		 *
		 * @return string
		 */
		public function getFlgluogonascita()
		{
				return $this->flgluogonascita;
		}
		
		/**
		 * Set statocivile
		 *
		 * @param string $statocivile
		 *
		 * @return Customer
		 */
		public function setStatocivile($statocivile)
		{
				$this->statocivile = $statocivile;
				
				return $this;
		}
		
		/**
		 * Get statocivile
		 *
		 * @return string
		 */
		public function getStatocivile()
		{
				return $this->statocivile;
		}
		
		/**
		 * Set professione
		 *
		 * @param string $professione
		 *
		 * @return Customer
		 */
		public function setProfessione($professione)
		{
				$this->professione = $professione;
				
				return $this;
		}
		
		/**
		 * Get professione
		 *
		 * @return string
		 */
		public function getProfessione()
		{
				return $this->professione;
		}
		
		/**
		 * Set datainserimento
		 *
		 * @param string $datainserimento
		 *
		 * @return Customer
		 */
		public function setDatainserimento($datainserimento)
		{
				$this->datainserimento = $datainserimento;
				
				return $this;
		}
		
		/**
		 * Get datainserimento
		 *
		 * @return string
		 */
		public function getDatainserimento()
		{
				return $this->datainserimento;
		}
		
		/**
		 * Set flgsesso
		 *
		 * @param string $flgsesso
		 *
		 * @return Customer
		 */
		public function setFlgsesso($flgsesso)
		{
				$this->flgsesso = $flgsesso;
				
				return $this;
		}
		
		/**
		 * Get flgsesso
		 *
		 * @return string
		 */
		public function getFlgsesso()
		{
				return $this->flgsesso;
		}
		
		/**
		 * Set flgcomponentifamiglia
		 *
		 * @param integer $flgcomponentifamiglia
		 *
		 * @return Customer
		 */
		public function setFlgcomponentifamiglia($flgcomponentifamiglia)
		{
				$this->flgcomponentifamiglia = $flgcomponentifamiglia;
				
				return $this;
		}
		
		/**
		 * Get flgcomponentifamiglia
		 *
		 * @return integer
		 */
		public function getFlgcomponentifamiglia()
		{
				return $this->flgcomponentifamiglia;
		}
		
		/**
		 * Set flgindirizzodom
		 *
		 * @param string $flgindirizzodom
		 *
		 * @return Customer
		 */
		public function setFlgindirizzodom($flgindirizzodom)
		{
				$this->flgindirizzodom = $flgindirizzodom;
				
				return $this;
		}
		
		/**
		 * Get flgindirizzodom
		 *
		 * @return string
		 */
		public function getFlgindirizzodom()
		{
				return $this->flgindirizzodom;
		}
		
		/**
		 * Set flgcivicodom
		 *
		 * @param string $flgcivicodom
		 *
		 * @return Customer
		 */
		public function setFlgcivicodom($flgcivicodom)
		{
				$this->flgcivicodom = $flgcivicodom;
				
				return $this;
		}
		
		/**
		 * Get flgcivicodom
		 *
		 * @return string
		 */
		public function getFlgcivicodom()
		{
				return $this->flgcivicodom;
		}
		
		/**
		 * Set flglocalitadom
		 *
		 * @param string $flglocalitadom
		 *
		 * @return Customer
		 */
		public function setFlglocalitadom($flglocalitadom)
		{
				$this->flglocalitadom = $flglocalitadom;
				
				return $this;
		}
		
		/**
		 * Get flglocalitadom
		 *
		 * @return string
		 */
		public function getFlglocalitadom()
		{
				return $this->flglocalitadom;
		}
		
		/**
		 * Set flgcittadom
		 *
		 * @param string $flgcittadom
		 *
		 * @return Customer
		 */
		public function setFlgcittadom($flgcittadom)
		{
				$this->flgcittadom = $flgcittadom;
				
				return $this;
		}
		
		/**
		 * Get flgcittadom
		 *
		 * @return string
		 */
		public function getFlgcittadom()
		{
				return $this->flgcittadom;
		}
		
		/**
		 * Set flgprovinciadom
		 *
		 * @param string $flgprovinciadom
		 *
		 * @return Customer
		 */
		public function setFlgprovinciadom($flgprovinciadom)
		{
				$this->flgprovinciadom = $flgprovinciadom;
				
				return $this;
		}
		
		/**
		 * Get flgprovinciadom
		 *
		 * @return string
		 */
		public function getFlgprovinciadom()
		{
				return $this->flgprovinciadom;
		}
		
		/**
		 * Set flgcapdom
		 *
		 * @param string $flgcapdom
		 *
		 * @return Customer
		 */
		public function setFlgcapdom($flgcapdom)
		{
				$this->flgcapdom = $flgcapdom;
				
				return $this;
		}
		
		/**
		 * Get flgcapdom
		 *
		 * @return string
		 */
		public function getFlgcapdom()
		{
				return $this->flgcapdom;
		}
		
		/**
		 * Set flgindirizzores
		 *
		 * @param string $flgindirizzores
		 *
		 * @return Customer
		 */
		public function setFlgindirizzores($flgindirizzores)
		{
				$this->flgindirizzores = $flgindirizzores;
				
				return $this;
		}
		
		/**
		 * Get flgindirizzores
		 *
		 * @return string
		 */
		public function getFlgindirizzores()
		{
				return $this->flgindirizzores;
		}
		
		/**
		 * Set flgcivicores
		 *
		 * @param string $flgcivicores
		 *
		 * @return Customer
		 */
		public function setFlgcivicores($flgcivicores)
		{
				$this->flgcivicores = $flgcivicores;
				
				return $this;
		}
		
		/**
		 * Get flgcivicores
		 *
		 * @return string
		 */
		public function getFlgcivicores()
		{
				return $this->flgcivicores;
		}
		
		/**
		 * Set flglocalitares
		 *
		 * @param string $flglocalitares
		 *
		 * @return Customer
		 */
		public function setFlglocalitares($flglocalitares)
		{
				$this->flglocalitares = $flglocalitares;
				
				return $this;
		}
		
		/**
		 * Get flglocalitares
		 *
		 * @return string
		 */
		public function getFlglocalitares()
		{
				return $this->flglocalitares;
		}
		
		/**
		 * Set flgcittares
		 *
		 * @param string $flgcittares
		 *
		 * @return Customer
		 */
		public function setFlgcittares($flgcittares)
		{
				$this->flgcittares = $flgcittares;
				
				return $this;
		}
		
		/**
		 * Get flgcittares
		 *
		 * @return string
		 */
		public function getFlgcittares()
		{
				return $this->flgcittares;
		}
		
		/**
		 * Set flgprovinciares
		 *
		 * @param string $flgprovinciares
		 *
		 * @return Customer
		 */
		public function setFlgprovinciares($flgprovinciares)
		{
				$this->flgprovinciares = $flgprovinciares;
				
				return $this;
		}
		
		/**
		 * Get flgprovinciares
		 *
		 * @return string
		 */
		public function getFlgprovinciares()
		{
				return $this->flgprovinciares;
		}
		
		/**
		 * Set flgcapres
		 *
		 * @param string $flgcapres
		 *
		 * @return Customer
		 */
		public function setFlgcapres($flgcapres)
		{
				$this->flgcapres = $flgcapres;
				
				return $this;
		}
		
		/**
		 * Get flgcapres
		 *
		 * @return string
		 */
		public function getFlgcapres()
		{
				return $this->flgcapres;
		}
		
		/**
		 * Set flgtelefono
		 *
		 * @param string $flgtelefono
		 *
		 * @return Customer
		 */
		public function setFlgtelefono($flgtelefono)
		{
				$this->flgtelefono = $flgtelefono;
				
				return $this;
		}
		
		/**
		 * Get flgtelefono
		 *
		 * @return string
		 */
		public function getFlgtelefono()
		{
				return $this->flgtelefono;
		}
		
		/**
		 * Set flgemail
		 *
		 * @param string $flgemail
		 *
		 * @return Customer
		 */
		public function setFlgemail($flgemail)
		{
				$this->flgemail = $flgemail;
				
				return $this;
		}
		
		/**
		 * Get flgemail
		 *
		 * @return string
		 */
		public function getFlgemail()
		{
				return $this->flgemail;
		}
		
		/**
		 * Set flgcellulare
		 *
		 * @param string $flgcellulare
		 *
		 * @return Customer
		 */
		public function setFlgcellulare($flgcellulare)
		{
				$this->flgcellulare = $flgcellulare;
				
				return $this;
		}
		
		/**
		 * Get flgcellulare
		 *
		 * @return string
		 */
		public function getFlgcellulare()
		{
				return $this->flgcellulare;
		}
		
		/**
		 * Set flgweb
		 *
		 * @param string $flgweb
		 *
		 * @return Customer
		 */
		public function setFlgweb($flgweb)
		{
				$this->flgweb = $flgweb;
				
				return $this;
		}
		
		/**
		 * Get flgweb
		 *
		 * @return string
		 */
		public function getFlgweb()
		{
				return $this->flgweb;
		}
		
		/**
		 * Set flgconsenso
		 *
		 * @param boolean $flgconsenso
		 *
		 * @return Customer
		 */
		public function setFlgconsenso($flgconsenso)
		{
				$this->flgconsenso = $flgconsenso;
				
				return $this;
		}
		
		/**
		 * Get flgconsenso
		 *
		 * @return boolean
		 */
		public function getFlgconsenso()
		{
				return $this->flgconsenso;
		}
		
		/**
		 * Get idcodicecliente
		 *
		 * @return string
		 */
		public function getIdcodicecliente()
		{
				return $this->idcodicecliente;
		}
}
