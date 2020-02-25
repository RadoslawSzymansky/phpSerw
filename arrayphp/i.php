<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Tablica:</p>

            

    <table>
        <?php $array = include 'array.php';
        sort($array);
        
        foreach ($array as $element) { 
        ?>
                <th><?php echo $element["brand"] ?></th>
        <?php
        }
        ?>

        <?php foreach($array as $element) {
            ?>
            <tr>
                <?php foreach($element["models"] as $car) {
                    ?>
                        <td><?php echo $car ?></td>
                    <?php
                } ?>
            </tr>
            <?php
        } ?>
        
        <!-- <tr>
            <td>A2</td>
            <td>X2</td>
        </tr> --> 
    </table>  

</body>
</html>