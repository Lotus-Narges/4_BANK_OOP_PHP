<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        //localhost:8888/OOP-PHP(Bank)-Part4/index.php

        include "titulaire_class.php";
        include "compte_class.php";


        $titulaire1 = new Titulaire("Nesselbusch", "Narges", "17/09/1998", "Strasbourg");

        $compte1 = new Compte ("Compte courant", $titulaire1);
        $compte2 = new Compte ("Livret A", $titulaire1);

        echo $titulaire1 -> afficherInfoPersonnelle()."<br>";
        //var_dump($titulaire1);
        //var_dump($compte1);

        echo $compte1->crediter(1000);
        echo $compte1->debiter(500);
        echo $compte2->crediter(3000);
        echo $compte2->virement(800, $compte1);
        echo $compte1->crediter(100000);
        echo $compte1->virement(10000, $compte2);

        var_dump($compte1);
        var_dump($titulaire1);




    ?>

</body>
</html>
