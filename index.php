<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
 git -->


<!-- <body> -->
    
    <?php
    $title = "Главная страница";
    require_once("header.php");
    ?>
    <hr><br>
    <h1>? Главная страница ?</h1>
    <?php
    print_r($_GET);
    echo'<hr>';
    //require - apeleaza fisierul si afiseaza daca este eroare
    //include - ``` nu afiseaza daca este eroare
    //```_once - apeleaza numai o data de toate functionarea
    function zalupa($arr, $sts){
        /*foreach($matrix as $i => $v){
            echo $v[$i];
            echo ' ';
            //echo $i;
            //echo ' ';
            if($i%5 == 0)
                echo '<br>';
        }*/
        for($i=0;$i<3;$i++){
            for($j=0;$j<4;$j++){
                echo $arr[$i][$j];
                echo ' ';
            }
            echo'<br>';
        }
        echo '<hr>';
        foreach($sts as $i => $v){
            echo"$i: $v<br>";
        }
        //static $count - initializeaza variabila, care i-si pastreaza valoare tot progrmul, esind din vederea functiei
        //global $x - initializeaza variabila, care poate fi intrebuintata in orice parte al progrmului, in afara zonei de vedere al functiei
    }
        $list = [34,534,36,2345,65];
        $Stas = ['age' => 20, 'car' => 'bmw', 'home' => 'butor-city'] ;
        echo 'hello my nigga !';
        echo '<br><hr>';
        echo "$list[3]<br><hr>";
        echo "$Stas[car]<br><hr>";
        $matrix =[ 
            [0,0,0,0],
            [0,0,4,0],
            [0,4,0,5],
        ];
        //$matrix [2][3] = 1;
        echo $matrix[2][3];
        echo '<hr>';
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                echo $matrix[$i][$j];
                echo ' ';
            }
            echo'<br>';
        }
        echo '<hr>';
        //if(true)
        // continue; --- trece peste o interatie, peste tot ceia ce-i mai jos de :continue:. like a "jump to
        foreach( $Stas as $k => $v ) { //foreach - простой перебор массивов 
            echo "Key: $k. Value: $v.<br>";
        }
        echo "<hr>";
        zalupa($matrix, $Stas);
        echo '<hr><br>';
        ?>


<br><hr>
    <?php
    include_once("footer.php");  
    ?>
<!--</body>
</html>-->