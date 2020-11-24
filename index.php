<?php
$age = 18;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2 exo1</title>
</head>
<body>
    <div>
    <?php if ($age >= 18 && $age <= 100) { ?>
       <p>'Vous êtes majeur.';</p>
    
    <?php } else if ($age >=0 && $age < 18) { ?>
       <p> 'Vous êtes mineur.';</p>
    <?php } else { ?>
        <p>Erreur 403.</p>
    <?php } ?>
    
</body>
</html>