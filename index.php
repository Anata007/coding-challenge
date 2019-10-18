<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="index.php" method="post" pattern = "/d*">
      <input type="number" name="angka1" value="">
      x
      <select class="" name="pilihan">
        <option value="+" name="plus">+</option>
        <option value="-" name="minus">-</option>
      </select>
      <input type="number" name="angka2" value="">
      =
      <input type="number" name="angka3" value="">
      <br> <br>
      <input type="submit">
      <br> <br>
    </form>
    <?php
      echo $_POST['angka1'];
      echo "x";
      echo $_POST['pilihan'];
      echo $_POST['angka2'];
      echo "=";
      echo $_POST['angka3'];
       echo "<br><br>";
      if ($_POST['pilihan'] == "+") {
        $a = $_POST['angka3'];
        $b = $_POST['angka2'];
        $c = $_POST['angka1'];
        $d = $a-$b;
        $e = $d/$c;
        echo "jadi variabel x adalah".$e;
      }else {
        $a = $_POST['angka3'];
        $b = $_POST['angka2'];
        $c = $_POST['angka1'];
        $d = $a+$b;
        $e = $d/$c;
        echo "jadi variabel x adalah".$e;
      }
     ?>
  </body>
</html>
