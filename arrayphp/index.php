<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
        border: 1px solid black;
        padding: 5px;
    }
    th {
        background-color: #ccc;
    }
    
    </style>
</head>
<body>
    <p>Tablica:</p>

    <table>
        <?php 
            $array = include 'array.php'; 

            usort($array, function($a, $b) { return count($b["models"]) - count($a["models"]); });
        ?>

        <?php foreach($array as $element) {
            ?>
            <tr>
                <th><?php echo $element["brand"]; ?></th>
                <?php foreach($element["models"] as $car) {
                    ?>
                        <td><?php echo $car ?></td>
                    <?php
                } ?>
            </tr>
            <?php
        } ?>
    </table>  
</body>
</html>