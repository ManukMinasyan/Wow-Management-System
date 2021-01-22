<?php

namespace App\Containers\Authorization\Actions;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Actions\Action;

/**
 * Class GetAllPermissionsAction.
 *

 */
class GetAllPermissionsAction extends Action
{

    /**
     * @return  mixed
     */
    public function run()
    {
        $permissions = Apiato::call('Authorization@GetAllPermissionsTask', [], ['addRequestCriteria']);

        return $permissions;
    }

}
