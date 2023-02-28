<?php 

namespace Bluethinkinc\LearnJs\ViewModel;

use Bluethinkinc\LearnJs\Model\Config\Provider;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class SharingControls implements ArgumentInterface
{
     /**
     * @var Provider
     */
    protected  $_provider;

    /**
     * Provider Constructor
     *
     * @param Provider $provider
     */
    public function __construct(
        Provider $provider
    ) {
        $this->_provider = $provider;
    }

    public function isEnabled()
    {
       return $this->_provider->getSharingControls();
    }
}