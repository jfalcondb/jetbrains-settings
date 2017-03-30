<?php
namespace App\Infrastructure\Seeders;

use App\Infrastructure\EntityFakers\Fake;
use SIC\\${entityNamespace}\\${entityClass};

class ${entityClass}Seeder extends DoctrineSeeder
{
    public function run()
    {
        ${DS}this->make(15);
    }

    /**
     * @param  int      ${DS}count
     * @return ${entityClass}[]
     */
    public function make(int ${DS}count)
    {
        ${DS}${entityVar}s = [];
        foreach(range(1, ${DS}count) as ${DS}i)
        {
            /** @var ${entityClass} ${DS}${entityVar} */
            ${DS}${entityVar} = Fake::of(${entityClass}::class);
            ${DS}this->entityManager->persist(${DS}${entityVar});
            ${DS}${entityVar}s[] = ${DS}${entityVar};
        }
        ${DS}this->entityManager->flush();

        return ${DS}${entityVar}s;
    }
}
