<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro cliente</title>
</head>
<body>
<h3>Sistema de cliente</h3>
<form action ="gravar.php" method="post">
Nome..:
<br>
<input type="text" name = "nome"/>
<br><br>
E-mail..:
<br>
<input type="text" name = "email"/>
<br><br>
Idade..:
<br>
<input type="text" name = "idade"/>
<br><br>
Estado Civil.:
<select name = "estado">
       <option value ="">selecione --</option>
       <option value ="solteiro">Solteiro</option>
       <option value ="casado">Casado</option>
       <option value="viuvo">Viuvo</option>
       <option value="divorciado">divorciado</option>
       </select>
       <br><br>
       <input type="submit" value="Cadastra Cliente">
       <input type="reset" value="limpar Campos">
       </form>
</body>
</html>