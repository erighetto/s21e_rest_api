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
     * @var \Doctrine\DBAL\Connection
     */
    protected $connection;
		
    public function __construct($name = null)
    {
        /** @var \Doctrine\ORM\EntityManagerInterface $manager */
        $manger = $this->getContainer()->get('doctrine')->getManager();
        $this->connection = $manger->getConnection();
        parent::__construct($name);
    }
    
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
        
        $output->writeln(
          'Rimuovo tutti gli item che hanno parametri inconsistenti'
        );
        
        $this->connection->exec("UPDATE tblarticolo SET flgdataeliminaz ='31/12/9999'");
        $this->connection->exec("UPDATE tblarticolo SET CodTipoEtic = '001' WHERE CodTipoEtic = ''");
        $this->connection->exec("UPDATE tblarticolo SET CodUmis = 'PZ' WHERE CodUmis in ('', ' ', '1', 'CF')");
        $this->connection->exec("UPDATE tblarticolo SET CodUmis = 'LT' WHERE CodUmis = 'L'");
        $this->connection->exec("UPDATE tblarticolo SET CodUmis = 'GR' WHERE CodUmis = 'G'");
        
        $yesterday = new \DateTime();
        $yesterday->sub(new \DateInterval('P1D'));
        
        $sql = "UPDATE tblarticolo i SET flgdataeliminaz = '". $yesterday->format('d/m/Y') ."'
    WHERE (i.codumis NOT IN (SELECT u.codumis FROM tblunitamisura u) OR i.codumis = ''
    OR i.codfammerc NOT IN (SELECT c.codrep FROM tblfammerc c) OR i.codfammerc = ''
    OR i.codfornitore NOT IN (SELECT p.codint FROM tblinterlocutori p) OR i.codfornitore = ''
    OR i.codrepecr NOT IN (SELECT d.codrep FROM tblrepartiecr d) OR i.codrepecr = ''
    OR i.flgstatoarticolo NOT IN (SELECT s.codstato FROM tblstatiarticoli s) OR i.flgstatoarticolo = '')";
        
        $manager->getConnection()->exec($sql);
        
				$output->writeln('Pulizia finita');
		}
		
}