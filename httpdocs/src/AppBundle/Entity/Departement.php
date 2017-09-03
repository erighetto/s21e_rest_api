<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="reparti")
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var string
     *
     * @ORM\Column(name="rep_descrizione", type="string", length=50, nullable=true)
     */
    private $repDescrizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="rep_codaliqiva", type="integer", nullable=true)
     */
    private $repCodaliqiva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rep_stato", type="boolean", nullable=false)
     */
    private $repStato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rep_dataCreazione", type="datetime", nullable=true)
     */
    private $repDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rep_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $repDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="rep_codrep", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $repCodrep;


}

