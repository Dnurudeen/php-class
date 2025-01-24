<?php
// Indexed Array
$motorBrand = array('BMW', 'Ferarri', 'Toyota', 'Tesla Truck', 'Benz');
$motorBrand[] = 'Honda';
$motorBrand[] = 'Lexus';
//$motorBrand[6] = 'Lexus';
foreach($motorBrand as $mb){
    echo $mb . '<br>';
}
echo "<br><br><br>";


// Associative Array
$car_one = array(
    'brand' => 'BMW',
    'model' => 'GMX983',
    'engine' => 'V8',
    'year' => '2024',
    'color' => 'Red & White'
);
//echo $car_one['brand'] . '<br>' . $car_one['model'];
foreach($car_one as $car1){
    echo $car1 . '<br>';
}
echo "<br><br><br>";


// Multidimentional Array
$cars = array(
    array("BMX", 12, 11),
    array('Benz', 9, 15),
    array('Ferarri', 15, 2),
    array('Toyota', 17, 3)
);

echo $cars [0][0] . ': In stock: ' . $cars[0][1] . ', Sold: ' . $cars[0][2] . '.<br>';
echo $cars [1][0] . ': In stock: ' . $cars[1][1] . ', Sold: ' . $cars[1][2] . '.<br>';
echo $cars [2][0] . ': In stock: ' . $cars[2][1] . ', Sold: ' . $cars[2][2] . '.<br>';
echo $cars [3][0] . ': In stock: ' . $cars[3][1] . ', Sold: ' . $cars[3][2] . '.<br>';