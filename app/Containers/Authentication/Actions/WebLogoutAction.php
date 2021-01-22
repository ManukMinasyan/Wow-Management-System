<?php

namespace App\Containers\Authentication\Actions;

use App\Ship\Parents\Actions\Action;
use Illuminate\Support\Facades\Auth;

/**
 * Class WebLogoutAction.
 *

 */
class WebLogoutAction extends Action
{

    /**
     * @return void
     */
    public function run(): void
    {
        Auth::logout();
    }
}
