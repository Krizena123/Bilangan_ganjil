<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bilangan Ganjil</title>
</head>
<body>
    <h3>==== BILANGAN GANJIL 1- 100 ====</h3>
    <?php  
        for ($i=1; $i <= 100 ; $i++) { 
            if ($i % 2 == 1) {
                echo "$i ";
            }
        }
    ?>
</body>
</html>