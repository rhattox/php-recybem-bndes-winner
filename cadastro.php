<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Page</title>
</head>
<body>
    Hello Cadastro
      
<form method= "post" action="db/dbInsertUser.php">
    <label for="firstName">Primeiro nome:</label><br>
    <input type="text" id="fristName" name="firstName" require="required"><br>

    <label for="cpf">CPF:</label><br>
    <input type="text" id="cpf" name="cpf"><br>

    <input type="submit" value="Fazer cadastro">

  </form> 
</body>
</html>