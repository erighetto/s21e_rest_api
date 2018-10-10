<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ean
 *
 * @ORM\Table(name="tbltipoean")
 * @ORM\Entity
 */
class Eantype
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodTipoEan", type="string", length=6, nullable=false)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codtipoean;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DescTipoEan", type="string", length=50, nullable=false)
		 */
		private $desctipoean;
		
		/**
		 * @return string
		 */
		public function getCodtipoean(): string
		{
				return $this->codtipoean;
		}
		
		/**
		 * @param string $codtipoean
		 */
		public function setCodtipoean(string $codtipoean)
		{
				$this->codtipoean = $codtipoean;
		}
		
		/**
		 * @return string
		 */
		public function getDesctipoean(): string
		{
				return $this->desctipoean;
		}
		
		/**
		 * @param string $desctipoean
		 */
		public function setDesctipoean(string $desctipoean)
		{
				$this->desctipoean = $desctipoean;
		}
		
		
}