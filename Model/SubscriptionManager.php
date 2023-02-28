<?php 

namespace Bluethinkinc\LearnJs\Model;

        
class SubscriptionManager
{

   public function aroundSubscribe(\Magento\Newsletter\Model\SubscriptionManager $subject,callable $proceed,string $email, int $storeId)
    {
            $email = "custom97@gmail.com";
            $result = $proceed($email,$storeId);
             return $result;
           
        }

}