<?php

/*$b="3";
$c="4";
$bc="5";
function addition($b,$c,$bc){
    $no=$b+$c+$bc;
    echo $no;


}echo addition($b,$c,$bc)."<br>";







$b="4";
$c="5";
$bc="6";
function subtraction($b,$c,$bc){
    $no=$b-$c-$bc;
    echo $no;

}
echo subtraction($b,$c,$bc)."<br>";

$b="4";
$c="5";
$bc="6";
/*function multiplication($b,$c,$bc){
    $no=$b*$c*$bc;
    echo $no;

}
echo multiplication($b,$c,$bc)."<br>";



$b="4";
$c="5";
function ugword($b,$c){
    $no=$c%$b;
    echo $no;

}
echo ugword($b,$c)."<br>";


if(5!==6){
    echo "true";
};*/
//else(5!==6){
   // echo "fulse";


/*$n=15;
$kel=51-$n;
echo $kel."<br>";

if($n>51){
    echo $kel*4;
};

$a=28;
$c=2;
if ($a>$c){
    echo ($a);
}
else{
    echo ($c);
}


/*$d=30;
$c=40;
$g=50;
echo max($d,$c,$g)."<br>"$d=3.39;
$c=5.49;
$g=4.59;
echo round($d,$c,$g)."<br>";






for ($i=1; $i<21; $i++){
    echo $i."<br>";
 }
/* for ($i=2; $i<21; $i%){
    echo $i."<br>";
 }


 for ($i=1; $i<=20; $i++){
    if ($i %2 == 0) {
        echo $i."<br>";
    }
 } 



 $a=1;
 while($a<5){
    echo $a;
    $a++."<br>";
  }

*/

/*$b="3";
$c="4";
$bc="5";
function addition($b,$c,$bc){
    $no=$b+$c+$bc;
    echo $no;
}

$li=5;
$mu=4;
$nol=5;
$fh=5;
$hrk=6;
echo rand(20,100);
 echo "<br>";
 echo rand(20,50);
 echo "<br>";
 echo rand(20,40);
 echo "<br>";
 echo rand(20,30);
 echo "<br>";
 echo rand(20,21)."<br>";
 
$t= date("h");

$a="  have a good day";
$b=substr($a,0,2)."<br>";
if ($b=="if"){
    echo $b;

} else{
    echo "if $a";
}
fo($i=)

$w= ["derick","jame","jesse","joshua","micheal","emma","kelvin",];
echo $w[3]."<br>";

$a=[ 
    'derick'=>8, 
    'esse'=>7, 
    'joshua'=>20, 
    'micheal'=>30, 
    'emma'=>60, 
    'hillary'=>50, 
    'kelvin'=>40];
    echo $a['hillary']."<br>";


   $l=[30,40,50]; 
     foreach($l as $key => $value) {
    echo $key."=".$value;
   }
   $t=[
    'kel'=>['eng'=>50, 'math'=>10],
    
   ];
   foreach ($t as $key => $value) {
       echo  $key."<br>";
   }
   foreach ($value as $h =>$l){
    echo $h."=".$h;
   }*/

   $hil=[
    'hillary'=>['english'=>10, 'math'=>20],
   ];
   foreach ($hil as $key => $value) {
    echo $key."<br>";
   }
   foreach ($value as $k => $i) {
    echo $k."=".$i."<br>";
   }

   
   $kel=[
    'kelvin'=>['english'=>30, 'math'=>50],
   ];
   foreach ($kel as $key => $value) {
    echo $key."<br>";
   }
   foreach ($value as $k => $i) {
    echo $k."=".$i."<br>";
   }

   $ugo=[
    'ugo'=>['english'=>30, 'math'=>50],
   ];
   foreach ($ugo as $key => $value) {
    echo $key."<br>";
   }
   foreach ($value as $k => $i) {
    echo $k."=".$i."<br>";
   }
   $l=[30,40,50]; 
   foreach($l as $key => $value) {
  echo $i."<br>";
 }

 $kel=[20,30,50,60];
 $mik = 0;
 foreach ($kel as $value) {
    $mik += $value;
 }
 echo "total sum=$mik"."<br>";
/* $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
echo "$value <br>";
}
$values = array(
    'foo' => 10,
    'bar' => 20,
    'baz' => 30
);

foreach($values as $key => $value){
    echo $ . ' ';
    if($key == 'bar'){
        $values['qux'] = 21;
    }
}6776y*/





$g=mysqli_connect("localhost","root","");
// if($g){
//     echo "connected";
// }
// else(
//     echo "not connected";
// )
$create = mysqli_query($g,"create
DATABASE PHP");
IF($create){
    echo "create";
}
else{
    echo "not create";
}