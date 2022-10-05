<?php


namespace AhmedTofaha\LaravelInsights\Collect;


use AhmedTofaha\LaravelInsights\Collect\Interfaces\DatasetInterface;
use Illuminate\Database\Eloquent\Model;

class ArrayDataset extends Dataset implements DatasetInterface
{

    public function from($data)
    {
        $this->data = collect($data);
        return $this;
    }

}
