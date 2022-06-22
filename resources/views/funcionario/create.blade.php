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
            <div> <label for= "tel"> Telefone </label> <input type="number" name= "tel" id="tel"</div> 
            <div> <label for= "gemail"> E-mail </label> <input type="email" name= "gemail" id="gemail"</div> 
            <div> <label for= "rgF"> RG </label> <input type="number" name= "rgF" id="rgF"</div> 
            <div> <label for= "cpfF"> CPF </label> <input type="number" name= "cpfF" id="cpfF"</div> 

            <button type="submit"> Salvar </button>
        </form>
    </body>
</html>