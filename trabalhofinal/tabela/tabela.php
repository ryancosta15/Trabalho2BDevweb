<!--All code made by Ryan Costa-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../styles/estilizacao.css">
    <link rel="stylesheet" href="../styles/tabelast.css">
    <link rel="icon" type="image/x-icon" href="../ico/numero.ico">
    <title>Tabela</title>
</head>
<body>
  <!--sidebar-->
  <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="../../abra_primeiro.html">Home</a>
      <a href="../imc/phpform1.html">Imc</a> 
      <a href="../corona/coronazap.html">Coronazap</a>
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
      <fieldset>
        <?php
        //variables
        $value = $_POST ['op'];
        $n = $_POST['n'];
        $i = -1;
        $class= "table";
        $x = 0;
        //table maker
        switch($value){
          //par case
          case 1:
            echo "<legend><h1>Números pares até $n</h1></legend>";
            while ($i<($n-2)/2){
              //variables adding
              $i++;
              $x++;
              //showing table "par"
              echo "<table class=$class>";
              echo"<thead>";
              print "<tr>". ($x)."º número par"."<th>".(2*$i)."</th>";
              echo "</tr>";
              echo "</table>";
              echo"</thead>";    
            }
            break;
          //ímpar case
          case 2:
            echo "<legend><h1>Números ímpares até $n</h1></legend>";
            while ($i<($n)){
              //variables adding
              $i++;
              $x++;
              //showing table "ímpar"
              if($i % 2 == 1 && $i!= $n){
                echo "<table class=$class>";
                echo"<thead>";
                print "<tr>". ($x/2)."º número ímpar"."<th>".($i)."</th>";
                echo "</tr>";
                echo "</table>";
                echo"</thead>";    
              }
            }
            break;
          //if there's no radio answer
          default:
            echo "<h1>Você não marcou par ou ímpar</h1>";
            break;
        }    
        ?>
      </fieldset>
  <!--return-->
  <p><a href="tabela.html"><button>Voltar</button></a></p>
</body>
</html>