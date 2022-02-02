<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HomepageContentResourceCollection extends ResourceCollection
{
    protected $take;

    public function setTake($take)
    {
        $this->take = $take;
        return $this;
    }

    public function toArray($request)
    {
        return $this->collection->map(function (HomepageContentResource $resource) use ($request) {
            return $resource->setTake($this->take)->toArray($request);
        })->all();

        // or use HigherOrderCollectionProxy
        // return $this->collection->each->foo($this->foo)->map->toArray($request)->all()

        // or simple
        // $this->collection->each->foo($this->foo);
        // return parent::toArray($request);
    }
}
