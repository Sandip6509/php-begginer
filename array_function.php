<?php
    $cars =[
        'Bentley',
        'Volvo',
        'Cadillac',
        'Maserati',
        'Lincoln',
        'Audi'
    ];

    echo "<pre>";
    echo "===============Count================";
    print_r($cars);
    echo "<br>";
    print_r(count($cars));
    echo "<br>";
    print_r(sizeof($cars));
    echo "<hr>";
    // $str = "Meet Shah";
    // print_r(count($str));
    echo "===============Implode================";
    echo "<br>";
    print_r(implode(',',$cars));
    echo "<br>";
    echo "===============Explode================";
    echo "<br>";
    $cars_str = implode(',', $cars);
    print_r(explode(',',$cars_str));
    echo "<br>";
    echo "===============Range================<br>";
    print_r(range(1,10));
    print_r(range('a','m'));
    echo "<br>";
    echo "===============array_slice================<br>";
    print_r(array_splice($cars,3));
    echo "===============array_chunk================<br>";
    print_r(array_chunk($cars,5));
    echo "===============array_merge================<br>";
    $product = ['Toyata','XC90','CTS','Navigator','A8'];
    print_r($product);
    print_r($cars);
    print_r(array_merge($product,$cars));
    echo "===============array_combine================<br>";
    $produ = ['Toyata','XC90','CTS','Navigator','A8'];
    $car =[
        'Bentley',
        'Volvo',
        'Cadillac',
        'Maserati',
        'Lincoln',
    ];
    echo "<pre>";
    print_r(array_combine($car,$produ));
    echo "===============array_pop================<br>";
    $car =[
        'Bentley',
        'Volvo',
        'Cadillac',
        'Maserati',
        'Lincoln',
    ];
    print_r(array_pop($car));
    print_r($car);
    echo "===============array_key_exists================<br>";
    $values =[
        "Sandeep"=> "Patel",
        "kajal" => "Rai",
        "Shubham"=> "Gupta",
        "Deval" => "Tets"
    ];
    print_r($values);
    print_r(array_key_exists('kajal',$values));
    echo "===============array_search================<br>";
    print_r(array_search('Gupta',$values));
?>