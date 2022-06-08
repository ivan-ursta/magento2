<?php

namespace DemoPlugin\CustLog\Plugin;

class Session
{
    private $logger;
    public function __construct() {
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }

    public function afterLogout(\Magento\Customer\Model\Session $subject, $result){
        $this->logger->debug('DemoPlugin-CustLog-after');
        return $result;
    }
}
