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
    text-align: center;
    color: white;
    
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
    margin-left: 453px;
    margin-top: -495px;
    width: 898px;
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
    <h1>Veja se você pode ser aprovado(a) em nosso banco</h1>
        <section class="container" id="grid-container">
            <div class="grid">
                <fieldset>
                    <legend>Análise logo a baixo</legend>
                    <form action="analise.php" method="post" target="">
                        <label for="nome">Nome</label><br>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome"><br><br>
                        
                        <label for="data">Data de nascimento</label><br>
                        <input class="data"  type="date" id="data" name="data"><br><br>

                        <label for="salario">Sálario</label><br>
                        <input type="text" id="salario" name="salario" placeholder="Digite seu sálario"><br><br>

                        <label for="profissao">Profissão</label><br>
                        <input type="text" name="profissao" id="profissao" placeholder="Digite sua profissão"><br><br>

                        <input id="enviar" type="submit" name="enviar"><br><br>

                        
                        
                    </form>
                </fieldset>
                <div>
                <img class="imagem" src="./img/teste.jpeg" alt="moça sorrindo">
                </div>

            </div>
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