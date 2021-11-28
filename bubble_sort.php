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
        function bubble($array){
            $size = count($array);
            for($i = 0; $i<$size; $i++){
                for($x = 0; $x<$size; $x++){
                    $siguiente = $x + 1;
                    if($array[$x] > $array[$siguiente]){
                        list($array[$x], $array[$siguiente]) = array($array[$siguiente], $array[$x]);
                    }
                    echo '<pre>'; print_r(array_filter($array)); echo '</pre>';
                };
            };
        }
        bubble([3,2,5,6,1,7,8])
    ?>
</body>
</html>