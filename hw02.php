<table border="1", width="100%"></table>
<?php
$poker = range(0,51);
for($i = 51; $i>0; $i--){
   
    $tempIndex = rand(0,$i);
    
    //  $poker[$tempIndex] = $poker[$i];
    // [poker[$tempIndex],$poker[$i]] = [$poker[$i],poker[$tempIndex]];
    // [a,b] = [b,a];
        // 交換陣列資料
        $temp = $poker[$tempIndex];
        $poker[$tempIndex] = $poker[$i];
        $poker[$i] = $temp;
        $temp = $temp+1;
        echo "{$i}:{$temp}<br>";
        

}


?>