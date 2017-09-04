<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Label
 *
 * @ORM\Table(name="tbltipoetichette")
 * @ORM\Entity
 */
class Label
{
    /**
     * @var string
     *
     * @ORM\Column(name="DescTipoEtic", type="string", length=50, nullable=false)
     */
    private $desctipoetic;

    /**
     * @var string
     *
     * @ORM\Column(name="CodTipoEtic", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codtipoetic;



    /**
     * Set desctipoetic
     *
     * @param string $desctipoetic
     *
     * @return Label
     */
    public function setDesctipoetic($desctipoetic)
    {
        $this->desctipoetic = $desctipoetic;

        return $this;
    }

    /**
     * Get desctipoetic
     *
     * @return string
     */
    public function getDesctipoetic()
    {
        return $this->desctipoetic;
    }

    /**
     * Get codtipoetic
     *
     * @return string
     */
    public function getCodtipoetic()
    {
        return $this->codtipoetic;
    }
}
