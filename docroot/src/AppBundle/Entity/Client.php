<?php
// src/AppBundle/Entity/Client.php

namespace AppBundle\Entity;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("oauth2_clients")
 * @ORM\Entity
 */
class Client extends BaseClient
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


  public function __construct()
  {
    parent::__construct();
  }

  /**
   * @return array
   */
  public function getRedirectUris(): array {
    return $this->redirectUris;
  }

  /**
   * @param array $redirectUris
   */
  public function setRedirectUris(array $redirectUris) {
    $this->redirectUris = serialize($redirectUris);
  }

  /**
   * @return array
   */
  public function getAllowedGrantTypes(): array {
    return $this->allowedGrantTypes;
  }

  /**
   * @param array $allowedGrantTypes
   */
  public function setAllowedGrantTypes(array $allowedGrantTypes) {
    $this->allowedGrantTypes = serialize($allowedGrantTypes);
  }

}