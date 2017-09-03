<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cluster
 *
 * @ORM\Table(name="cluster")
 * @ORM\Entity
 */
class Cluster
{
    /**
     * @var string
     *
     * @ORM\Column(name="clu_descrizione", type="string", length=30, nullable=true)
     */
    private $cluDescrizione;

    /**
     * @var boolean
     *
     * @ORM\Column(name="clu_flgincludicluster", type="boolean", nullable=true)
     */
    private $cluFlgincludicluster;

    /**
     * @var integer
     *
     * @ORM\Column(name="clu_clusteriniziale", type="integer", nullable=true)
     */
    private $cluClusteriniziale;

    /**
     * @var integer
     *
     * @ORM\Column(name="clu_clusterfinale", type="integer", nullable=true)
     */
    private $cluClusterfinale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clu_datacreazione", type="datetime", nullable=true)
     */
    private $cluDatacreazione;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="clu_dataultimamodifica", type="datetime", nullable=true)
     */
    private $cluDataultimamodifica;

    /**
     * @var integer
     *
     * @ORM\Column(name="clu_idCluster", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cluIdcluster;


}

