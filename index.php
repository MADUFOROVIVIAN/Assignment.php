<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post" action="calculator.php">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
