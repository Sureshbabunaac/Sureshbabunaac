<html lang="en">
<head>
  <title>View Question and Answer</title>
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

  <h1 class="text-center">Question 1</h1>
<p>  <h2 class="text-center">You are given an array of integers, and you need to write a PHP function to find the maximum and minimum values in the array. Write a PHP function that takes an array of integers as input and returns an array containing the maximum and minimum values in the input array.</h2></p>

  <h1 class="text-center">Answer</h1>
</div>
<?php
function getMax($array)
{
$n = count($array);
$max = $array[0];
for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i])
                $max = $array[$i];
        return $max;
}

function getMin($array)
{
$n = count($array);
$min = $array[0];
for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i])
                $min = $array[$i];
        return $min;
}

$array = array(1, 2, 3, 4, 5);
/*
echo "Enter n for array elements : <br>";
echo "<form method='POST'>
        Row:<input type='number' min='2'
                        max='5' name='1d' value='1'/>
<input type='submit' name='submit'
                        value='Submit'/>
</form>";
echo "Enter the  array elements : <br>";

        $dimention1 = $_POST["1d"];


        $d = array();
        $k = 0;

        for($row = 0; $row < $dimention1; $row++) {
echo "<form method='POST'>
        Row:<input type='number' min='2'
                        max='5' name='1e' value='1'/>
<input type='submit' name='submit'
                        value='Next'/>
</form>";

                        $d[$row]= $_POST["1e"];
                }

        for ($row = 0; $row < $dimention1; $row++) {
                        echo $d[$row]." ";
                }
                echo "<br>";
*/

echo "Entered the  array elements : <br>";
        for ($row = 0; $row < count($array); $row++) {
                        echo $array[$row]." ";
                }
                echo "<br>";
echo("<br />Maximum :");
echo(getMax($array));
echo("\n <br />");
echo("Minimum :");
echo(getMin($array));
echo("\n<br />");
echo("\nSuresh Babu\n<br /> Phone: +917619499563\n <br />Email Id: sureshbabu.naac@gmail.com\n <br />");
?>

</div>
</body>
</html>

<?php /**PATH /var/www/html/project/resources/views/view-answer1details.blade.php ENDPATH**/ ?>