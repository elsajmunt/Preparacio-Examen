<?php 

//print_r($_POST);

$elTitol = $_POST['title'];

$laDescripcio = $_POST['descripcio'];

$error = validaDades($elTitol, $laDescripcio);





function validaDades($elTitol, $laDescripcio) {
///
$error = false;

    if ( strlen($elTitol)<5 ) { //Longitud màxima caracters
        $error = true;
    ?>

<?php
    }
    return $error;

}

?>


<HTML>


<body>
    <?php 
      if (!$error) {
    ?>
    <h1>El nou post amb les següents dades s'afegirà</h1>
    <p>titol: <b><?=$elTitol?></b> <br> descripcio:<?=$laDescripcio?></p>
    <?php
        }
        else {
?>

            <p class="error">la descripcio ha de ser menor que 200 caracters</p>

<?php
            //
        }
    ?>
</body>
</HTML>