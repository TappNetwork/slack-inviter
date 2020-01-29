<?php

namespace Tapp\SlackInviter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tapp\SlackInviter\Skeleton\SkeletonClass
 */
class SlackInviterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slack-inviter';
    }
}
