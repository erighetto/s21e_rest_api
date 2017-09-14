<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ean
 *
 * @ORM\Table(name="tblean", indexes={@ORM\Index(name="FK_TBLEan_TBLArticolo", columns={"CodArt"})})
 * @ORM\Entity
 */
class Ean
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgStatoEAN", type="string", length=1, nullable=true)
		 */
		private $flgstatoean = 'S';
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataInizioValidità", type="string", length=16,
		 *   nullable=true)
		 */
		private $flgdatainiziovalidita;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataFineValidità", type="string", length=16,
		 *   nullable=true)
		 */
		private $flgdatafinevalidita;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataEliminaz", type="string", length=16,
		 *   nullable=true)
		 */
		private $flgdataeliminaz;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="flgDataIns", type="string", length=16, nullable=true)
		 */
		private $flgdatains;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgPrimario", type="string", length=1, nullable=true)
		 */
		private $flgprimario;
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="FlgDivulgataEliminaz", type="integer", nullable=true)
		 */
		private $flgdivulgataeliminaz;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodEAN", type="string", length=20)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codean;
		
		/**
		 * @var \AppBundle\Entity\Item
		 *
		 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Item", inversedBy="ean")
		 * @ORM\JoinColumn(name="CodArt", referencedColumnName="CodArt")
		 */
		private $codart;
		
		/**
		 * Set flgstatoean
		 *
		 * @param string $flgstatoean
		 *
		 * @return Ean
		 */
		public function setFlgstatoean($flgstatoean)
		{
				$this->flgstatoean = $flgstatoean;
				
				return $this;
		}
		
		/**
		 * Get flgstatoean
		 *
		 * @return string
		 */
		public function getFlgstatoean()
		{
				return $this->flgstatoean;
		}
		
		/**
		 * Set flgdatainiziovalidita
		 *
		 * @param string $flgdatainiziovalidita
		 *
		 * @return Ean
		 */
		public function setFlgdatainiziovalidita($flgdatainiziovalidita)
		{
				$this->flgdatainiziovalidita = $flgdatainiziovalidita;
				
				return $this;
		}
		
		/**
		 * Get flgdatainiziovalidita
		 *
		 * @return string
		 */
		public function getFlgdatainiziovalidita()
		{
				return $this->flgdatainiziovalidita;
		}
		
		/**
		 * Set flgdatafinevalidita
		 *
		 * @param string $flgdatafinevalidita
		 *
		 * @return Ean
		 */
		public function setFlgdatafinevalidita($flgdatafinevalidita)
		{
				$this->flgdatafinevalidita = $flgdatafinevalidita;
				
				return $this;
		}
		
		/**
		 * Get flgdatafinevalidita
		 *
		 * @return string
		 */
		public function getFlgdatafinevalidita()
		{
				return $this->flgdatafinevalidita;
		}
		
		/**
		 * Set flgdataeliminaz
		 *
		 * @param string $flgdataeliminaz
		 *
		 * @return Ean
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
		 * Set flgdatains
		 *
		 * @param string $flgdatains
		 *
		 * @return Ean
		 */
		public function setFlgdatains($flgdatains)
		{
				$this->flgdatains = $flgdatains;
				
				return $this;
		}
		
		/**
		 * Get flgdatains
		 *
		 * @return string
		 */
		public function getFlgdatains()
		{
				return $this->flgdatains;
		}
		
		/**
		 * Set flgprimario
		 *
		 * @param string $flgprimario
		 *
		 * @return Ean
		 */
		public function setFlgprimario($flgprimario)
		{
				$this->flgprimario = $flgprimario;
				
				return $this;
		}
		
		/**
		 * Get flgprimario
		 *
		 * @return string
		 */
		public function getFlgprimario()
		{
				return $this->flgprimario;
		}
		
		/**
		 * Set flgdivulgataeliminaz
		 *
		 * @param integer $flgdivulgataeliminaz
		 *
		 * @return Ean
		 */
		public function setFlgdivulgataeliminaz($flgdivulgataeliminaz)
		{
				$this->flgdivulgataeliminaz = $flgdivulgataeliminaz;
				
				return $this;
		}
		
		/**
		 * Get flgdivulgataeliminaz
		 *
		 * @return integer
		 */
		public function getFlgdivulgataeliminaz()
		{
				return $this->flgdivulgataeliminaz;
		}
		
		/**
		 * Get codean
		 *
		 * @return string
		 */
		public function getCodean()
		{
				return $this->codean;
		}
		
		/**
		 * Set codart
		 *
		 * @param \AppBundle\Entity\Item $codart
		 *
		 * @return Ean
		 */
		public function setCodart(\AppBundle\Entity\Item $codart = null)
		{
				$this->codart = $codart;
				
				return $this;
		}
		
		/**
		 * Get codart
		 *
		 * @return \AppBundle\Entity\Item
		 */
		public function getCodart()
		{
				return $this->codart;
		}
}
