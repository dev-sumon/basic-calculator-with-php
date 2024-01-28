<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
            include"style.css"
        ?>
    </style>
</head>
<body>
    <div class="container">
    <h2>Basic Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" id="">
        <input type="number" name="num2" id="">
        <select name="operation" id="">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>
        <button>Calculate</button>
    </form>
    <div id="result">
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation){
                case "addition":
                    $result = $num1 + $num2;
                    echo "Result:$result"; 
                    break;
                case "subtraction":
                    $result = $num1 - $num2;
                    echo "Result:$result"; 
                    break;
                case "multiplication":
                    $result = $num1 * $num2;
                    echo "Result:$result"; 
                    break;
                case "division":
                    $result = $num1 / $num2;
                    echo "Result:$result"; 
                    break;
            }
        }
        
        ?>

    </div>
    </div>
</body>
</html>