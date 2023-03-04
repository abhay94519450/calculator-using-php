<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<script>
		function calculate() {
			var num1 = parseFloat(document.getElementById("num1").value);
			var num2 = parseFloat(document.getElementById("num2").value);
			var choice = document.getElementById("operation").value;
			var result;

			switch (choice) {
				case "addition":
					result = num1 + num2;
					break;
				case "subtraction":
					result = num1 - num2;
					break;
				case "multiplication":
					result = num1 * num2;
					break;
				case "division":
					if (num2 == 0) {
						alert("Error: Division by zero");
						return;
					}
					result = num1 / num2;
					break;
				default:
					alert("Invalid operation");
					return;
			}

			document.getElementById("result").value = result;
		}
	</script>
</head>
<body>
	<h1>Calculator</h1>

	<label for="num1">First number:</label>
	<input type="number" id="num1" name="num1"><br>

	<label for="num2">Second number:</label>
	<input type="number" id="num2" name="num2"><br>

	<label for="operation">Operation:</label>
	<select id="operation" name="operation">
		<option value="addition">Addition</option>
		<option value="subtraction">Subtraction</option>
		<option value="multiplication">Multiplication</option>
		<option value="division">Division</option>
	</select><br>

	<button type="button" onclick="calculate()">Calculate</button>

	<label for="result">Result:</label>
	<input type="number" id="result" name="result" readonly>
</body>
</html>
