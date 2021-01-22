<?php

namespace App\Containers\Authorization\Tasks;

use App\Containers\Authorization\Data\Repositories\PermissionRepository;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllPermissionsTask.
 *

 */
class GetAllPermissionsTask extends Task
{

    /**
     * @var PermissionRepository
     */
    protected $repository;

    /**
     * GetAllPermissionsTask constructor.
     *
     * @param PermissionRepository $repository
     */
    public function __construct(PermissionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param bool $skipPagination
     *
     * @return  mixed
     */
    public function run($skipPagination = false)
    {
        return $skipPagination ? $this->repository->all() : $this->repository->paginate();
    }

}
