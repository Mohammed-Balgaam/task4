<?php
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result;

    switch ($operator) {
        case '+':
           $result = $num1 + $num2;
            break;
            
        case '-':
            $result = $num1 - $num2;
            break;

        case '*':
            $result = $num1 * $num2;
             break;

        case '/':
            $result = $num1 / $num2;
           break;     

        default:
            echo "unown operator";
            break;
    }
}
if (isset($result)) 
{?>
    <script>
        alert("Result: " + <?php echo $result;?>);
    </script>
    <?php
    // echo "<p>Result: $result</p>";
}
// echo $result;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0;
}

.calculator-container {
    background-color: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 350px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

label {
    display: block;
    margin: 15px 0 5px;
    font-size: 16px;
    color: #555;
}

input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

input[type="radio"] {
    margin-right: 5px;
}

button {
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

.radio-group {
    margin: 10px 0;
    display: flex;
    justify-content: space-around;
}

.radio-group label {
    margin: 0;
    font-size: 18px;
    color: #333;
}

       
    </style>

<div class="calculator-container">
    <h1>Simple Calculator</h1>
    <form action="calculator.php" id="calculator" method="post">
        <label for="num1">Enter first number</label>
        <input name="num1" type="number" id="num1" placeholder="Enter first number" required>

        <div class="radio-group">
            <input id="add" type="radio" name="operator" value="+" required>
            <label for="add">+</label>
            
            <input id="sub" type="radio" name="operator" value="-">
            <label for="sub">-</label>
            
            <input id="multi" type="radio" name="operator" value="*">
            <label for="multi">*</label>
            
            <input id="div" type="radio" name="operator" value="/">
            <label for="div">/</label>
        </div>

        <label for="num2">Enter second number</label>
        <input name="num2" type="number" id="num2" placeholder="Enter second number" required>

        <button type="submit">Calculate</button>
    </form>
</div>
</body>
</html>