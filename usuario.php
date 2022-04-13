<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="" id="">
            <input type="submit" value ="buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <div>
        <table border="1">
            <tr>
                <td>ID Usuario</td>
                <td>Nombre</td>
                <td>Cargo</td>
                <td>Empresa</td>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost", "root","","sistemas");
                $sql = "SELECT id_usuario, nombre, cargo, empresa FROM usuario order by id_usuario desc";
                $rta =  mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
                 ?> 
               <tr>
                <td><?php echo $mostrar['0'] ?></td>
                <td><?php echo $mostrar['1'] ?></td>
                <td><?php echo $mostrar['2'] ?></td>
                <td><?php echo $mostrar['3'] ?></td>
            </tr>
            <?php

                }
            ?>

                        
            

        </table>
    </div>
</body>
</html>