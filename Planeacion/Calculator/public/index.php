<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator Darwin</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css.css">
    </head>
    <body>
        <h2> Darwin Andres Torres Agrado</h2>
       <div class="container">
        <form action="calc.php" method="get">
            <h2>Caculator</h2>
            <div class="n1">
            <input type="number" name="n1">
            </div>
                <div class="operation">
            <select name="operation">
                <option Value="">Seletect a operation</option>
                <option Value="1">Sum</option>
                <option Value="2">Resta</option>
                <option Value="3">Multi</option>
                <option Value="4">Div</option>
                <option value="5">logat</option>
                <option value="6">x<sub>2</sub></option>
                <option value="7">x<sub>y</sub></option>
                <option value="8">√</option>
                <option value="9">Root</option>
                <option value="10">Div module</option>
            </select>
                </div>
            <div class="n2">
            <input type="number" name="n2">
            </div>
            <p>
            <?php if (isset($message)=== true):?>
            <?php echo $message ?>
            <?php endif ?>
            </p>
            <br>
            <button type="submit">Operate</button>
        </form>
           
       </div>
    </body>
</html>
