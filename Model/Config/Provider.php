<?php

declare(strict_types=1);

namespace Bluethinkinc\LearnJs\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Provider to fetch config value
 */
class Provider
{
    public const XML_PATH_SHARING_FILTER = 'general/sharing_controls/enabled';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * Provider Constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
    }

    /**
     * Get store value from configuration
     *
     * @param string $configPath
     * @return int
     * @throws NoSuchEntityException
     */
    public function getSharingControls()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_SHARING_FILTER,
            ScopeInterface::SCOPE_STORE
        );
    }
}
