<?php 
    $res = 0;
    if(count($_POST) && isset($_POST["op"])){
        switch ($_POST["op"]) {
            case 'soma':
                $res = $_POST["n1"] + $_POST["n2"];
                break;
            case 'sub':
                $res = $_POST["n1"] - $_POST["n2"];
                break;
            case 'mult':
                $res = $_POST["n1"] * $_POST["n2"];
                break;
            case 'div':
                $res = $_POST["n1"] / $_POST["n2"];
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora com Materialize</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">~
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     
</head>
<body>
    <div class="container">   
        <div class="row"> 
            <div class="col s8">
                <h3 class="header">Minha Calculadora</h3>
                <div class="card horizontal">
                <div class="card-image">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="row">
                            <form action="" method="post">
                                <div class="input-field col s6">
                                    <input type="number" step="0.00001" id="n1" name="n1">
                                    <label for="n1">Operando 1</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="number" step="0.00001" id="n2" name="n2">
                                    <label for="n2">Operando 2</label>
                                </div>
                                <div class="input-field col s12">
                                    <button type="submit" class="btn col s2 offset-s1 amber lighten-1" name="op" value="soma">Somar</button>
                                    <button type="submit" class="btn col s2 offset-s1 light-blue darken-3" name="op" value="sub">Subtrair</button>
                                    <button type="submit" class="btn col s2 offset-s1 green darken-3" name="op" value="mult">Multip.</button>
                                    <button type="submit" class="btn col s2 offset-s1 red darken-3" name="op" value="div">Dividir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                    <a href="#" step="0.01">Resultado: <?php echo $res; ?> </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>