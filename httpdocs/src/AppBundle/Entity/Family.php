<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Family
 *
 * @ORM\Table(name="famiglie")
 * @ORM\Entity
 */
class Family
{
    /**
     * @var string
     *
     * @ORM\Column(name="fam_codrep", type="string", length=20, nullable=true)
     */
    private $famCodrep;

    /**
     * @var string
     *
     * @ORM\Column(name="fam_descrizione", type="string", length=50, nullable=true)
     */
    private $famDescrizione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fam_stato", type="boolean", nullable=false)
     */
    private $famStato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fam_dataCreazione", type="datetime", nullable=true)
     */
    private $famDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fam_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $famDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="fam_codfam", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $famCodfam;


}

