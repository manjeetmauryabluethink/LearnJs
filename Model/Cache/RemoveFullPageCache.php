<?php
namespace Bluethinkinc\LearnsJs\Model\Cache;

class RemoveFullPageCache
{
    /**
     * @var TypeListInterface
     */
    protected $cacheTypeList;

    /**
     * @var Pool
     */
    protected $cacheFrontendPool;

    public function __construct(
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
    ) {
        $this->_cacheTypeList = $cacheTypeList;
        $this->_cacheFrontendPool = $cacheFrontendPool;
    }

    public function flushCacheRun()
    {
        $types = [
            "config",
            "layout",
            "block_html",
            '
            collections',
            '
            reflection',
            "db_ddl",
            "eav",
            "config_integration",
            "config_integration_api",
            '
            full_page',
            "translate",
            "config_webservice",
        ];
        foreach ($types as $type) {
            $this->_cacheTypeList->cleanType($type);
        }
        foreach ($this->_cacheFrontendPool as $cacheFrontend) {
            $cacheFrontend->getBackend()->clean();
        }
    }
}
