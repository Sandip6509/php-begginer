<?php
    $states = [
        'Gujarat' => 'Gandhinagar',
        'Goa' => 'Panji',
        'Madhya Pradesh' => 'Bhopal',
        'Sikkim'=>'Gangtok',
        'Himachal Pradesh' => 'Simla',
        'Harayana' => 'Chandigarh',
        'Utter Pradesh' =>'Lucknow',
        'Bihar'=> 'Patna',
    ];
    
    foreach ($states as $key => $value) {
        echo "The Capital of ".$key." is ".$value."<br>";
    }
?>