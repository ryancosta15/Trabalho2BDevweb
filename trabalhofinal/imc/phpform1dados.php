<!--All code made by Ryan Costa-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/estiloform1.css">
    <link rel="stylesheet" href="../styles/estilizacao.css">
    <link rel="icon" type="image/x-icon" href="../ico/bmi.ico">
    <title>Resultado</title>
</head>
<body>
    <!--sidebar-->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="../../abra_primeiro.html">Home</a>
      <a href="phpform1.html">Imc</a> 
      <a href="../corona/coronazap.html">Coronazap</a>
      <a href="../tabela/tabela.html">Tabela</a>
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
    $name = $_POST['name'];
    $age = $_POST['age'];
    //message depending on the age
    switch ($age){
        case ($age >= 0.1 && $age <= 1):
            $agemsg = "Bebê";
            $ageimg = "../imagens/babyimg.jpg";
            $agealt = "bebê";
        break;
        case ($age >= 2 && $age < 12):
            $agemsg = "Criança";
            $ageimg = "../imagens/kidimg.jpg";
            $agealt = "criança";
            break;
        case ($age >= 12 && $age < 18): 
            $agemsg = "Adolescente";
            $ageimg = "../imagens/adolescente.jpg";
            $agealt = "adolescente";
            break;
        case ($age >= 18 && $age < 59):
            $agemsg = "Adulto";
            $ageimg = "../imagens/adulto.jpg";
            $agealt = "adulto";
            break;
        case ($age >=60 && $age <=119): 
            $agemsg = "Idoso";
            $ageimg = "../imagens/idosoimg.jpg";
            $agealt = "idoso";
            break;
        case ($age >119 ): 
            $agemsg = "morto";
            $ageimg = "../imagens/morto.jpg";
            $agealt = "cova";
            break;
    }
    ?>
    <!--display name-->
    <h1><?php echo"Olá $name!"?></h1>
    <h2>Você é um</h2>
    <!--display message-->
    <h1 class="redtxt"><?php echo "$agemsg"?></h1>
    <figure>
        <?php
        //display image
        echo "<img src='$ageimg' alt='$agealt'/>";
        ?>
    </figure>
    <?php
    //variables
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $imc = $weight / $height **2; 
    //message depending on the imc
    switch ($imc){
        case ($imc >= 1 &&$imc < 18.5):
            $imcmsg = "Abaixo do peso";
            $imcimg = "../imagens/abaixodopeso.jpg";
            $imcalt = "esqueleto";
            break;
        case ($imc >= 18.5 && $imc < 24.9):
            $imcmsg = "Peso ideal";
            $imcimg = "../imagens/pesoideal.jpg";
            $imcalt = "doutora feliz";
            break;
        case ($imc >= 25 && $imc <= 29.9):
            $imcmsg = "Sobrepeso";
            $imcimg = "../imagens/sobrepeso.jpg";
            $imcalt = "barriga de chopp";
            break;
        case ($imc >= 30 && $imc <= 34.9):
            $imcmsg = "Obesidade grau I";
            $imcimg = "../imagens/obesidade1.jpg";
            $imcalt = "gordox";
            break;
        case ($imc >= 35 && $imc <= 39.9):
            $imcmsg = "Obesidade grau II";
            $imcimg = "../imagens/obesidade2.jpg";
            $imcalt = "pessoa rindo da comida";
            break;
        case ($imc >= 40):
            $imcmsg = "Obesidade grau III (vai pro médico pf)";
            $imcimg = "../imagens/obesidade3.jpg";
            $imcalt = "pessoa no médico";
            break;
    }   
    ?>
    <!--display imc-->
    <h2>Seu IMC é</h2>
    <h1 class="redtxt"><?php echo number_format($imc, 1, ',') . " ($imcmsg)";?></h1>
    <figure>
        <?php   
        //display image
        echo "<img src='$imcimg' alt='$imcalt'/>";
        ?>
    </figure>
    <!--return-->
    <p><a href="phpform1.html"><button>Voltar</button></a></p>
</body>
</html>
