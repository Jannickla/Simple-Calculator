<!DOCTYPE html>
<html>
<head>
    <title>Calculator in PHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="operators" id="operators">
            <option>Choose</option>
            <option>Plus (+)</option>
            <option>Minus (-)</option>
            <option>Times (*)</option>
            <option>Divide (/)</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>Result:</p>

    <?php

    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operators'];

        switch ($operator) {
            case "Vælg":
                echo "You didn't choose a operator yet";
                break;
            case "Plus (+)":
                echo $result1 + $result2;
                break;
            case "Minus (-)":
                echo $result1 - $result2;
                break;
            case "Times (*)":
                echo $result1 * $result2;
                break;
            case "Divide (/)":
                echo $result1 / $result2;
                break;
        }
    }

    ?>
</body>
</html>
