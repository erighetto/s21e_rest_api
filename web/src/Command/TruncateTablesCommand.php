<?php

namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class TruncateTablesCommand
 *
 * @package App\Command
 */
class TruncateTablesCommand extends Command
{
    
    /**
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    private $container;
    
    /**
     * TruncateTablesCommand constructor.
     *
     * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }
    
		/**
		 * @inheritDoc
		 */
		protected function configure()
		{
				$this
					->setName('app:db:truncatetables')
					->setDescription('Truncates all table')
					->setHelp("Fa pulizia delle tabelle prima di un nuovo import...");
		}
		
		/**
		 * @inheritDoc
		 */
		protected function execute(InputInterface $input, OutputInterface $output)
		{
				/** @var \Doctrine\ORM\EntityManagerInterface $entityManager */
				$entityManager = $this->container->get('doctrine')->getManager();
				$connection = $entityManager->getConnection();
				$schemaManager = $connection->getSchemaManager();
				
				$connection->executeQuery('SET FOREIGN_KEY_CHECKS = 0');
				$tables = $schemaManager->listTableNames();
				foreach ($tables as $table) {
						$connection->executeQuery($this->getTruncateStatement($table));
				}
				$connection->executeQuery('SET FOREIGN_KEY_CHECKS = 1');
		}
		
		/**
		 * @param $tableName
		 *
		 * @return string
		 */
		protected function getTruncateStatement($tableName)
		{
				return sprintf('TRUNCATE TABLE %s', $tableName);
		}
		
		
}