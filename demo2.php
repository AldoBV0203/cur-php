<?php
    $name = "Miguel";
    $isDev = true;
    $age = 18;


    define('LOGO_URL', 'https://www.svgrepo.com/show/303656/php-logo.svg');
    
    $output = "Hola $name, con una edad de $age";

    const NOMBRE = 'Miguel';

    //Condicional con match
    $outputAge = match (true) {
        $age < 2   => "Eres un bebe, $name",
        $age < 10  => "Eres un niño, $name",
        $age < 18  => "Eres un adolescente, $name",
        $age == 18 => "Eres mayor de edad, $name",
        $age < 40  => "Eres un adulto joven, $name",
        $age < 60  => "Eres un adulto grande, $name",
        default    => "Eres viejo, $name",
    };


    $bestLanguajes = ["php", "javascritp","python"];
    $bestLanguajes[] = "java";
    $bestLanguajes[] = "typescript";

    $person = [
        "name" => "Miguel",
        "age" => 78,
        "isDev" => true,
        "languajes" => ["php", "javascritp","python"],
    ];
    $person["name"] = "pheralb" ;
    $person["languajes"][] = "java";
?>

<ul>
    <?php foreach ($bestLanguajes as $key => $language) : ?>
        <li> <?= $key . " " . $language  ?> </li>
    <?php endforeach; ?>
</ul>

<h2> <?= $outputAge ?></h2>


<img src="<?= LOGO_URL ?>" alt="PHP LOGO" width="200">

<h1> 
    <?= $output ?> 
</h1>




<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

</style>