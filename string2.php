<html>
    <body>
        <?php
        function add($x, $y)
        { $sum = $x + $y;
          return $sum;
        }
        $num1 = 11;
        $num2 = 15;
        $sum = add($num1, $num2);
        echo "$num1 + $num2 = " . $sum;
        ?>
        </body>
        </html>