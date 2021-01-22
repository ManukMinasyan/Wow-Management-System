<?php

namespace App\Containers\Payment\Tasks;

use App\Containers\Payment\Data\Repositories\PaymentAccountRepository;
use App\Containers\Payment\Models\PaymentAccount;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindPaymentAccountByIdTask
 *
 *
 */
class FindPaymentAccountByIdTask extends Task
{

    protected $repository;

    public function __construct(PaymentAccountRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     *
     * @return  mixed
     * @throws  NotFoundException
     */
    public function run($id): PaymentAccount
    {
        try {
            $paymentAccount = $this->repository->find($id);
        } catch (Exception $exception) {
            throw new NotFoundException();
        }

        return $paymentAccount;
    }
}
