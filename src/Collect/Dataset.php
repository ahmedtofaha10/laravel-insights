<?php


namespace AhmedTofaha\LaravelInsights\Collect;


class Dataset
{
    protected $data;
    public function __construct()
    {
//        TODO
    }
    // dataset operations
    // head
    public function head($count = 5)
    {
        return $this->data->take($count);
    }
    // tail
    public function tail($count = 5)
    {
        return $this->data->take(-$count);
    }
    public function get()
    {
        return $this->data;
    }
}
