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

  /**
   * @ORM\Column(name="random_id",  type="string", length=255)
   */
  protected $randomId;

  /**
   * @ORM\Column(name="secret",  type="string", length=255)
   */
  protected $secret;

  /**
   * @ORM\Column(name="redirect_uris",  type="string", length=4294967295)
   */
  protected $redirectUris = array();

  /**
   * @ORM\Column(name="allowed_grant_types",  type="string", length=4294967295)
   */
  protected $allowedGrantTypes = array();

  public function __construct()
  {
    parent::__construct();
  }

  public function getId() {
    return parent::getId(); 
  }

  /**
   * @inheritDoc
   */
  public function setRandomId($random) {
    parent::setRandomId($random); 
  }

  /**
   * @inheritDoc
   */
  public function getRandomId() {
    return parent::getRandomId(); 
  }

  /**
   * @inheritDoc
   */
  public function getPublicId() {
    return parent::getPublicId(); 
  }

  /**
   * @inheritDoc
   */
  public function setSecret($secret) {
    parent::setSecret($secret); 
  }

  /**
   * @inheritDoc
   */
  public function getSecret() {
    return parent::getSecret(); 
  }

  /**
   * @inheritDoc
   */
  public function checkSecret($secret) {
    return parent::checkSecret($secret); 
  }

  /**
   * @inheritDoc
   */
  public function setRedirectUris(array $redirectUris) {
    parent::setRedirectUris($redirectUris); 
  }

  /**
   * @inheritDoc
   */
  public function getRedirectUris() {
    return parent::getRedirectUris(); 
  }

  /**
   * @inheritDoc
   */
  public function setAllowedGrantTypes(array $grantTypes) {
    parent::setAllowedGrantTypes($grantTypes); 
  }

  /**
   * @inheritDoc
   */
  public function getAllowedGrantTypes() {
    return parent::getAllowedGrantTypes(); 
  }
}