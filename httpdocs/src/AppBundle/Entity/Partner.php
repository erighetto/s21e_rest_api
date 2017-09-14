<?php

namespace AppBundle\Entity;

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
		 * @ORM\Column(name="CodCEDI", type="string", length=50, nullable=true)
		 */
		private $codcedi;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="RagSoc", type="string", length=50, nullable=false)
		 */
		private $ragsoc;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Piva", type="string", length=11, nullable=true)
		 */
		private $piva;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CF", type="string", length=16, nullable=true)
		 */
		private $cf;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Ind", type="string", length=50, nullable=true)
		 */
		private $ind;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Loc", type="string", length=30, nullable=true)
		 */
		private $loc;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Citta", type="string", length=30, nullable=true)
		 */
		private $citta;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Prv", type="string", length=2, nullable=true)
		 */
		private $prv;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CAP", type="string", length=5, nullable=true)
		 */
		private $cap;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Tel", type="string", length=50, nullable=true)
		 */
		private $tel;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Mail", type="string", length=50, nullable=true)
		 */
		private $mail;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="Web", type="string", length=50, nullable=true)
		 */
		private $web;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataCreaz", type="string", length=20, nullable=true)
		 */
		private $flgdatacreaz;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataEliminaz", type="string", length=20,
		 *   nullable=true)
		 */
		private $flgdataeliminaz;
		
		/**
		 * @var boolean
		 *
		 * @ORM\Column(name="flgStato", type="boolean", nullable=true)
		 */
		private $flgstato = '0';
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodTipoPag", type="string", length=50, nullable=true)
		 */
		private $codtipopag;
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="SctListinoAcq", type="integer", nullable=true)
		 */
		private $sctlistinoacq = '0';
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="SctListinoVend", type="integer", nullable=true)
		 */
		private $sctlistinovend = '0';
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="SctFattura", type="integer", nullable=true)
		 */
		private $sctfattura = '0';
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="flgDayConsegna", type="integer", nullable=true)
		 */
		private $flgdayconsegna = '0';
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="flgFreqConsegna", type="integer", nullable=true)
		 */
		private $flgfreqconsegna = '0';
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgContoC", type="string", length=50, nullable=true)
		 */
		private $flgcontoc;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgABI", type="string", length=50, nullable=true)
		 */
		private $flgabi;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgCAB", type="string", length=50, nullable=true)
		 */
		private $flgcab;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodInt", type="string", length=30)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codint;
		
		
		/**
		 * Set codcedi
		 *
		 * @param string $codcedi
		 *
		 * @return Partner
		 */
		public function setCodcedi($codcedi)
		{
				$this->codcedi = $codcedi;
				
				return $this;
		}
		
		/**
		 * Get codcedi
		 *
		 * @return string
		 */
		public function getCodcedi()
		{
				return $this->codcedi;
		}
		
		/**
		 * Set ragsoc
		 *
		 * @param string $ragsoc
		 *
		 * @return Partner
		 */
		public function setRagsoc($ragsoc)
		{
				$this->ragsoc = $ragsoc;
				
				return $this;
		}
		
		/**
		 * Get ragsoc
		 *
		 * @return string
		 */
		public function getRagsoc()
		{
				return $this->ragsoc;
		}
		
		/**
		 * Set piva
		 *
		 * @param string $piva
		 *
		 * @return Partner
		 */
		public function setPiva($piva)
		{
				$this->piva = $piva;
				
				return $this;
		}
		
		/**
		 * Get piva
		 *
		 * @return string
		 */
		public function getPiva()
		{
				return $this->piva;
		}
		
		/**
		 * Set cf
		 *
		 * @param string $cf
		 *
		 * @return Partner
		 */
		public function setCf($cf)
		{
				$this->cf = $cf;
				
				return $this;
		}
		
		/**
		 * Get cf
		 *
		 * @return string
		 */
		public function getCf()
		{
				return $this->cf;
		}
		
		/**
		 * Set ind
		 *
		 * @param string $ind
		 *
		 * @return Partner
		 */
		public function setInd($ind)
		{
				$this->ind = $ind;
				
				return $this;
		}
		
		/**
		 * Get ind
		 *
		 * @return string
		 */
		public function getInd()
		{
				return $this->ind;
		}
		
		/**
		 * Set loc
		 *
		 * @param string $loc
		 *
		 * @return Partner
		 */
		public function setLoc($loc)
		{
				$this->loc = $loc;
				
				return $this;
		}
		
		/**
		 * Get loc
		 *
		 * @return string
		 */
		public function getLoc()
		{
				return $this->loc;
		}
		
		/**
		 * Set citta
		 *
		 * @param string $citta
		 *
		 * @return Partner
		 */
		public function setCitta($citta)
		{
				$this->citta = $citta;
				
				return $this;
		}
		
		/**
		 * Get citta
		 *
		 * @return string
		 */
		public function getCitta()
		{
				return $this->citta;
		}
		
		/**
		 * Set prv
		 *
		 * @param string $prv
		 *
		 * @return Partner
		 */
		public function setPrv($prv)
		{
				$this->prv = $prv;
				
				return $this;
		}
		
		/**
		 * Get prv
		 *
		 * @return string
		 */
		public function getPrv()
		{
				return $this->prv;
		}
		
		/**
		 * Set cap
		 *
		 * @param string $cap
		 *
		 * @return Partner
		 */
		public function setCap($cap)
		{
				$this->cap = $cap;
				
				return $this;
		}
		
		/**
		 * Get cap
		 *
		 * @return string
		 */
		public function getCap()
		{
				return $this->cap;
		}
		
		/**
		 * Set tel
		 *
		 * @param string $tel
		 *
		 * @return Partner
		 */
		public function setTel($tel)
		{
				$this->tel = $tel;
				
				return $this;
		}
		
		/**
		 * Get tel
		 *
		 * @return string
		 */
		public function getTel()
		{
				return $this->tel;
		}
		
		/**
		 * Set mail
		 *
		 * @param string $mail
		 *
		 * @return Partner
		 */
		public function setMail($mail)
		{
				$this->mail = $mail;
				
				return $this;
		}
		
		/**
		 * Get mail
		 *
		 * @return string
		 */
		public function getMail()
		{
				return $this->mail;
		}
		
		/**
		 * Set web
		 *
		 * @param string $web
		 *
		 * @return Partner
		 */
		public function setWeb($web)
		{
				$this->web = $web;
				
				return $this;
		}
		
		/**
		 * Get web
		 *
		 * @return string
		 */
		public function getWeb()
		{
				return $this->web;
		}
		
		/**
		 * Set flgdatacreaz
		 *
		 * @param string $flgdatacreaz
		 *
		 * @return Partner
		 */
		public function setFlgdatacreaz($flgdatacreaz)
		{
				$this->flgdatacreaz = $flgdatacreaz;
				
				return $this;
		}
		
		/**
		 * Get flgdatacreaz
		 *
		 * @return string
		 */
		public function getFlgdatacreaz()
		{
				return $this->flgdatacreaz;
		}
		
		/**
		 * Set flgdataeliminaz
		 *
		 * @param string $flgdataeliminaz
		 *
		 * @return Partner
		 */
		public function setFlgdataeliminaz($flgdataeliminaz)
		{
				$this->flgdataeliminaz = $flgdataeliminaz;
				
				return $this;
		}
		
		/**
		 * Get flgdataeliminaz
		 *
		 * @return string
		 */
		public function getFlgdataeliminaz()
		{
				return $this->flgdataeliminaz;
		}
		
		/**
		 * Set flgstato
		 *
		 * @param boolean $flgstato
		 *
		 * @return Partner
		 */
		public function setFlgstato($flgstato)
		{
				$this->flgstato = $flgstato;
				
				return $this;
		}
		
		/**
		 * Get flgstato
		 *
		 * @return boolean
		 */
		public function getFlgstato()
		{
				return $this->flgstato;
		}
		
		/**
		 * Set codtipopag
		 *
		 * @param string $codtipopag
		 *
		 * @return Partner
		 */
		public function setCodtipopag($codtipopag)
		{
				$this->codtipopag = $codtipopag;
				
				return $this;
		}
		
		/**
		 * Get codtipopag
		 *
		 * @return string
		 */
		public function getCodtipopag()
		{
				return $this->codtipopag;
		}
		
		/**
		 * Set sctlistinoacq
		 *
		 * @param integer $sctlistinoacq
		 *
		 * @return Partner
		 */
		public function setSctlistinoacq($sctlistinoacq)
		{
				$this->sctlistinoacq = $sctlistinoacq;
				
				return $this;
		}
		
		/**
		 * Get sctlistinoacq
		 *
		 * @return integer
		 */
		public function getSctlistinoacq()
		{
				return $this->sctlistinoacq;
		}
		
		/**
		 * Set sctlistinovend
		 *
		 * @param integer $sctlistinovend
		 *
		 * @return Partner
		 */
		public function setSctlistinovend($sctlistinovend)
		{
				$this->sctlistinovend = $sctlistinovend;
				
				return $this;
		}
		
		/**
		 * Get sctlistinovend
		 *
		 * @return integer
		 */
		public function getSctlistinovend()
		{
				return $this->sctlistinovend;
		}
		
		/**
		 * Set sctfattura
		 *
		 * @param integer $sctfattura
		 *
		 * @return Partner
		 */
		public function setSctfattura($sctfattura)
		{
				$this->sctfattura = $sctfattura;
				
				return $this;
		}
		
		/**
		 * Get sctfattura
		 *
		 * @return integer
		 */
		public function getSctfattura()
		{
				return $this->sctfattura;
		}
		
		/**
		 * Set flgdayconsegna
		 *
		 * @param integer $flgdayconsegna
		 *
		 * @return Partner
		 */
		public function setFlgdayconsegna($flgdayconsegna)
		{
				$this->flgdayconsegna = $flgdayconsegna;
				
				return $this;
		}
		
		/**
		 * Get flgdayconsegna
		 *
		 * @return integer
		 */
		public function getFlgdayconsegna()
		{
				return $this->flgdayconsegna;
		}
		
		/**
		 * Set flgfreqconsegna
		 *
		 * @param integer $flgfreqconsegna
		 *
		 * @return Partner
		 */
		public function setFlgfreqconsegna($flgfreqconsegna)
		{
				$this->flgfreqconsegna = $flgfreqconsegna;
				
				return $this;
		}
		
		/**
		 * Get flgfreqconsegna
		 *
		 * @return integer
		 */
		public function getFlgfreqconsegna()
		{
				return $this->flgfreqconsegna;
		}
		
		/**
		 * Set flgcontoc
		 *
		 * @param string $flgcontoc
		 *
		 * @return Partner
		 */
		public function setFlgcontoc($flgcontoc)
		{
				$this->flgcontoc = $flgcontoc;
				
				return $this;
		}
		
		/**
		 * Get flgcontoc
		 *
		 * @return string
		 */
		public function getFlgcontoc()
		{
				return $this->flgcontoc;
		}
		
		/**
		 * Set flgabi
		 *
		 * @param string $flgabi
		 *
		 * @return Partner
		 */
		public function setFlgabi($flgabi)
		{
				$this->flgabi = $flgabi;
				
				return $this;
		}
		
		/**
		 * Get flgabi
		 *
		 * @return string
		 */
		public function getFlgabi()
		{
				return $this->flgabi;
		}
		
		/**
		 * Set flgcab
		 *
		 * @param string $flgcab
		 *
		 * @return Partner
		 */
		public function setFlgcab($flgcab)
		{
				$this->flgcab = $flgcab;
				
				return $this;
		}
		
		/**
		 * Get flgcab
		 *
		 * @return string
		 */
		public function getFlgcab()
		{
				return $this->flgcab;
		}
		
		/**
		 * Get codint
		 *
		 * @return string
		 */
		public function getCodint()
		{
				return $this->codint;
		}
}
