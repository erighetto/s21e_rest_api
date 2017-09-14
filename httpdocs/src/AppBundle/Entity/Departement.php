<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="tblrepartiecr")
 * @ORM\Entity
 */
class Departement
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DescRep", type="string", length=50, nullable=false)
		 */
		private $descrep;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgStato", type="string", length=1, nullable=false)
		 */
		private $flgstato = 'S';
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataCreaz", type="string", length=20,
		 *   nullable=false)
		 */
		private $flgdatacreaz = 'getdate()';
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgCategoriaStatistica", type="string", length=1,
		 *   nullable=false)
		 */
		private $flgcategoriastatistica = 'S';
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="FlgAliqIVa", type="integer", nullable=true)
		 */
		private $flgaliqiva;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodRep", type="string", length=6)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codrep;
		
		
		/**
		 * Set descrep
		 *
		 * @param string $descrep
		 *
		 * @return Departement
		 */
		public function setDescrep($descrep)
		{
				$this->descrep = $descrep;
				
				return $this;
		}
		
		/**
		 * Get descrep
		 *
		 * @return string
		 */
		public function getDescrep()
		{
				return $this->descrep;
		}
		
		/**
		 * Set flgstato
		 *
		 * @param string $flgstato
		 *
		 * @return Departement
		 */
		public function setFlgstato($flgstato)
		{
				$this->flgstato = $flgstato;
				
				return $this;
		}
		
		/**
		 * Get flgstato
		 *
		 * @return string
		 */
		public function getFlgstato()
		{
				return $this->flgstato;
		}
		
		/**
		 * Set flgdatacreaz
		 *
		 * @param string $flgdatacreaz
		 *
		 * @return Departement
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
		 * Set flgcategoriastatistica
		 *
		 * @param string $flgcategoriastatistica
		 *
		 * @return Departement
		 */
		public function setFlgcategoriastatistica($flgcategoriastatistica)
		{
				$this->flgcategoriastatistica = $flgcategoriastatistica;
				
				return $this;
		}
		
		/**
		 * Get flgcategoriastatistica
		 *
		 * @return string
		 */
		public function getFlgcategoriastatistica()
		{
				return $this->flgcategoriastatistica;
		}
		
		/**
		 * Set flgaliqiva
		 *
		 * @param integer $flgaliqiva
		 *
		 * @return Departement
		 */
		public function setFlgaliqiva($flgaliqiva)
		{
				$this->flgaliqiva = $flgaliqiva;
				
				return $this;
		}
		
		/**
		 * Get flgaliqiva
		 *
		 * @return integer
		 */
		public function getFlgaliqiva()
		{
				return $this->flgaliqiva;
		}
		
		/**
		 * Get codrep
		 *
		 * @return string
		 */
		public function getCodrep()
		{
				return $this->codrep;
		}
}
