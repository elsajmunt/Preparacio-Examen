<?php

$usuaris = 
array(
    array("dni" => 1, "username"=>"Elsa" , "cognom"=>"zzzz", "password"=>"1234"),
    array("dni" => 2, "username"=>"Laura" , "cognom"=>"3333", "password"=>"4321"),
    array("dni" => 3, "username"=>"Jaume" , "cognom"=>"3333",  "password"=>"1234"),
    array("dni" => 4, "username"=>"Paula" , "cognom"=>"dddd",  "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep" , "cognom"=>"dddddd" ,"password"=>"1234"),
    array("dni" => 5, "username"=>"Josep2" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep3" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep4" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep5" , "cognom"=>"dddddd", "password"=>"1234"),
    array("dni" => 5, "username"=>"Josep6" , "cognom"=>"dddddd", "password"=>"1234"),
);


$username = $_POST['username'];
$password = $_POST['password'];

echo " $username - $password";
$existeixUsuariIPass = false;

foreach ($usuaris as $usuari) {
    if (     ($usuari['username'] == $username)  and  ($usuari['password']== $password)) {
        $existeixUsuariIPass = true;
?>


<?php



    }
}


?>




<HTML>
    <BODY>
        Tractar Login !!!


        <?php
            if ($existeixUsuariIPass) {

        ?>
        <H1> LOGIN OK </H1>

        <?php 
            }
            else {
        ?>
                <H1> LOGIN <b>KO</b> </H1>
        <?php
            }
        ?>
        
    </BODY>
</HTML>