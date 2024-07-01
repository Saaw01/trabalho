<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $tel = htmlspecialchars($_POST['telefone']);
    $ema = htmlspecialchars($_POST['email']);
    $rua = htmlspecialchars($_POST['rua']);
    $num = htmlspecialchars($_POST['numero']);
    $bai = htmlspecialchars($_POST['bairro']);
    $hab1 = htmlspecialchars($_POST['habi1']);
    $hab2 = htmlspecialchars($_POST['habi2']);
    $hab3 = htmlspecialchars($_POST['habi3']);
    $resum = htmlspecialchars($_POST['texto']);
    $experi1 = htmlspecialchars($_POST['exp1']);
    $experi2 = htmlspecialchars($_POST['exp2']);
    $carg = htmlspecialchars($_POST['carg']);
    $carg2 = htmlspecialchars($_POST['carg2']);
    $data2 = htmlspecialchars($_POST['data2']);
    $data3 = htmlspecialchars($_POST['data3']);
    $ed1 = htmlspecialchars($_POST['educaçao']);
    $ed2 = htmlspecialchars($_POST['educaçao1']);
    $ed3 = htmlspecialchars($_POST['educaçao3']);
    $ed4 = htmlspecialchars($_POST['educaçao4']);
    $dat4 = htmlspecialchars($_POST['data4']);
    $dat5 = htmlspecialchars($_POST['data5']);
    








}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <main id="cont">
      <div id="esquerda">
                <div id="linha"></div>
                <img id="foto" src="https://static.vecteezy.com/system/resources/previews/020/911/737/non_2x/user-profile-icon-profile-avatar-user-icon-male-icon-face-icon-profile-icon-free-png.png">
                     <p id="nome"> <?= $nome ?> </p>
                 <br>
                 <h1 id="Contato" >Contato</h1>
                 <br>
                 <img id="imgtelefone" src="https://cdn-icons-png.flaticon.com/128/455/455705.png">
                     <p id="telefone"> <?= $tel ?> </p>
                 <img id="imgemail" src="https://cdn-icons-png.flaticon.com/128/3178/3178158.png" >
                     <p id="email"> <?= $ema ?> </p>
                <div id="linha2"></div>
                 <h1 id="endereço" >Endereço</h1>
                 <img id="imgrua" src="https://cdn-icons-png.flaticon.com/128/1535/1535705.png" >
                     <p id="rua"> <?= $rua ?> </p>
                     <p id="numero"> <?= $num ?> </p>
                     <p id="bairro"> <?= $bai ?> </p>
                <div id="linha3"></div> 
                 <h1 id="hab">Habilidades competencias</h1>
                 <p id="hab1"> <?= $hab1 ?> </p>
                 <p id="hab2"> <?= $hab2 ?> </p>
                 <p id="hab3"> <?= $hab3 ?> </p>
                 
</div>
        <div id="meio">
           <h1 id="titulo">Resumo</h1>
           <div id="linhameio"></div>
           <div id="barra">
           <p id="textresumo"> <?= $resum ?> </p>
        </div>
           <div id="lm2"></div>
           <h1 id="expmeio">Experiência Profissional</h1>
           <p id="exp1"> <?= $experi1 ?> </p>
           <p id="exp2"> <?= $experi2 ?> </p>
           <p id="cargo"> <?= $carg ?> </p>
           <p id="cargo2"> <?= $carg2 ?> </p>
           <p id="data2"> <?= $data2 ?> </p>
           <p id="data3"> <?= $data3 ?> </p>
           <div id="lm3" ></div> 
           <h1 id="educação" name="educação"> Educação</h1>
           <p id="ed1"> <?= $ed1 ?> </p>
           <p id="ed2"> <?= $ed2 ?> </p>
           <p id="ed3"> <?= $ed3 ?> </p>
           <p id="ed4"> <?= $ed4 ?> </p>
           <p id="data4"> <?= $dat4 ?> </p>
           <p id="data5"> <?= $dat5 ?> </p>

           <button id="imprimir" onclick="imprimirPagina()"> <strong>IMPRIMIR</strong></button>
              








</body>
<script>
                /ATIVANDO A FUNÇÃO DE IMPRIMIR/
                function imprimirPagina() {
                window.print();
}
        </script>
</html>