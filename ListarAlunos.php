<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $servidor = "Localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "faeterj3dawnoite";

        $conn = new mysqli($servidor,$usuario,$senha,$nomeBanco);

        if($conn->connect_error){
            die("conexão com erro" . $conn->connect_error);
        }

        $sql = "SELECT * FROM ALUNOS";
        $result = $conn->query($sql);
        
        echo "<table border=1>";
        echo "<tr>";

        echo    "<th>Nome</th><th>email</th><th>Matricula</th>";
        echo "</tr>";
        while($linha = $result->fetch_assoc()){
            echo "<tr>";

            echo "<td>". $linha["nome"] . "</td>";
            
            
            echo "<td>". $linha["email"] . "</td>";
            echo "<td>". $linha["matriculo"] . "</td>";
            
            

            echo "</tr>";
        }

        echo "</table>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar Alunos</h1>

    <form action="ListarAlunos.php" method="post">
        <input type="submit" name="op" value="Listar Alunos"></input>
        <br>
    </form>
    
</body>
</html>