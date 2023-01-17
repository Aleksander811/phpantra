<?php

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
$mokiniai = [
    '5a' => [
        rand(100,3000) => [
            'vardas' => "aiste",
            'pavarde' => "aistaite",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "benas",
            'pavarde' => "benaitis",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "ona",
            'pavarde' => "onaite",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "donatas",
            'pavarde' => "kietaitis",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "james",
            'pavarde' => "bond",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "kietas",
            'pavarde' => "bicas",
            'duomenu formavimo data' => date('Y-m-d')
        ],
    ],
    '5b' => [
        rand(100,3000) => [
            'vardas' => "beatrice",
            'pavarde' => "povilaityte",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "jonas",
            'pavarde' => "jonaitis",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "simas",
            'pavarde' => "simaitis",
            'duomenu formavimo data' => date('Y-m-d')
        ],
        rand(100,3000) => [
            'vardas' => "emilija",
            'pavarde' => "petraityte",
            'duomenu formavimo data' => date('Y-m-d')
        ]
    ]
];

?>

<pre>
        <?php var_dump($mokiniai); ?>
</pre>



<table>
    <tr>
       <th>
        <?php foreach ($mokiniai as $klase => $value) {
         echo ($klase);
       };
            foreach ($value as $mokinys) {
                echo ($mokinys)
            }
        ?>; 
        </th>
    </tr>

</table>






