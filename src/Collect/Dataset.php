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
        return $this->data->slice(-$count);
    }
    public function get()
    {
        return $this->data;
    }
    public static function make($data)
    {
        return (new static())->from($data);
    }
    // array values
    public function array_values($var)
    {
        return $this->get()->pluck($var)->toArray();
    }
}
