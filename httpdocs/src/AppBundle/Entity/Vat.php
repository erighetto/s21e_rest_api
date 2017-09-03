<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vat
 *
 * @ORM\Table(name="aliquoteiva")
 * @ORM\Entity
 */
class Vat
{
    /**
     * @var string
     *
     * @ORM\Column(name="aliq_descrizione", type="string", length=100, nullable=true)
     */
    private $aliqDescrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="aliq_valiva", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $aliqValiva;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aliq_dataCreazione", type="datetime", nullable=true)
     */
    private $aliqDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aliq_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $aliqDataultimamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="aliq_codaliqiva", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aliqCodaliqiva;


}

