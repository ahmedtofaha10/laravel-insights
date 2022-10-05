<?php
it('using a collection methods', function () {
    $ds = \AhmedTofaha\LaravelInsights\Collect\ArrayDataset::make([
        ['name' => 'Ahmed', 'age' => 30],
        ['name' => 'Ali', 'age' => 25],
        ['name' => 'Mohamed', 'age' => 20],
    ]);
    expect($ds->head(2)->toArray())->toBe([
        ['name' => 'Ahmed', 'age' => 30],
        ['name' => 'Ali', 'age' => 25],
    ]);
    expect($ds->get()->last())->toBe(
        ['name' => 'Mohamed', 'age' => 20],
    );
    expect($ds->get()->max('age'))->toBe(30);
});
it('can be overwritten',function (){
    $ds = \AhmedTofaha\LaravelInsights\Collect\ArrayDataset::make([
        ['name' => 'Ahmed', 'age' => 30],
        ['name' => 'Ali', 'age' => 25],
        ['name' => 'Mohamed', 'age' => 20],
    ]);
    $ds->from([1,2,3]);
    expect($ds->get()->toArray())->toBe([1,2,3]);
});
test('array values',function (){
    $ds = \AhmedTofaha\LaravelInsights\Collect\ArrayDataset::make([
        ['name' => 'Ahmed', 'age' => 30,'country' => 'Eg'],
        ['name' => 'Ali', 'age' => 25,'country' => 'Sa'],
        ['name' => 'Mohamed', 'age' => 20,'country' => 'Ph'],
    ]);
    expect($ds->array_values('name'))->toBe([
        'Ahmed',
        'Ali',
        'Mohamed',
    ]);
});
