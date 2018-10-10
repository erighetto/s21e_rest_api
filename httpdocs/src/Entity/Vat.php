<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vat
 *
 * @ORM\Table(name="tblaliquoteiva")
 * @ORM\Entity
 */
class Vat
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DescAliquota", type="string", length=50,
		 *   nullable=false)
		 */
		private $descaliquota;
		
		/**
		 * @var integer
		 *
		 * @ORM\Column(name="ValAliq", type="integer", nullable=false)
		 */
		private $valaliq;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="FlgUltimaModifica", type="string", length=16,
		 *   nullable=false)
		 */
		private $flgultimamodifica;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="IDAliquota", type="string", length=6)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $idaliquota;
		
		
		/**
		 * Set descaliquota
		 *
		 * @param string $descaliquota
		 *
		 * @return Vat
		 */
		public function setDescaliquota($descaliquota)
		{
				$this->descaliquota = $descaliquota;
				
				return $this;
		}
		
		/**
		 * Get descaliquota
		 *
		 * @return string
		 */
		public function getDescaliquota()
		{
				return $this->descaliquota;
		}
		
		/**
		 * Set valaliq
		 *
		 * @param integer $valaliq
		 *
		 * @return Vat
		 */
		public function setValaliq($valaliq)
		{
				$this->valaliq = $valaliq;
				
				return $this;
		}
		
		/**
		 * Get valaliq
		 *
		 * @return integer
		 */
		public function getValaliq()
		{
				return $this->valaliq;
		}
		
		/**
		 * Set flgultimamodifica
		 *
		 * @param string $flgultimamodifica
		 *
		 * @return Vat
		 */
		public function setFlgultimamodifica($flgultimamodifica)
		{
				$this->flgultimamodifica = $flgultimamodifica;
				
				return $this;
		}
		
		/**
		 * Get flgultimamodifica
		 *
		 * @return string
		 */
		public function getFlgultimamodifica()
		{
				return $this->flgultimamodifica;
		}
		
		/**
		 * Get idaliquota
		 *
		 * @return string
		 */
		public function getIdaliquota()
		{
				return $this->idaliquota;
		}
}
