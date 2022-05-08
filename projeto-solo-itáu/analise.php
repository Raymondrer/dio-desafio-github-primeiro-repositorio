<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itaú</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <style type="text/css">

    *{
        margin: 0;   
    }

html{
    width: 100%;
}

header{
    background-color: #EC7000;
    position: fixed;
    width: 100%;
    padding: 16px;
    display: inline;
}

    img{
        
        height: 15%;
        width: 8%;
        margin-left: 40px ;
        float: left;
        
    }

    h2{
        vertical-align: baseline;
        text-align: left;
        padding-top: 25px ;
        color: white
}
#alteracao{
    background-color: #EC7000;
    padding-top:150px ;
    text-align: left;
    color: white;
    padding-bottom: 100px;
    
}
.grid{
    text-align: left;
    padding-top: 50px;
    font-size: 1.7rem;
    display: grid;
    grid-template-columns: 2fr;
}
fieldset{
    border-radius: 10px;
    border: solid;
    color: white;
    width: 30%;

}
input{
    border: solid white;
    border-radius: 10px;
    
}
.data{
    color: #EC7000;
}
::placeholder{
    color: #EC7000;
    padding: 3px;
    font-size: 0.8rem;
}
.imagem{
    margin-left: 300px;
    margin-top: -200px;
    width: 500px;
    height: 495px;
}

footer{
    background-color: #696969;
    color: white;
    text-align: center;
    height: 100%;
    width: 100%;
    padding:50px;
}
h3{
    text-align: left;
}
 #enviar{
     background-color: white;
     color: #EC7000;
 }

 a{
     text-decoration: none;
     text-align: left;

}
h1{
    text-align: center;
}

    </style>
</head>
<body>

<header>
<div>    
<div >
    <img src="./img/itau.png.png" alt="itaú">  
</div>
    <div>
    <h2>Análise seu crédito</h2>
    </div>
</div>   
</header>

<section id="alteracao">
    <h1>Resultado da sua análise</h1>
        <section class="container" id="grid-container">
           <h2>Verifique logo a baixo</h2><br><br>

<?php

$nome= $_POST["nome"];
$data= $_POST["data"];
$salario= $_POST["salario"];
$profissao= $_POST["profissao"];

echo "Olá Sr(a) $nome, seja bem vindo(a) a página de resultados <br><br>";

if($salario >= 2000){
    echo "Parábens, você foi <b>APROVADO<b><br><br>";
    echo "Em breve um de nossos representantes entrará em contato com você.";

}

else{
    echo "<b>NEGADO<b> Tente novamente mais tarde.";
}
?>                
<br><br>
<a href= "index.php"><h4><b>Clique aqui para voltar</b></h4> </a>
        </section>

</section>

<footer>
   <h3>Banco Itaú</h3><br>
   <h5>CNPJ:000000/00-000</h5><br>
   <h5>Localização: Fortaleza, CE</h5><br>
   <h5>Criação: Lucas Macedo</h5>
</footer>
    
</body>
</html>