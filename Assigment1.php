<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h2>Multiplication table of 5 </h2>

    <?php
    echo "Using while loop <br>";
    $num = 5;
    $x = 1;

    while ($x <= 12) {
        echo "$num * $x = " . $num * $x . "<br>";
        $x++;
    }

    echo "<br> Using Do while Loop <br>";
    $i = 1;
    do {
        echo "$num * $i = " . $num * $i . "<br>";
        $i++;
    } while ($i <= 12)
    ?>

    <h2>First 100 even number</h2>
    <?php
     for ($x = 0; $x <= 100; $x++ )
     {
        if ($x % 2 == 0)
        {
            echo $x."<br>";
        }
     }

    ?>

</body>

</html>