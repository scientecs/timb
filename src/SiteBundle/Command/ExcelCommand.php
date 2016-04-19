<?php

namespace SiteBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * ExcelCommand
 *
 * @author scientecs
 */
class ExcelCommand extends ContainerAwareCommand
{

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('scientecs:excel:parse')
                ->setDescription('Excel parce to database');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $rootDir = $this->getApplication()->getKernel()->getRootDir();
        
        $phpExcelObject = $this->getContainer()->get('phpexcel')->createPHPExcelObject('' . $rootDir . '/../src/SiteBundle/Resources/public/excel/excel.xls');
        $output->writeln($phpExcelObject->getCellXfByIndex("name")->getValue());
    }

}
