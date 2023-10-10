<html lang="en">
<head>
  <title>View Questions and Answers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 300px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div class="container" id = "container1" >
<a href=" <?php echo e(URL::asset('/').('index.php/')); ?>" class="active">Home</a>
  <a href=" <?php echo e(URL::asset('/').('index.php/view-answer1')); ?> ">Question 1</a>
  <a href=" <?php echo e(URL::asset('/').('index.php/view-answer2')); ?> ">Question 2</a>
  <a href=" <?php echo e(URL::asset('/').('index.php/view-answer3')); ?> ">Question 3</a>
  <a href=" <?php echo e(URL::asset('/').('index.php/view-answer4')); ?> ">Question 4</a>
<br />

  <h1 class="text-center">Question 5</h1>
<p>

  <h2 class="text-center">
Person1 wants to perform some number of swap operations such that:

    Each container contains only balls of the same type.

    No two balls of the same type are located in different containers.

</h2>
</p>
  <h1 class="text-center">Answer</h1>
</div>

<?php
    $q=2; 
        $M=array([1,4],[2,3]);
 	for($a = 0; $a < $q; $a++){
	$n=2;$f=0;$d=0; 
	$x=array();$s;$y=0;$z=array();$l=0;
       	for($i=0;$i<$n;$i++){ 
           $s=0;
           $l=0;
            for($j=0;$j<$n;$j++)
                     $s=$s+$M[$j][$i];                               
                  $x[$i]=$s;      
           for($j=0;$j<$n;$j++)
                     $l=$l+$M[$i][$j];       
               $z[$i]=$l; 
       }
        for($i=0;$i<$n;$i++) {
            $d=0;
              for($j=0;$j<$n;$j++)
                if($x[$i]==$z[$j]) $d=1;
                  
                 $f=$f+$d;   
        }
        
 
        echo("Entered container data for $q x $n : <br>"); 
	for ($row = 0; $row < $q; $row++) {
		for ($col = 0; $col < $n; $col++) {
			echo $M[$row][$col]." ";
		}
		echo "<br>";
	}
        if($f==$n && $d==1) echo("Possible\n");
        else echo("Impossible\n");
	
        $M=array([1,1],[1,1]);
       }
?>
</div>
</body>
</html>

<?php /**PATH /var/www/html/project/resources/views/view-answer4details.blade.php ENDPATH**/ ?>