<?php


namespace AhmedTofaha\LaravelInsights\Collect;


use AhmedTofaha\LaravelInsights\Collect\Interfaces\DatasetInterface;

class CollectionDataset extends Dataset implements DatasetInterface
{

    public function from($data)
    {
        $this->data = $data;
        return $this;
    }

}
