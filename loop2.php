<!DOCTYPE html>
<html>
<body>

<?php

echo "loop.)  <br>"; 
$N = 1;

$arr = array(3,4,-2,6,10,10,15,-16,-30,15,100,-99,50);
$count =count($arr);
$max=0;
for($z=0; $z<$count; $z++){
    $mega;
    $mega2;
    $start3;
    $end3;
    for ($i=$z; $i<=$count; $i++) { 
        $start2 =$z;
        unset ($sum);
	        for($x=$z; $x<$i; $x++){
        
                $sum += $arr[$x];
                echo $arr[$x]." ";
                $start = $x;
                $end = $i;
                
            }
            
            if (isset($sum)) {
            echo "==>". $sum /*." | start " .$start." to ".$end */;
            }
            echo(" | ".$start2."to".$end."<br>");
             if($sum >$max){
             $max = $sum ;
             $mega = $max;
            $S = $x;

            

         
        }
     if( $mega>$mega2 ){
         $mega2 =$mega;
         $start3 = $start2;
         $end3 =$end;
     }  
         
    }
}
$start3 =+ 1;
echo("From to".$S."MAX :".$max);
echo("mega".$mega2);
echo("<br>".$start3);
echo("<br>".$end3);

echo("<br><br><br> <b> You have to pick from ". $start3." to ".$end3." for ".  $max . " point  <b>");

?>

</body>
</html>