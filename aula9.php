<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Arrays</title>
</head>
<body>

<h1> Methods of Arrays </h1>

<strong>unshift()</strong>


<script>
	
var arr1 = new Array ("red",10,20.4);
arr1.unshift("new element");

var list = arr1.join(" - ");

document.write("<p>unshift():" + arr1 + "</p>");
console.log("unshift():");
console.log(arr1);


</script>

<h1> Methods of Arrays </h1>

<strong>slice()</strong>


<script>
	
var arr1 = new Array ("red",10,20.4,"new element");
var newArray = arr1.slice(1,3);

var list = newArray.join(" - ");

document.write("<p>slice():" + arr1 + "</p>");
console.log("slice():");
console.log(newArray);


</script>

<h1> Methods of Arrays </h1>

<strong>splice()</strong>


<script>
	
var arr1 = new Array ("red",10,20.4,"new element");
arr1.splice(1,2,"a","b","c","d");

var list = arr1.join(" - ");

document.write("<p>splice():" + arr1 + "</p>");
console.log("splice():");
console.log(arr1);


</script>

<h1> Methods of Arrays </h1>

<strong>reverse()</strong>


<script>
	
var arr1 = new Array ("a","b","c","d");
arr1.reverse();

var list = arr1.join(" - ");

document.write("<p>reverse():" + arr1 + "</p>");
console.log("reverse():");
console.log(arr1);


</script>

</body>
</html>