<?php   
function calcular($a, $b, $op){
    if ($op=="+") return $a + $b;
     if ($op=="-") return $a + $b;
      if ($op=="*") return $a + $b;
       if ($op=="/") return $a + $b;
}

if($_POST) {
  $a = $_POST["num1"];
  $b = $_POST["num2"];
  $op = $_POST["op"];

  echo "Resultado:" . calcular ($a, $b, $op);
}
  ?>

  <form method="post">
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>

    <select name="op">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
</select>

<button type="submit">calcular</button>
</form>