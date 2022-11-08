<?php
$n = $_POST['n'];
echo "<body 
    style=
    'background-color: rgb(12, 12, 12); 
     '>";
echo "<div 
    style=
    'background-color: #c0d860; 
     border:1px solid black;
     width:500px;
     height:auto;
     margin:50px auto;'>";

for ($i = 1; $i <= $n; $i++) {

    
    if ($i % 2 == 0) {
//css inline
        echo "<p 
           style=
           'color:white;
           background-color: #607848; 
            border:1px solid black;
            width:200px;
            padding:10px;
            text-align:center;
            margin:8px auto;'> $i <br> </p>";
    } else {
        echo "<p 
        style=
        'color:black;
        background-color: #789048; 
         border:1px solid black;
         width:200px;
         padding:10px;
         text-align:center;
         margin:2px auto;'> $i <br> </p>";
    }
}
echo"<a href='index.php'> Voltar </a>";
echo "</div>";
echo"</body>";