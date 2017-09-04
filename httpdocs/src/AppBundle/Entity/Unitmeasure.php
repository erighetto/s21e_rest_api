<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unitmeasure
 *
 * @ORM\Table(name="tblunitamisura")
 * @ORM\Entity
 */
class Unitmeasure
{
    /**
     * @var string
     *
     * @ORM\Column(name="DescUmis", type="string", length=50, nullable=false)
     */
    private $descumis;

    /**
     * @var float
     *
     * @ORM\Column(name="ValUmis", type="float", precision=10, scale=0, nullable=true)
     */
    private $valumis;

    /**
     * @var string
     *
     * @ORM\Column(name="SSMA_TimeStamp", type="blob", length=255, nullable=false)
     */
    private $ssmaTimestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="CodUmis", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codumis;



    /**
     * Set descumis
     *
     * @param string $descumis
     *
     * @return Unitmeasure
     */
    public function setDescumis($descumis)
    {
        $this->descumis = $descumis;

        return $this;
    }

    /**
     * Get descumis
     *
     * @return string
     */
    public function getDescumis()
    {
        return $this->descumis;
    }

    /**
     * Set valumis
     *
     * @param float $valumis
     *
     * @return Unitmeasure
     */
    public function setValumis($valumis)
    {
        $this->valumis = $valumis;

        return $this;
    }

    /**
     * Get valumis
     *
     * @return float
     */
    public function getValumis()
    {
        return $this->valumis;
    }

    /**
     * Set ssmaTimestamp
     *
     * @param string $ssmaTimestamp
     *
     * @return Unitmeasure
     */
    public function setSsmaTimestamp($ssmaTimestamp)
    {
        $this->ssmaTimestamp = $ssmaTimestamp;

        return $this;
    }

    /**
     * Get ssmaTimestamp
     *
     * @return string
     */
    public function getSsmaTimestamp()
    {
        return $this->ssmaTimestamp;
    }

    /**
     * Get codumis
     *
     * @return string
     */
    public function getCodumis()
    {
        return $this->codumis;
    }
}
