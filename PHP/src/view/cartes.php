<html lang="fr">
    <head>
        <?php
            require_once './src/view/header.php';
        ?>
    </head>
    <body>
	<div>
            <h1>Cartes</h1>
            <ul>
                <?php
                    foreach($res as $key => $val)
                    {
                        echo '<li> <a href=\'./view/cartes.php?id='.$val['idRestaurant'].'\'>'.$val['nomRestaurant'].'</a> a '.$val['ville'].', '.$val['pays'].' - '.$val['adresse'].'</li>';
                    }
                ?>
            </ul>
	</div>
    </body>
</html>