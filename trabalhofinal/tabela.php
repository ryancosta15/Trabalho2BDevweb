<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="estilizacao.css">
    <link rel="stylesheet" href="styles/tabelast.css">
    <link rel="icon" type="image/x-icon" href="ico/whatsapp.ico">
    <title>Tabela</title>
</head>
<body>
  <!--sidebar-->
  <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="página_inicial.html">Home</a>
      <a href="phpform1.html">Imc</a> 
      <a href="coronazap.html">Coronazap</a>
      <a href="tabela.html">Tabela</a>
    </div>  
    <div id="main">
      <button class="openbtn" onclick="openNav()">☰ </button>  
    </div>
    <!--script-->
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }  
      </script>
  <?php
  //variables
  $value = $_POST ['op'];
  $n = $_POST['n'];
  $i = -1;
  $class= "table";
  //table maker
  switch($value){
    case 1:
      echo "<h1>números pares até $n</h1>";
      while ($i<($n-2)/2){
        $i++;
        echo "<table class=$class>";
        echo "<tr>";
        print("<td>".  (2*$i)."</td>");
        echo "</tr>";
        echo "</table>";     
      }
      break;
    case 2:
      echo "<h1>números ímpares até $n</h1>";
      while ($i<($n)){
        $i++;
        if($i % 2 == 1 && $i!= $n){
          echo "<table class=$class>";
          echo "<tr>";
          print("<td>".  ($i) ."</td>");
          echo "</tr>";
          echo "</table>";
        }
      }
      break;
    default:
      echo "<h1>Você não marcou par ou ímpar</h1>";
      break;
  }    
  ?>
  <!--return-->
  <p><a href="tabela.html"><button>Voltar</button></a></p>
</body>
</html>