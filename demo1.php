<?php
    $name = "Miguel";
    $isDev = true;
    $age = 41;

    $isOld = $age >= 40;

    define('LOGO_URL', 'https://www.svgrepo.com/show/303656/php-logo.svg');
    
    $output = "Hola $name, con una edad de $age";

    const NOMBRE = 'Miguel';
?>



<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
<?php elseif($isDev) : ?>
    <h2>No eres viejo, pero eres Dev</h2>
<?php else : ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>




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