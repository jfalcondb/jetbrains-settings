<?php
namespace SIC\\${namespace}\Repositories;

use Ramsey\Uuid\UuidInterface;
use SIC\Util\EntityPagination;
use SIC\Util\PaginationData;

interface ${class}Repository
{
    /**
     * Saves a ${class}.
     * @param ${class} ${DS}${var}
     */
    public function set(${class} ${DS}${var});

    /**
     * Retrieves a ${class}.
     * @param  UuidInterface ${DS}id
     * @return ${class}
     * @throws \InvalidArgumentException
     */
    public function get(UuidInterface ${DS}id);

    /**
     * @param  PaginationData   ${DS}paginationData
     * @param  array                      ${DS}filters
     * @return EntityPagination
     */
    public function filter(PaginationData ${DS}paginationData, array ${DS}filters = []);
}
