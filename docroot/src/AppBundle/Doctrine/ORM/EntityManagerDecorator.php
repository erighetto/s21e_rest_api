<?php

namespace AppBundle\Doctrine\ORM;

use Doctrine\ORM\Decorator\EntityManagerDecorator as BaseEntityManagerDecorator;
use Doctrine\Common\EventManager;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManagerInterface;

class EntityManagerDecorator extends BaseEntityManagerDecorator {

  /**
   * @var EntityManagerInterface
   */
  protected $wrapped;

  /**
   * @param EntityManagerInterface $wrapped
   */
  public function __construct(EntityManagerInterface $wrapped)
  {
    parent::__construct($wrapped);
    $this->wrapped = $wrapped;
  }

  public function create($conn, Configuration $config, EventManager $eventManager = null)
  {
    return new self(\Doctrine\ORM\EntityManager::create($conn, $config, $eventManager));
  }
}