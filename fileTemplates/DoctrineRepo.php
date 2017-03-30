<?php
namespace App\Infrastructure\Repositories;

use Doctrine\ORM\EntityRepository;
use Ramsey\Uuid\UuidInterface;
use SIC\\${entityNamespace}\\${entityClass};
use SIC\\${entityNamespace}\Repositories\\${entityClass}Repository;
use SIC\Util\PaginationData;

class Doctrine${entityClass}Repository extends EntityRepository implements ${entityClass}Repository
{
    use Paginator;
    /**
     * {@inheritdoc}
     */
    public function set(${entityClass} ${DS}${entityVar})
    {
        ${DS}this->getEntityManager()->persist(${DS}${entityVar});
        ${DS}this->getEntityManager()->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function get(UuidInterface ${DS}id)
    {
        return ${DS}this->find(${DS}id);
    }

    /**
     * {@inheritdoc}
     */
    public function filter(PaginationData ${DS}paginationData, array ${DS}filters = [])
    {
        //ToDo: add filters
        ${DS}builder = ${DS}this->createQueryBuilder('o');
//
        return ${DS}this->paginate(${DS}builder->getQuery(), ${DS}paginationData, false);
    }

}
