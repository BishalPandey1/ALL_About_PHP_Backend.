<?php
// Calculator logic
function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        case 'power':
            return pow($num1, $num2);
        case 'sqrt':
            return $num2 == 0 ? sqrt($num1) : "Square root requires one operand";
        default:
            return "Invalid operation";
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $operation = $_POST["operation"];
    $result = calculate($number1, $number2, $operation);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced PHP Calculator</title>
    <style>
        body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.calculator {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.calculator input[type="text"],
.calculator select,
.calculator input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.calculator input[type="submit"] {
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.calculator input[type="submit"]:hover {
    background-color: #0056b3;
}

.result {
    text-align: center;
    font-size: 20px;
    margin-top: 10px;
}

    </style>
</head>
<body>
    <div class="calculator">
        <form action="" method="post">
            <input type="text" name="number1" placeholder="Enter number" value="<?php echo isset($number1) ? $number1 : ''; ?>">
            <input type="text" name="number2" placeholder="Enter number" value="<?php echo isset($number2) ? $number2 : ''; ?>">
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
                <option value="power">^</option>
                <option value="sqrt">√</option>
            </select>
            <input type="submit" value="Calculate">
        </form>
        <div class="result">
            <?php echo isset($result) ? $result : ''; ?>
        </div>
    </div>
</body>
</html>
