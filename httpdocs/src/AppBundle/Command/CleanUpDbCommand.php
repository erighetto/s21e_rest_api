<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Entity\Item;

/**
 * Class CleanUpDbCommand
 *
 * @package AppBundle\Command
 */
class CleanUpDbCommand extends ContainerAwareCommand {
	
	/**
	 * @inheritDoc
	 */
	protected function configure() {
		$this
			->setName('app:db:cleanup')
			->setDescription('Clean up DB')
			->setHelp('Rimuove tutti i record inconsistenti');
	}
	
	/**
	 * @inheritDoc
	 */
	protected function execute(InputInterface $input, OutputInterface $output) {
		
		/** @var \Doctrine\ORM\EntityManagerInterface $manager */
		$manager = $this->getContainer()->get('doctrine')->getManager();
		
		/** @var \AppBundle\Repository\ItemRepository $repository */
		$repository = $manager->getRepository(Item::class);
		
		$batchSize = 20;
		$today = new \DateTime();
		$today->sub(new \DateInterval('P1D'));
		
		$output->writeln('Rimuovo tutti gli item che hanno parametri inconsistenti');
		
		$items = $repository->findAllInconsistencies();
		/**  @var \AppBundle\Entity\Item $item */
		foreach ($items as $i => $item) {
			$output->writeln('Elimino ' . $item->getCodart());
			$item->setFlgdataeliminaz($today->format('d/m/Y'));
			$manager->persist($item);
			// flush everything to the database every 20 inserts
			if (($i % $batchSize) == 0) {
				$manager->flush();
				$manager->clear();
			}
		}
		
		$output->writeln('Aggiorno tutti gli item che tipo etichetta errata');
		
		$items = $repository->findBy(['codtipoetic' => '']);
		/**  @var \AppBundle\Entity\Item $item */
		foreach ($items as $i => $item) {
			$output->writeln('Aggiorno ' . $item->getCodart());
			$item->setCodtipoetic('001');
			$manager->persist($item);
			// flush everything to the database every 20 inserts
			if (($i % $batchSize) == 0) {
				$manager->flush();
				$manager->clear();
			}
		}
		
		// flush the remaining objects
		$manager->flush();
		
		$output->writeln('Pulizia finita');
	}
	
}