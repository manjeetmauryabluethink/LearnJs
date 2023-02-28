<?php declare(strict_types=1);

/**
 * @author  Rakesh Jesadiya
 */

namespace Bluethinkinc\LearnJs\Plugin;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\OrderManagementInterface;

/**
 * Class OrderManagement
 */
class OrderManagement
{
    /**
     * @param OrderManagementInterface $subject
     * @param OrderInterface           $order
     *
     * @return OrderInterface[]
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforePlace(
        OrderManagementInterface $subject,
        OrderInterface $order
    ): array {
        $quoteId = $order->getQuoteId();
        if ($quoteId) {
        }
        return [$order];
    }
}