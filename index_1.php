<?php
echo "<br>","Введите переменные:";
echo "<br>";
echo "Выражение:   ";
include 'calc.php';
?>
<form action="/index.php" method="POST">
 <input type="text" name="x">
 <select name="operation">
 <option value="sum">+</option>
 <option value="diff">-</option>
 <option value="del">÷</option>
 <option value="um">×</option>
 </select>
 <input type="text" name="y">
 <button type="submit">Выполнить действие</button>
</form>