<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Measureunit
 *
 * @ORM\Table(name="umis")
 * @ORM\Entity
 */
class Measureunit
{
    /**
     * @var string
     *
     * @ORM\Column(name="um_descrizione", type="string", length=20, nullable=true)
     */
    private $umDescrizione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="um_stato", type="boolean", nullable=false)
     */
    private $umStato;

    /**
     * @var string
     *
     * @ORM\Column(name="um_umisBase", type="string", length=20, nullable=true)
     */
    private $umUmisbase;

    /**
     * @var string
     *
     * @ORM\Column(name="um_fattoreMoltiplicazione", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $umFattoremoltiplicazione = '1.000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="um_dataCreazione", type="datetime", nullable=true)
     */
    private $umDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="um_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $umDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="um_codUm", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $umCodum;


}

