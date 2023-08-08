<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple PHP Calculator</h1>
    <form action="calculate.php" method="get">
        <input type="text" name="num1" placeholder="Enter number 1">
        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <input type="text" name="num2" placeholder="Enter number 2">
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
