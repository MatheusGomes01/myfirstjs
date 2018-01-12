<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Function</h1>

<p>Tests:</p>

<script>
	function add(a,b){
		return parseInt(a) + parseInt (b);
	}
	document.write("<p>add(5,4) = " + add(5,4) + "</p>")

	var factorial = function(n){
		 var fac = 1;
		 for(var y = n; y >= 1; y--){
		 	fac *= y;
		 }
		 return fac;
	};
	document.write("<p>factorial(4)" + factorial(4) +"</p>")

</script>

</body>
</html>