<html lang="en">
<head>
  <title>View Question and Answers</title>
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

  <h1 class="text-center">Question2</h1>
<p>

  <h2 class="text-center"> Write a PHP program that reads a text file containing a list of words and calculates the following statistics:


    Total number of words in the file.

    Total number of unique words in the file.

    The top 5 most common words and their frequencies.

    The top 5 longest words in the file.
</h2>
</p>
  <h1 class="text-center">Answer </h1>
</div>

<?php

function  mostFrequentWord($array)
{
	$freq = 0;
	$res= array();

	for ($i = 0; $i < count($array); $i++) {
		$count = 0;
		for ($j = $i + 1; $j < count($array); $j++) {
			if ($array[$j] == $array[$i]) {
				$count++;
			}
		}
		if ($count >= $freq) {
			$res = $array[$i];
			$freq = $count;
		}
	}

	echo( " Total number of unique words in the file: " .$res."<br />No of times: ".$freq ."<br />");
}

function  top5LongestWord($array)
{
$count = count($array);
for($i=0; $i < $count; $i++){
    $max = $array[$i];
    $index = $i;
    for($j = $i + 1; $j < $count; ++$j){
        if(strlen($array[$j]) > strlen($max)){
            $max = $array[$j];
            $index = $j;
        }
    }
    $tmp = $array[$index];
    $array[$index] = $array[$i];
    $array[$i] = $tmp;
    if($i == 5) break;
}

echo("The top 5 longest words in the file<br />");
for($i=0; $i < 5; $i++){
    echo $i.'->'.$array[$i] . '<br />';
}
}
    $count = 0;  
    $farray = array();   
    $file = fopen("/var/www/html/project/storage/app/question.txt", "r");  
          
    while (($line = fgets($file)) !== false) {  
        $words = explode(" ", $line);  
        $farray = array_merge($farray , $words); 
        $count = $count + count($words);  
    }  
       
    echo("<br />Total number of words in the file: " . $count."<br />");  
    fclose($file);  
 echo(mostFrequentWord($farray));
 echo(top5LongestWord($farray));
echo("\n<br />");
echo("\nSuresh Babu\n<br /> Phone: +917619499563\n <br />Email Id: sureshbabu.naac@gmail.com\n <br />");
?>
</div>
</body>
</html>

<?php /**PATH /var/www/html/project/resources/views/view-answer2details.blade.php ENDPATH**/ ?>