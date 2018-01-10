<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> Methods of Arrays </h1>

<strong>sort()</strong>


<script>
	
var arr1 = new Array (5,3,4,0,2,1);
arr1.sort();

var list = arr1.join(" - ");

document.write("<p>sort():" + arr1 + "</p>");
console.log("sort():");
console.log(arr1);


</script>

<h1> Methods of Arrays </h1>

<strong>sort() with callback</strong>


<script>
	
var arr1 = new Array (5,3,4,0,2,1);
function desc(a,b){
if(a>b){
	return -1;
}
if(a<b){
return 1;
}
if(a === b){
	return 0;
}
}

arr1.sort(desc);

var list = arr1.join(" - ");

document.write("<p>sort():" + arr1 + "</p>");
console.log("sort():");
console.log(arr1);


</script>


</body>
</html>