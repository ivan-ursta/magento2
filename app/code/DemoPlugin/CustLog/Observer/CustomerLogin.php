<?php

namespace DemoPlugin\CustLog\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{
    private $logger;
    public function __construct(){
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }

    public function execute(Observer $observer){
        $customer = $observer->getData('customer');
        $this->logger->debug( 'admin dasdsadasdasdasdadasdsfafafa');
    }
}
