<?php
namespace Bluethinkinc\LearnJs\Observer;

class SalesOrderPbserver implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $user = $observer->getEvent()->getOrder();
        $myArray = $user->getData();

		$writer = new \Zend_Log_Writer_Stream(BP . '/var/log/sales_order.log');
		$logger = new \Zend_Log();
		$logger->addWriter($writer);
		$logger->info(print_r($myArray, true));

        return $this;
    }
}