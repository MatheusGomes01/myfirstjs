<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Arrays</title>
</head>
<body>

<h1> Arrays in JS </h1>

<script>
	
var arr1 = new Array ("red",10,20,4);
var arr2 = Array ("blue",12,30,3,arr1);
var arr3 = ["orange",10,23,2,arr1,arr2];


document.write("<p>Arr1: " + arr1[0] + "</p>");
document.write("<p>Arr1: " + arr1[1] + "</p>");
document.write("<p>Arr1: " + arr1[2] + "</p>");


document.write("<p>Arr2: " + arr2[0] + "</p>");
document.write("<p>Arr2: " + arr2[1] + "</p>");
document.write("<p>Arr2: " + arr2[2] + "</p>");
document.write("<p>Arr2: " + arr2[3] + "</p>");

document.write("<p>Arr3: " + arr3[0] + "</p>");
document.write("<p>Arr3: " + arr3[1] + "</p>");
document.write("<p>Arr3: " + arr3[2] + "</p>");
document.write("<p>Arr3: " + arr3[3] + "</p>");
document.write("<p>Arr3: " + arr3[4] + "</p>");
document.write("<p>Arr3: " + arr3[5] + "</p>");

</script>

</body>
</html>