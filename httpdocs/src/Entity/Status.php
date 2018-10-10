<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="tblstatiarticoli")
 * @ORM\Entity
 */
class Status
{
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="DescStato", type="string", length=50, nullable=true)
		 */
		private $descstato;
		
		/**
		 * @var string
		 *
		 * @ORM\Column(name="CodStato", type="string", length=2)
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="IDENTITY")
		 */
		private $codstato;
		
		
		/**
		 * Set descstato
		 *
		 * @param string $descstato
		 *
		 * @return Status
		 */
		public function setDescstato($descstato)
		{
				$this->descstato = $descstato;
				
				return $this;
		}
		
		/**
		 * Get descstato
		 *
		 * @return string
		 */
		public function getDescstato()
		{
				return $this->descstato;
		}
		
		/**
		 * Get codstato
		 *
		 * @return string
		 */
		public function getCodstato()
		{
				return $this->codstato;
		}
}
