<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>If and Else</h1>

<p> simple test:</p>

<script>
if(3 < 2){
	document.write("true");
}else{
	document.write("false");
}
</script>


<p> Calculator:</p>

<script>
function calculator(a,b,op){
	if (op === "+"){
		return a+b;
	}else if (op === "-"){
		return a - b;
	}else if (op === "*"){
		return a * b;
	}else {
		return a / b;
	}
}

document.write(calculator(5,4,"*"));
</script>



<p> Calculate the change:</p>

<script>
function change(value,cash){
	if (value > cash){
		return " Error --> value > cash!";
	}
	return "change = $ " + (cash - value);
}

document.write(change(15.34,20));
</script>

</body>
</html>