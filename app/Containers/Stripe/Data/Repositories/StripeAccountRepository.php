<?php

namespace App\Containers\Stripe\Data\Repositories;

use App\Containers\Stripe\Models\StripeAccount;
use App\Ship\Parents\Repositories\Repository;

/**
 * Class StripeAccountRepository.
 *

 */
class StripeAccountRepository extends Repository
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return StripeAccount::class;
    }
}
