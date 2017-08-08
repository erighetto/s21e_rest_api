<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posplugin
 *
 * @ORM\Table(name="posplugin")
 * @ORM\Entity
 */
class Posplugin
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="ppl_stato", type="boolean", nullable=false)
     */
    private $pplStato;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_flgVersion", type="string", length=25, nullable=true)
     */
    private $pplFlgversion;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_descrizione", type="string", length=100, nullable=true)
     */
    private $pplDescrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_pathBase", type="string", length=255, nullable=true)
     */
    private $pplPathbase;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_args", type="string", length=75, nullable=true)
     */
    private $pplArgs;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_beforeExecuteCommand", type="string", length=50, nullable=true)
     */
    private $pplBeforeexecutecommand;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_beforeExecuteCommandArgs", type="string", length=50, nullable=true)
     */
    private $pplBeforeexecutecommandargs;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_afterExecuteCommand", type="string", length=50, nullable=true)
     */
    private $pplAfterexecutecommand;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_afterExecuteCommandArgs", type="string", length=50, nullable=true)
     */
    private $pplAfterexecutecommandargs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppl_dataCreazione", type="datetime", nullable=true)
     */
    private $pplDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ppl_dataUltimaModifica", type="datetime", nullable=true)
     */
    private $pplDataultimamodifica;

    /**
     * @var string
     *
     * @ORM\Column(name="ppl_codPlugin", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pplCodplugin;


}

