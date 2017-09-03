<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="settori")
 * @ORM\Entity
 */
class Section
{
    /**
     * @var string
     *
     * @ORM\Column(name="set_codFam", type="string", length=20, nullable=true)
     */
    private $setCodfam;

    /**
     * @var string
     *
     * @ORM\Column(name="set_descrizione", type="string", length=50, nullable=true)
     */
    private $setDescrizione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="set_stato", type="boolean", nullable=false)
     */
    private $setStato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="set_dataCreazione", type="datetime", nullable=true)
     */
    private $setDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="set_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $setDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="set_codSettore", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $setCodsettore;


}

