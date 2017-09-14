<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="tblfammerc")
 * @ORM\Entity
 */
class Category
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodRepECR", type="string", length=50, nullable=true)
		 */
		private $codrepecr;
		
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
		 * @var string
		 *
		 * @ORM\Column(name="flgTipoFront", type="string", length=50, nullable=true)
		 */
		private $flgtipofront;
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="FlgAliqIVA", type="integer", nullable=true)
		 */
		private $flgaliqiva;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodRep", type="string", length=50)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codrep;
		
		
		/**
		 * Set codrepecr
		 *
		 * @param string $codrepecr
		 *
		 * @return Category
		 */
		public function setCodrepecr($codrepecr)
		{
				$this->codrepecr = $codrepecr;
				
				return $this;
		}
		
		/**
		 * Get codrepecr
		 *
		 * @return string
		 */
		public function getCodrepecr()
		{
				return $this->codrepecr;
		}
		
		/**
		 * Set descrep
		 *
		 * @param string $descrep
		 *
		 * @return Category
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
		 * @return Category
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
		 * @return Category
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
		 * @return Category
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
		 * Set flgtipofront
		 *
		 * @param string $flgtipofront
		 *
		 * @return Category
		 */
		public function setFlgtipofront($flgtipofront)
		{
				$this->flgtipofront = $flgtipofront;
				
				return $this;
		}
		
		/**
		 * Get flgtipofront
		 *
		 * @return string
		 */
		public function getFlgtipofront()
		{
				return $this->flgtipofront;
		}
		
		/**
		 * Set flgaliqiva
		 *
		 * @param integer $flgaliqiva
		 *
		 * @return Category
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
