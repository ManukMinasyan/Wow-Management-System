<?php

namespace App\Containers\Welcome\Actions;

use App\Ship\Parents\Actions\Action;

/**
 * Class WelcomeApiRootVisitorAction.
 *

 */
class FindMessageForApiRootVisitorAction extends Action
{

    /**
     * @return  array
     */
    public function run()
    {
        return [trans('localization::messages.welcome')];
    }
}
