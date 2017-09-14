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
				
				/** @var \Doctrine\ORM\EntityManagerInterface $manager */
				$manager = $this->getContainer()->get('doctrine')->getManager();
				
				/** @var \AppBundle\Repository\ItemRepository $repository */
				$repository = $manager->getRepository(Item::class);
				
				
				$items = $repository->findAllInconsistencies();
				if (!empty($items)) {
						
						$output->writeln(
							'Rimuovo tutti gli item che hanno parametri inconsistenti'
						);
						
						$yesterday = new \DateTime();
						$yesterday->sub(new \DateInterval('P1D'));
						
						/**  @var \AppBundle\Entity\Item $item */
						foreach ($items as $i => $item) {
								$output->writeln('Elimino '.$item->getCodart());
								$item->setFlgdataeliminaz($yesterday->format('d/m/Y'));
								$manager->persist($item);
								$manager->flush();
						}
				}
				
				
				$items = $repository->findBy(['codtipoetic' => '']);
				if (!empty($items)) {
						$output->writeln(
							'Aggiorno tutti gli item che tipo etichetta errata'
						);

            $label = $manager->getRepository(Label::class)->find('001');

						/**  @var \AppBundle\Entity\Item $item */
						foreach ($items as $i => $item) {
								$output->writeln('Aggiorno '.$item->getCodart());
								$item->setCodtipoetic($label);
								$manager->persist($item);
								$manager->flush();
						}
				}
				
				
				$output->writeln('Pulizia finita');
		}
		
}