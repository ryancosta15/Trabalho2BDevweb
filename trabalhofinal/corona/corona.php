<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estilozap.css">
    <link rel="stylesheet" href="../styles/estilizacao.css">
    <link rel="icon" type="image/x-icon" href="../ico/whatsapp.ico">
    <title>Coronazap</title>
</head>
<body>
    <!--sidebar-->
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <a href="../../abra_primeiro.html">Home</a>
      <a href="../imc/phpform1.html">Imc</a> 
      <a href="coronazap.html">Coronazap</a>
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
    <!--answer-->
    <fieldset>
        <legend><h1>Você perguntou sobre...</h1></legend>
        <?php
        //variables
        $value = $_POST['info'];
        $link = "https://informe.ensp.fiocruz.br/noticias/48548";
        //message depending on the value
        switch ($value) {
            case 1:
                echo "<legend><h1> O Coronavírus </h1></legend>";
                echo "Os coronavírus são um grupo de vírus de genoma de RNA simples de sentido positivo (serve diretamente para a síntese proteica), conhecidos desde meados dos anos 1960. Pertencem à subfamília taxonómica Orthocoronavirinae da família Coronaviridae, da ordem Nidovirales. <br>
                A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida. Eles são uma causa comum de infecções respiratórias brandas a moderadas de curta duração. Entre os coronavírus encontra-se o vírus causador da forma de pneumonia atípica grave conhecida por SARS, e o vírus causador da COVID-19, responsável pela pandemia em 2020 e 2021.";
                break;
            case 2:
                echo "<legend><h1> Transmissão </h1></legend>";
                echo "O vírus pode se espalhar pela boca ou pelo nariz de uma pessoa infectada, em pequenas partículas líquidas expelidas quando elas tossem, espirram, falam, cantam ou respiram. O tamanho dessas partículas vai de gotas respiratórias maiores até aerosois menores. <br>
                A infecção pode ocorrer caso você inale o vírus quando estiver perto de alguém que tenha COVID-19 ou se você tocar em uma superfície contaminada e, em seguida, passar as mãos nos olhos, no nariz ou na boca. O vírus se espalha com mais facilidade em locais fechados e em multidões.";           
            break;
            case 3:
                echo "<legend><h1> Sintomas </h1></legend>";
                echo "Os principais sintomas da COVID-19 são: febre, tosse, cansaço e perda de paladar ou olfato <br>
                porém em estados graves podem ocorrer: dores no peito, dificuldade para respirar/falta de ar e perdade mobilidade, fala ou confusão.";
                break;
            case 4:
                echo "<legend><h1> Prevenção </h1></legend>";
                echo "Para se previnir da doença você deve: <br>
                <ul>
                    <li> Manter uma distância segura de outras pessoas (pelo menos 1 metro), mesmo que elas não pareçam estar doentes. </li>
                    <li>Usar máscara em público, especialmente em locais fechados ou quando não for possível manter o distanciamento físico. </li>
                    <li>Prefirir locais abertos e bem ventilados em vez de ambientes fechados (abra uma janela se estiver em um local fechado). </li> 
                    <li>Limpar as mãos com frequência. Use sabão e água ou álcool em gel. </li>
                    <li>Tomar a vacina quando chegar a sua vez. Siga as orientações locais para isso. </li>
                    <li>Cubrir o nariz e a boca com o braço dobrado ou um lenço ao tossir ou espirrar. </li>
                    <li>Ficar em casa se você sentir indisposição. </li>
                </ul>";  
                break;
            case 5:
                echo "<legend><h1> Diagnóstico </h1></legend>";
                echo "<h2> Diagnóstico clínico </h2>
                O quadro clínico inicial da doença é caracterizado como Síndrome Gripal (SG). O diagnóstico pode ser feito por investigação clínico-epidemiológica, anamnese e exame físico adequado do paciente, caso este apresente sinais e sintomas característicos da
                covid-19. <br> Deve-se considerar o histórico de contato próximo ou domiciliar nos 14 dias anteriores ao aparecimento dos sinais e sintomas com pessoas já confirmadas para covid-19. <br>
                <h2> Diagnóstico laboratorial </h2>
                O diagnóstico laboratorial pode ser realizado tanto por testes de biologia molecular, sorologia ou testes rápidos. <br>
                <h3> Biologia molecular: </h3> permite identificar a presença do material genético (RNA) do material genético (RNA) do vírus SARS-CoV-2 em amostras de secreção respiratória, por meio das metodologias de RT-PCR em tempo real (RT-qPCR) e amplificação isotérmica mediada por loop com transcriptase reversa (reverse transcriptase loop-mediated isothermal amplification, RT-LAMP).<br>
                <h3>Sorologia: </h3> detecta anticorpos IgM, IgA e/ou IgG produzidos pela resposta imunológica do indivíduo em relação ao vírus SARS-CoV-2, podendo diagnosticar doença ativa ou pregressa. As principais metodologias são: Ensaio Imunoenzimático (Enzyme-Linked Immunosorbent Assay – Elisa), Imunoensaio por Quimioluminescência (Clia) e Imunoensaio por Eletroquimioluminescência (Eclia). <br>
                <h3>Testes rápidos: </h3> Estão disponíveis dois tipos de testes rápidos, de antígeno e de anticorpo, por meio da metodologia de imunocromatografia. O teste rápido de antígeno detecta proteína do vírus em amostras coletadas de naso/orofaringe, devendo ser realizado na infecção ativa (fase aguda) e o teste rápido de anticorpos detecta IgM e IgG (fase convalescente), em amostras de sangue total, soro ou plasma.";
                break;
            case 6:
                echo "<legend><h1> Isolamento domiciliar </h1></legend>";
                echo "Em caso de diagnóstico positivo para COVID-19: <br>                    
                <ul>
                    <li>
                        A pessoa deverá permanecer em isolamento domiciliar, separado das outras pessoas, mesmo que ocorra melhora dos sintomas, pelo período mínimo de 10 dias a partir do 1º dia dos sintomas. Em alguns casos, esse tempo de isolamento poderá ser ampliado devido ao agravamento dos sintomas ou não resolução dos mesmos.
                    </li> <br>
                    <li>
                        Deverá retornar para avaliação médica se sentir piora dos sintomas ou falta de ar, sempre com uso de máscara, mantendo os cuidados de higiene no trajeto. Se for possível, evitar o transporte público.</li><br>
                    <li>Utilizar máscara o tempo todo e trocar toda vez que estiver úmida, danificada e/ou com muito tempo de uso (usar no máximo 4 horas)</li> <br>
                    <li>
                        Se houver necessidade de cozinhar, lavar as mãos e usar máscara de proteção, cobrindo boca e nariz todo o tempo.<br>
                        Após uso do banheiro, lavar as mãos com água e sabão, limpar vaso, pia e demais superfícies com álcool 70% ou água sanitária para desinfecção do ambiente.
                    </li> <br>
                    <li>
                        Não compartilhar ítens pessoais, mantendo uso individual para itens como toalha de banho, roupa de cama, garfo, faca, colher, copo e demais objetos ou equipamentos. <br>
                        A pessoa isolada deve trocar a própria roupa de cama e embalar em um saco plástico. Aumentar a freqüência de troca da roupa de cama e de banho, lavar as roupas com água e sabão, deixar secar e passar.
                    </li> <br>
                    <li>
                        Sofás, cadeiras e cama também não podem ser compartilhados e precisam ser limpos frequentemente com água sanitária ou álcool 70%.
                    </li> <br>
                    <li>
                        O cômodo com a pessoa isolada deve permanecer como a porta fechada o tempo todo. Mas a janela deve ser mantida aberta para ventilação e entrada de luz solar. Limpe a maçaneta frequentemente com álcool 70% ou água sanitária. <br>
                        O lixo produzido precisa ser separado e descartado. É importante manter uma lixeira ao lado da cama com saco plástico, para jogar o lixo. Quando o recipiente estiver cheio, a pessoa deve fechar a sacola e só depois despejar em lixeiras diferentes.
                    </li>
                </ul>";
                break;
            case 7:
                echo "<legend><h1> Tratamento </h1></legend>";
                echo "Após a exposição a uma pessoa com COVID-19, siga estas orientações: <br>
                <ul>
                    <li>
                        Ligue para seu prestador de cuidados de saúde ou para uma central de informações sobre a doença para descobrir onde e quando você pode fazer um teste.
                    </li> <br>
                    <li>
                        Informe outras pessoas com quem você teve contato para impedir a propagação do vírus.
                    </li> <br>
                    <li>
                        Caso não seja possível fazer o teste, fique em casa e pratique o distanciamento social por 14 dias.
                    </li> <br>
                    <li>
                        Enquanto estiver em quarentena, não vá ao trabalho, à escola ou a espaços públicos. Peça para alguém levar itens essenciais até você.
                    </li> <br>
                    <li>
                        Mantenha pelo menos um metro de distância de outras pessoas, incluindo membros da sua família.
                    </li> <br>
                    <li>
                        Use uma máscara para proteger os outros, até mesmo se/quando você precisar procurar atendimento médico.
                    </li> <br>
                    <li>
                        Higienize as mãos com frequência.
                    </li> <br>
                    <li>
                    Fique em um cômodo separado dos outros membros da sua família. Se isso não for possível, use máscara.
                    </li> <br>
                    <li>
                        Mantenha o ambiente bem ventilado.
                    </li> <br>
                    <li>
                        Se você divide o quarto com alguém, deixe um metro de distância entre as camas.
                    </li> <br>
                    <li>
                        Preste atenção por 14 dias para ver se você apresenta sintomas.
                    </li> <br>
                    <li>
                        Ligue para o prestador de cuidados de saúde imediatamente se você apresentar qualquer um destes sintomas: dificuldade para respirar, perda da fala ou da mobilidade, confusão ou dores no peito.
                    </li> <br>
                    <li>
                        Mantenha contato com seus entes queridos por telefone ou on-line e faça exercícios para manter o pensamento positivo.
                    </li>
                </ul>";
                break;
            case 8:
                echo "<legend><h1> Ação no Brasil </h1></legend>";
                echo "O Governo Federal vem adotando medidas urgentes em função da emergência de saúde pública de importância internacional decorrente do coronavírus. O objetivo é canalizar a atuação dos órgãos e instituções públicas na luta contra a pandemia.";
                break;
            case 9:
                echo "<legend><h1> Real ou Fake </h1></legend>";
                echo "Com a manifestação do vírus, informações falsas vem sendo passadas, para se alertar entre no link a seguir";
                echo " <mark style=\"background-color:white;\"><a href= $link> (link)</a></mark> que é um site da fiocruz feito para desmitificar informações imprecisas ou falsas sobre a COVID-19";
                break;
            case 10:
                echo "<legend><h1> Profissional de saúde </h1></legend>";
                echo "• 3,5 milhões de trabalhadores atuam no Sistema Único de Saúde (SUS). <br>
                • Principais desafios enfrentados por esses trabalhadores no momento: falta de
                equipamentos de proteção individual (EPI), sobrecarga de trabalho e impactos na saúde
                mental. <br>
                • O número de trabalhadores infectados ainda é incerto¹. Até dia 14 de maio foram²: <br>
                31.790 casos confirmados <br>
                114.301 em investigação <br>
                53.677 descartados<br> 
                199.768 profissionais precisaram ser afastados <br>
                •Segundo dados preliminares do Ministério da Saúde, a categoria mais afetada é a
                dos técnicos ou auxiliares de enfermagem (34,2%), seguida da categoria dos
                enfermeiros (16,9%) e dos médicos (13,3%)³. Números estes preocupantes por conta
                do impacto na força de trabalho para atuar no combate à doença. <br>
                •Todo profissional que apresenta quadro de síndrome gripal tem de ser afastado
                preventivamente.";
                break;
            case false:
                echo "<h1>Você não ecolheu nenhuma opção</h1>";
                echo "<h2>Volte e escolha alguma</h2>";
                break;
            }
        ?>
        <!--return-->
        <p><a href="coronazap.html"><button>Voltar</button></a></p>
    </fieldset>
</body>
</html>