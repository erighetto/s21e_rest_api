<?php


namespace AppBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\{
  ORM\Events, Common\Persistence\Event\LoadClassMetadataEventArgs, DBAL\Connection, Bundle\DoctrineBundle\Registry
};

/**
 * Class DynamicConnectionSubscriber
 *
 * @package AppBundle\EventListener
 */
class DynamicConnectionSubscriber implements EventSubscriberInterface {

  /**
   * @var \Doctrine\DBAL\Connection
   */
  private $defaultConnection;

  /**
   * @var \Doctrine\DBAL\Connection
   */
  private $fosConnection;

  /**
   * @var \Doctrine\Bundle\DoctrineBundle\Registry
   */
  private $doctrine;

  /**
   * DynamicConnectionSubscriber constructor.
   *
   * @param \Doctrine\DBAL\Connection $defaultConnection
   * @param \Doctrine\DBAL\Connection $fosConnection
   * @param \Doctrine\Bundle\DoctrineBundle\Registry $doctrine
   */
  public function __construct(Connection $defaultConnection, Connection $fosConnection, Registry $doctrine)
  {
    $this->defaultConnection = $defaultConnection;
    $this->fosConnection = $fosConnection;
    $this->doctrine = $doctrine;
  }

  /**
   * @inheritDoc
   */
  public static function getSubscribedEvents() {
    return array(
      Events::loadClassMetadata,
    );
  }

  /**
   * @param LoadClassMetadataEventArgs $eventArgs
   */
  public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs)
  {
    // the $metadata is the whole mapping info for this class
    $metadata = $eventArgs->getClassMetadata();

    if (!in_array($metadata->getName(), [
        'AppBundle\Entity\PosCustomer',
        'AppBundle\Entity\PosItem'
      ])) {

      $this->doctrine->getManager()->flush();
      if ($this->defaultConnection->isConnected()) {
        $this->defaultConnection->close();
      }

      $reflectionConn     = new \ReflectionObject($this->fosConnection);
      $reflectionParams   = $reflectionConn->getProperty('_params');
      $reflectionParams->setAccessible(true);
      $params             = $reflectionParams->getValue($this->fosConnection);
      $reflectionParams->setValue($this->fosConnection, $params);
      $reflectionParams->setAccessible(false);

      $this->doctrine->resetManager('default');
    }

  }

}