<?php

namespace DemoPlugin\CustLog\Plugin;


class Product
{

    private $logger;
    public function __construct() {
        $this->logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
    }

    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        $this->logger->debug('VNCOSY-SN-before');
        $name = $name.'>>Hello';
        return $name;
    }

    public function aroundSetName(\Magento\Catalog\Model\Product $subject, \Closure $proceed, ...$args) {
        $this->logger->debug('VNCOSY-SN-around-begin');
        $returnValue = $proceed(...$args);
        $this->logger->debug('VNCOSY-SN-around-end');
        return $returnValue;
    }

    public function afterSetName(\Magento\Catalog\Model\Product $subject, $result) {
        $this->logger->debug('VNCOSY-SN-after');
        return $result;
    }
}
