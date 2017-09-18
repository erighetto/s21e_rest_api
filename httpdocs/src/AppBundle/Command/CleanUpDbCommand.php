<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;


/**
 * Class CleanUpDbCommand
 *
 * @package AppBundle\Command
 */
class CleanUpDbCommand extends ContainerAwareCommand
{
    
    /**
		 * @inheritDoc
		 */
		protected function configure()
		{
				$this
					->setName('app:db:cleanup')
					->setDescription('Clean up DB')
					->setHelp('Rimuove tutti i record inconsistenti');
		}
		
		/**
		 * @inheritDoc
		 */
		protected function execute(InputInterface $input, OutputInterface $output)
		{

        /** @var \Doctrine\ORM\EntityManagerInterface $entityManager */
        $entityManager = $this->getContainer()->get('doctrine')->getManager();
        $connection = $entityManager->getConnection();
		    
        $output->writeln(
          'Rimuovo tutti gli item che hanno parametri inconsistenti'
        );

        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 0');
        $connection->executeQuery("UPDATE tblarticolo SET flgdataeliminaz ='31/12/9999'");
        $connection->executeQuery("UPDATE tblarticolo SET CodTipoEtic = '001' WHERE CodTipoEtic = ''");
        $connection->executeQuery("UPDATE tblarticolo SET CodUmis = 'PZ' WHERE CodUmis in ('', ' ', '1', 'CF', 'FL', 'VS')");
        $connection->executeQuery("UPDATE tblarticolo SET CodUmis = 'LT' WHERE CodUmis = 'L'");
        $connection->executeQuery("UPDATE tblarticolo SET CodUmis = 'GR' WHERE CodUmis = 'G'");
        $connection->executeQuery("UPDATE tblarticolo SET CodUmis = UPPER(CodUmis)");
        
        $yesterday = new \DateTime();
        $yesterday->sub(new \DateInterval('P1D'));
        
        $sql = "UPDATE tblarticolo i SET flgdataeliminaz = '". $yesterday->format('d/m/Y') ."'
    WHERE (i.codumis NOT IN (SELECT DISTINCT u.codumis FROM tblunitamisura u) OR i.codumis = ''
    OR i.codfammerc NOT IN (SELECT DISTINCT c.codrep FROM tblfammerc c) OR i.codfammerc = ''
    OR i.codfornitore NOT IN (SELECT DISTINCT p.codint FROM tblinterlocutori p) OR i.codfornitore = ''
    OR i.codrepecr NOT IN (SELECT DISTINCT d.codrep FROM tblrepartiecr d) OR i.codrepecr = ''
    OR i.flgstatoarticolo NOT IN (SELECT DISTINCT s.codstato FROM tblstatiarticoli s) OR i.flgstatoarticolo = '')";
        
        $connection->executeQuery($sql);
        $connection->executeQuery('SET FOREIGN_KEY_CHECKS = 1');
        
				$output->writeln('Pulizia finita');
		}
		
}