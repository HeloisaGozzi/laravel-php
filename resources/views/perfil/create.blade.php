<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar funcionários </title>
    <style> 
        label{
            float:left;
            display: block; 
            width:90px;
        }
</head>
    <body>
        <form> 
        @csrf
            <div> <label for= "nome"> Nome </label> <input type="text" name= "nome" id="nome"</div>
            <div> <label for= "gemail"> E-mail </label> <input type="email" name= "gemail" id="gemail"</div> 
            <div> <label for= "senha"> Senha </label> <input type="number" name= "senha" id="senha"</div> 
            <div> <label for= "cep"> CEP </label> <input type="number" name= "cep" id="cep"</div> 
            <div> <label for= "ncasa"> Número de Casa </label> <input type="number" name= "ncasa" id="ncasa"</div> 

            <button type="submit"> Salvar </button>
        </form>
    </body>
</html>