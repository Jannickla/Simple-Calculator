<!DOCTYPE html>
<html>
<head>
    <title>Simpel lommeregner i PHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <select name="operators" id="operators">
            <option>Vælg</option>
            <option>Plus (+)</option>
            <option>Minus (-)</option>
            <option>Gang (*)</option>
            <option>Divider (/)</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Se resultatet</button>
    </form>
    <p>Resultat:</p>

    <?php

    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operators'];

        switch ($operator) {
            case "Vælg":
                echo "Du har ikke valgt hvad du vil med dine tal endnu";
                break;
            case "Plus (+)":
                echo $result1 + $result2;
                break;
            case "Minus (-)":
                echo $result1 - $result2;
                break;
            case "Gange (*)":
                echo $result1 * $result2;
                break;
            case "Dividere (/)":
                echo $result1 / $result2;
                break;
        }
    }

    ?>
</body>
</html>
