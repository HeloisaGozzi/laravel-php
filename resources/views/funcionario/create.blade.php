<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar funcionários </title>
    <style>
        :root{
    --cor1:black;
    --cor2:white;
    --fundo:grey;
    --font:'arial';
}
*{
    margin:0;
    padding:0;
    box-sizing:border-box
}

form{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    flex-direction:column;
    border:1px solid var(--cor1);
    padding:7px;
}
label{
    font: normal bold 2vw var(--font);
    color: var(--fundo);
}
input{
    padding:10px;
    border:none;
    text-decoration:none;
    background-color: var(--fundo);
    border-radius: 10px;
    box-shadow:insset 2px 2px 5px black;
    margin:5px;
    transition-duration:1s;
}
input:hover{
    box-shadow:2px 2px 5px black;
}
button{
    padding:15px;
    border:none;
    border-radius:5px;
    transition-duration:1s;
    font: normal bold 1.5vw var(--font);
    color: var(--fundo);
}
button:hover{
    box-shadow:2px 2px 10px black;
}

    </style>
</head>
    <body>
        <form> 
        @csrf

            
                <label for= "nome"> Nome </label><br>
                 <input type="text" name="nome" id="nome"><br>
            
                <label for= "tel"> Telefone </label> <br>
                <input type="number" name="tel" id="tel"><br>
           

            
                 <label for= "gemail"> E-mail </label> <br>
                 <input type="email" name="gemail" id="gemail"><br>
        

            
                <label for= "rgF"> RG </label> <br>
                <input type="number" name="rgF" id="rgF"><br>
            

            
                 <label for= "cpfF"> CPF </label> <br>
                 <input type="number" name="cpfF" id="cpfF"><br>

            <button type="submit"> Salvar </button>

        </form>
    </body>
</html>