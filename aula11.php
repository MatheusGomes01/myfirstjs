<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> Search </h1>

<strong>indexOf()</strong>


<script>
	
var arr1 = ["orange","blue","red","blue","green"];
var ret = arr1.indexOf("blue");

document.write("<p>Ret: " + ret + "value = " + arr1[ret] + "</p>");
console.log("indexOf()");
console.log(ret);

</script>



<h1> Search </h1>

<strong>lastIndexOf()</strong>


<script>
	
var arr1 = ["orange","blue","red","blue","green"];
var ret = arr1.lastIndexOf("blue");

document.write("<p>Ret: " + ret + "value = " + arr1[ret] + "</p>");
console.log("lastIndexOf()");
console.log(ret);

</script>


<h1> Search </h1>

<strong>lastIndexOf([SearchElement, fromIndex])</strong>


<script>
	
var arr1 = ["orange","blue","red","blue","green"];
var ret = arr1.lastIndexOf("blue",2);

document.write("<p>Ret: " + ret + "value = " + arr1[ret] + "</p>");
console.log("lastIndexOf()");
console.log(ret);

</script>





<h1> Search  in pratice</h1>

<strong>Search  in pratice  </strong>

<br/>
<input type="text" id="search">
<button onclick="search();">search</button>
<br/>
<strong>Result: </strong>
<br/>
<span id="result"></span>


<script>
function search(){	
var arr = ["a content of a blog", "news of article","recié for a cake"];
var search = document.getElementById("search").value;
var testKey = null;
var result = " ";
for (var key in arr){
	var auxArr = arr[key].split(" ");
	for(var key2 in auxArr){
		if(auxArr.indexOf(search) > -1){
			if(testKey != key){
				testKey = key;
				result += "<p>" + arr[key] + "</p>";
			}

		}
	}
}

document.getElementById("result").innerHTML = result;
}
</script>





</body>
</html>