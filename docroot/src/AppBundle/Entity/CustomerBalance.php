<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerBalance
 *
 * @ORM\Table(name="clidatisaldo", indexes={@ORM\Index(name="FK_campagna_clidatisaldo", columns={"cli_codCampagna"})})
 * @ORM\Entity
 */
class CustomerBalance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cli_saldoPunti", type="integer", nullable=true)
     */
    private $cliSaldopunti;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_totaleVendite", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cliTotalevendite;

    /**
     * @var string
     *
     * @ORM\Column(name="cli_totaleVenditePromo", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cliTotalevenditepromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_numeroVisite", type="integer", nullable=true)
     */
    private $cliNumerovisite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cli_saldoInElaborazione", type="boolean", nullable=false)
     */
    private $cliSaldoinelaborazione = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_dataCreazione", type="datetime", nullable=true)
     */
    private $cliDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cli_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $cliDataultimamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="cli_codSaldo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cliCodsaldo;

    /**
     * @var \AppBundle\Entity\Promo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Promo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cli_codCampagna", referencedColumnName="cmp_codCampagna")
     * })
     */
    private $cliCodcampagna;


}

