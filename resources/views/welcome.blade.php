<html lang="en">
<head>
  <title>Interview Questions &  Answers</title>
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
<!-- Horizontal Menu -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>
<body>

<div class="vertical-menu">
  <a href=" {{ URL::asset('/').('index.php/') }}" class="active">View  Answers</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer1') }} ">Question 1</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer2')     }} ">Question 2</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer3')   }} ">Question 3</a>
  <a href=" {{ URL::asset('/').('index.php/view-answer4')      }} ">Question 4</a>
<br />
</div>

@php
echo("\nSuresh Babu\n Phone: +917619499563\n Email Id: sureshbabu.naac@gmail.com\n");
@endphp
        </div>
    </body>
</html>
