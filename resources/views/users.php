<!doctipe html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
        content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0> 
   <meta http-equiv="X-UA-Compatible" content="ie-edge">
   <title>Listado de usuarios - Styde.net</title>
</head>
</body>
    <hl>Usuarios</hl>

    <ul>     
        <?php foreach ($users as  $users): ?>
            <li><?php echo $users ?><li>
        <?php endforeach; ?>  
    </ul>  

</body>
</hmtl>
