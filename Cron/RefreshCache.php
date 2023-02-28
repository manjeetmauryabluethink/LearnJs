<?php

namespace Bluethinkinc\LearnJs\Cron;

use Bluethinkinc\LearnsJs\Model\Cache\RemoveFullPageCache;

class RefreshCache
{

 /**
     * @var RemoveFullPageCache
     */
    protected $_removeFullPageCache;

    /**
     * @param RemoveFullPageCache $removeFullPageCache
     */

    public function __construct(RemoveFullPageCache $removeFullPageCache)
    {
        $this->_removeFullPageCache = $removeFullPageCache;
    }
    public function execute()
    {
        $this->_removeFullPageCache->flushCacheRun();
    }

}