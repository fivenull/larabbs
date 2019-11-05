<?php

namespace App\Models\Traits;

Trait QueryBuilderBindable
{
    public function resolveRouteBinding()
    {
        $queryClass = property_exists($this, "queryClass")
            ? $this->queryClass
            : '\\App\\Http\\Queries\\'.class_basename(self::class)."Query";

    }
}