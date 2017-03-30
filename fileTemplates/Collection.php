<?php
namespace SIC\\${namespace}\Collections;

use Ramsey\Uuid\UuidInterface;
use SIC\\${namespace}\\${entityClass};
use SIC\\${namespace}\Repositories\\${repoClass};
use SIC\Util\PaginationData;

class ${entityClass}s
{
    /**
     * @var ${repoClass}
     */
    private ${DS}repository;

    public function __construct(${repoClass} ${DS}repository)
    {
        ${DS}this->repository = ${DS}repository;
    }

    /**
     * Saves a ${entityVar}.
     * @param ${entityClass} ${DS}${entityVar}
     */
    public function set(${entityClass} ${DS}${entityVar})
    {
        ${DS}this->repository->set(${DS}${entityVar});
    }

    /**
     * Retrieves a ${entityVar}.
     * @param  UuidInterface             ${DS}id
     * @return ${entityClass}
     * @throws \InvalidArgumentException
     */
    public function get(UuidInterface ${DS}id):${entityClass}
    {
        ${DS}${entityVar} = ${DS}this->repository->get(${DS}id);
        if(${DS}${entityVar})
        {
            return ${DS}${entityVar};
        }
        throw new \InvalidArgumentException('${entityVar}.not_found');
    }

    /**
     * @param  PaginationData             ${DS}paginationData
     * @param  array                      ${DS}filters
     * @return \SIC\Util\EntityPagination
     */
    public function filter(PaginationData ${DS}paginationData, array ${DS}filters = [])
    {
        return ${DS}this->repository->filter(${DS}paginationData, ${DS}filters);
    }

    /**
     * Marks a ${entityVar} as deleted and saves it.
     * @param  UuidInterface             ${DS}id
     * @return ${entityClass}
     * @throws \InvalidArgumentException
     */
    public function remove(UuidInterface ${DS}id):${entityClass}
    {
        ${DS}${entityVar} = ${DS}this->repository->get(${DS}id);
        if(!${DS}${entityVar})
        {
            throw new \InvalidArgumentException('${entityVar}.not_found');
        }
        ${DS}${entityVar}->delete();
        ${DS}this->repository->set(${DS}${entityVar});

        return ${DS}${entityVar};
    }
}
