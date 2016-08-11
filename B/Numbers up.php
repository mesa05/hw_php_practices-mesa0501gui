<?php
$numberValue="" ;
for($i=0;$i<5;$i++){
  for($j=1;$j<5;$j++){
      for($k=1;$k<5;$k++){
          if($i!=$j && $j!=$k && $k!=$i &&  $i!=0 ){
           $numberValue ="$i.$j.$k" ;
           $Data[$i]=array("$numberValue");
               
           echo $numberValue."<br>" ;
          
          }
          
          
       
      }
  } 

}   
    echo  $Data[1] ;
?>

<html>
    <head>
    </head>
<script type="text/javascript" src="jquery.js"></script>    

<body>
    <!--<div id=debug></div>-->
    <!--<h1>numbers </h1>-->
    <!--<div id="stars"></div>-->
</body>

<script>

//$("#debug").text("text$") ;
    
</script>
    
    
</html>