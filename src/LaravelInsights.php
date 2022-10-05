<?php

namespace AhmedTofaha\LaravelInsights;

use AhmedTofaha\LaravelInsights\Collect\Dataset;

class LaravelInsights
{
    protected $dataset;
    public function __construct(Dataset $dataset)
    {
        $this->dataset = $dataset;
    }
}
