<?php
$dumb_data = [
    'Ahmed',
    'Tofaha',
    'Laravel',
    'Insights',
    'Package',
];
$ds = new \AhmedTofaha\LaravelInsights\Collect\ArrayDataset();
$ds->from($dumb_data);
$insight = new \AhmedTofaha\LaravelInsights\LaravelInsights($ds);
