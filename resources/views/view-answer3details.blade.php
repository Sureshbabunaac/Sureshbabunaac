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
<a href=" {{ URL::asset('/').('index.php/') }}" class="active">Home</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer1') }} ">Question 1</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer2')     }} ">Question 2</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer3')   }} ">Question 3</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer4')      }} ">Question 4</a>
<br />

  <h1 class="text-center">Question 3</h1>
<p>

  <h2 class="text-center">Write a function that reads a file with numbers (one number per line), parses the numbers, and returns their sum.

        Input Format: The input will be a string representing the path to the file.

        Constraints:

            The file will contain at least one number.

            The file may contain empty lines or lines with non-numeric characters.

            Each number will be an integer.</h2>
</p>
  <h1 class="text-center">Answer</h1>
</div>

@php
$file = fopen('/var/www/html/project/storage/app/FileNumberSum.txt', 'r');
  $sum =0;
  $lc =0;   
  $cc = ''; 
  while(!feof($file)){
      $cc = (int) fgetc($file);
      if($cc == (int)' '){
        $sum = $sum+$lc;
        $lc = 0;
      }else if($cc != (int)' '){
          $lc = $lc+$cc;
      }
  }
  echo("Parse the number and returns their sum :".$sum);
  fclose($file);
@endphp
</div>
</body>
</html>

