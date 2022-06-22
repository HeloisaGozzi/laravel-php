<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar produtos </title>
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
            <div> <label for= "quantidade"> Estoque </label> <input type="number" name= "quantidade" id="quantidade"</div>
            <div> <label for= "nome"> Nome do Produto </label> <input type="text" name= "nome" id="nome"</div> 
            <div> <label for= "valor"> Preço </label> <input type="number" name= "valor" id="valor"</div> 
            <div> <label for= "descricao"> Descrição do Produto </label> <input type="text" name= "descricao" id="descricao"</div> 
            <button type="submit"> Salvar </button>
        </form>
    </body>
</html>