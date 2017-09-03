<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="clianag")
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="cli_codclipadre", type="string", length=50, nullable=true)
     */
    private $cliCodclipadre;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_descrizione", type="string", length=250, nullable=false)
     */
    private $cliDescrizione = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="cli_stato", type="boolean", nullable=false)
     */
    private $cliStato;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_indirizzo", type="string", length=50, nullable=true)
     */
    private $cliIndirizzo;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_civico", type="string", length=10, nullable=true)
     */
    private $cliCivico;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_cap", type="string", length=5, nullable=true)
     */
    private $cliCap;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_provincia", type="string", length=2, nullable=true)
     */
    private $cliProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_localita", type="string", length=50, nullable=true)
     */
    private $cliLocalita;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_piva", type="string", length=11, nullable=true)
     */
    private $cliPiva;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_codfisc", type="string", length=16, nullable=true)
     */
    private $cliCodfisc;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_fasciaPrezzo", type="integer", nullable=false)
     */
    private $cliFasciaprezzo = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_datascadenza", type="datetime", nullable=true)
     */
    private $cliDatascadenza;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_datacreazione", type="datetime", nullable=true)
     */
    private $cliDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_dataultimamodifica", type="datetime", nullable=true)
     */
    private $cliDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_codcli", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cliCodcli;


}

