<?php
namespace App\Infrastructure\Mappings;

use LaravelDoctrine\Fluent\EmbeddableMapping;
use LaravelDoctrine\Fluent\Fluent;
use SIC\\${entityNamespace}\Immutables\\${entityClass};

class ${entityClass}Mapping extends EmbeddableMapping
{
    /**
     * Returns the fully qualified name of the class that this mapper maps.
     *
     * @return string
     */
    public function mapFor()
    {
        return ${entityClass}::class;
    }

    /**
     * Load the object's metadata through the Metadata Builder object.
     *
     * @param Fluent ${DS}builder
     */
    public function map(Fluent ${DS}builder)
    {
        ${DS}builder->string('name');
    }
}
