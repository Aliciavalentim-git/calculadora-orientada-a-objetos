<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calculadora digital</title>
</head>
<body>

  <form action="principal.php" method="POST">

    <label> Digite um número:</label>
    <input type="number" name="numero1">
       <br> <br> 

    <label> Digite o segundo numero>:</label>
    <input type="number" name="numero2">
       <br> <br>

    <label> Escolha a sua operação: </label>
    <select name="operação">

      <option value="soma"> Soma </option>
      <option value="subtração"> Subtração </option>
      <option value="multiplicação"> Multiplicação </option>
      <option value="divisão"> Divisão </option>

    </select>
       <br><br>

       <input type="submit" value="Realizar conta">
       <input type="reset" value="Apagar">
   
  </form> 
</body>
</html>