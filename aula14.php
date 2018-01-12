<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Switch</title>
</head>
<body>

<h1>Switch</h1>

<p> simple test: </p>

<script>
	var color = "red";
	switch (color){	
		case "orange":
			document.write("color: Orange");
			break;
		case "blue":
			document.write("color: Blue");
			break;
		case "red":
			document.write("color: Red");
			break;
		default:
			document.write("No color");	
		}
</script>



<p> advanced test: </p>
<input type="text" id="weight" placeholder="Weight">
<br/>
<select id="fruits">
	<option value="apple">Appple</option>
	<option value="Watermelon">Watermelon</option>
	<option value="lemon">Lemon</option>
</select>
<br/>
<button onclick="balance();">to weight</button>
<br/>
<span id="result"></span>
<script>

function balance(){
	var fruits = document.getElementById("fruits").value;
	var weight = document.getElementById("weight").value;
	
	if(!weight){
		document.getElementById("result").innerHTML = "Please fill weight!";
		return;

	}	

	switch (fruits){
		case "apple":
		document.getElementById("result").innerHTML = "$ " + weight * 0.35;
		break;
		case "Watermelon":
		document.getElementById("result").innerHTML = "$ " + weight * 0.59;
		break;
		case "lemon":
		document.getElementById("result").innerHTML = "$ " + weight * 0.16;
		break;

		default:
		document.getElementById("result").innerHTML = "Product not registred";
	}

}
</script>







</body>
</html>

