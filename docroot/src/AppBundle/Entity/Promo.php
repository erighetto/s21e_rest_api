<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="campagnepromozionali")
 * @ORM\Entity
 */
class Promo
{
    /**
     * @var string
     *
     * @ORM\Column(name="cmp_descrizione", type="string", length=50, nullable=true)
     */
    private $cmpDescrizione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cmp_stato", type="boolean", nullable=false)
     */
    private $cmpStato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmp_dataInizio", type="datetime", nullable=true)
     */
    private $cmpDatainizio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmp_dataFine", type="datetime", nullable=true)
     */
    private $cmpDatafine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmp_dataFineRitiroPremi", type="datetime", nullable=true)
     */
    private $cmpDatafineritiropremi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmp_dataCreazione", type="datetime", nullable=true)
     */
    private $cmpDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cmp_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $cmpDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="cmp_codCampagna", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cmpCodcampagna;


}

