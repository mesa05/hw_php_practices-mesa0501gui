<?php

$stars = "" ;
for($icount = 1 ;$icount <6 ; $icount++ ){ 
    for($jcount=0 ;$jcount<$icount ;$jcount++){  
        
        $stars= $stars ."*" ;
    
        
    }
       $stars= $stars . "<br>" ;
}


?>

<html>
    <head>
    </head>
<script type="text/javascript" src="jquery.js"></script>    

<body>
    <div id=debug></div>
    <h1>stars</h1>
    <div id="stars"><?php echo $stars ?></div>
</body>

<script>

//$("#debug").text("text$") ;
    
</script>
    
    
</html>