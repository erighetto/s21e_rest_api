<?php

namespace AppBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ApiKeyUserProvider
 *
 * @package AppBundle\Security
 */
class ApiKeyUserProvider implements UserProviderInterface
{
		
		/**
		 * @var \Symfony\Component\DependencyInjection\ContainerInterface
		 */
		protected $container;
		
		/**
		 * ApiKeyUserProvider constructor.
		 *
		 * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
		 */
		public function __construct(ContainerInterface $container)
		{
				$this->container = $container;
		}
		
		
		/**
		 * @param $apiKey
		 *
		 * @return string
		 */
		public function getUsernameForApiKey($apiKey)
		{
				$api_user = $this->container->getParameter('api_user');
				if (strpos($api_user, $apiKey) === false) {
						$username = null;
				} else {
						$username = str_replace(':'.$apiKey, '', $api_user);
				}
				
				return $username;
		}
		
		/**
		 * @param string $username
		 *
		 * @return \Symfony\Component\Security\Core\User\User
		 */
		public function loadUserByUsername($username)
		{
				return new User(
					$username,
					null,
					['ROLE_API']
				);
		}
		
		/**
		 * @param \Symfony\Component\Security\Core\User\UserInterface $user
		 */
		public function refreshUser(UserInterface $user)
		{
				// this is used for storing authentication in the session
				// but in this example, the token is sent in each request,
				// so authentication can be stateless. Throwing this exception
				// is proper to make things stateless
				throw new UnsupportedUserException();
		}
		
		/**
		 * @param string $class
		 *
		 * @return bool
		 */
		public function supportsClass($class)
		{
				return User::class === $class;
		}
}