<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        display: block;
    }
    h1{
        margin-left: 20px;
    }

    legend {
        border: 2px solid black;
        border-radius: 10px;
        max-height: 100px;
        height: 60px;
        width: 60%;
        margin-top: 10px;
        margin-left: 10px;
    }

    form {
        display: flex;
        flex-direction: row;
    }

    input{
        margin-left: 5px;
    }
    .botao{
        padding: 3px;
        padding-left: 2px;
        padding-right: 2px;
        margin-top: 15px;
        background-color: blueviolet;
        color: aliceblue;
        border-radius: 10px;
    }
    form>div{
        margin-left: 20px;
        margin-top: 10px;
    }
</style>

<body>


    <h1>Agenda de contatos</h1>

    <legend>
        <form action="conexao.php" method="POST">
            <div>
                <h4>Nome: </h4>
                <input type="text" name="nome" >
            </div>
            <div>
                <h4>E-mail: </h4>
                <input type="email" name="email" >
            </div>
            <div>
                <h4>Celular: </h4>
                <input type="text" name="celular" >
            </div>
            <div><input class="botao" type="submit" value="salvar"><input class="botao" type="submit" value="novo"></div>
        </form>
        
            
      
    </legend>
</body>