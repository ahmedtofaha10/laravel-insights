<?php


namespace AhmedTofaha\LaravelInsights\Collect;


use AhmedTofaha\LaravelInsights\Collect\Interfaces\DatasetInterface;
use Illuminate\Database\Eloquent\Model;

class ModelDataset extends Dataset implements DatasetInterface
{

    public function from($model)
    {
        $this->data = $model->all();
        return $this;
    }

}
