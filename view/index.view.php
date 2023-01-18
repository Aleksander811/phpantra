<?php
/* 
$a = 10.56897;
$x = $a + 11;
$x = $a - 11;
$x = $a * 11;
$x = $a / 11;
$x = $a % 11;

echo round($a, 2) . "<br>"; //apvalinimas
echo ceil($a) . "<br>"; //apvalinimas iki didesnio sveiko skaiciaus
echo floor($a); //apvalinimas iki mazesnio sveiko skaiciaus

echo rand(); //sugeneruoja dideli atsitiktini skaiciu
echo rand(2, 8); // jei norime uzdeti reziu nuo kokio iki kokio skaiciaus sugeneruoti, pvaz nuo 2 iki 8

$a -= 3; // cia tas pats, kaip $a = $a -3

echo $a + "10 obuoliu";

echo is_float($a);

echo ++$a;

// indeksuotasis masyvas

$users = ['Ieva', 'Tomas', 'Antanas'];


$users = [
    100 => 'Ieva',
    897 => 'Tomas',
    7 => 'Antanas'
];

var_dump($users);

//Asociative array

$users = [
    'name-1' => 'Ieva',
    'name-1' => 'Tomas',
    'name-1' => 'Antanas'
];

foreach ($users as $key => $user) {
    echo "$key : $user <br>";
};

$catalog = [
    'kompai' => [
        'komp1' => "Lenovo",
        'komp2' => "Apple",
        'komp3' => "Dell"
    ],
    'telefonai' => [
        'tel1' => "Samsung",
        'tel2' => "Iphone",
        'tel3' => "Xiaomi",
        'tel4' => "Nokia",
        'tel5' => "ABCDE"
    ]
];


foreach ($catalog as $category => $value) {
    echo "$category <br>";
    foreach ($value as $key2 => $item) {
        echo "$key2 : $item <br>";
    }
};

?>;

<ul>
    <?php foreach ($catalog as $category => $data) : ?>
        <li>
            <?= ucfirst($category); ?> // ucfirst pakeicia p[irmasias raide didziosiomis
            <ul>
                <?php foreach ($data as $item) : ?>
                    <li><?= ($item); ?></li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>

<?php


?>

<pre>
        <?php var_dump($mokiniai); ?>
</pre>

*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h2>Studentai</h2>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Klase</th>
            <th>Kodas</th>
            <th>Vardas</th>
            <th>Pavarde</th>
            <th>Duomenu formavimo data</th>
            <th>Vidurkis</th>
        </tr>
        <?php foreach ($students as $studentsClass => $student) : ?>
            <tr>
                <td><?= $studentsClass; ?></td>
            </tr>
            <?php foreach ($student as $key => $value) : ?>
                <tr>
                    <td></td>
                    <td><?= $key; ?></td>
                    <?php foreach ($value as $studentKey => $property) : ?>
                        <?php if ($studentKey === "grades") : ?>
                            <?php $average = array_sum($property) / count($property); ?>
                            <td><?= round($average, 2); ?></td>
                        <?php else : ?>
                            <td><?= ucfirst($property) ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>


    </table>

</body>

</html>