<?PHP
    if(isset($_POST['cep']) && !empty($_POST['cep'])){

        $cep = $_POST['cep'];
        $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");

        $dadosEndereco = json_decode($resultado, true);

       //var_dump($dadosEndereco);

    }else{
        header("location:buscar-endereco.php");
        exit;
    }
?>

<html>

    <head>
         <meta charset="utf-8">
         <title>Dados do CEP</title>
    </head>
    <body>
    <h1>Endereço</h1>
    <hr>
    <P>CEP: <?=$dadosEndereco['cep'] ?></P>
    <p>Lougadouro: <?=$dadosEndereco['logradouro'] ?></p>
    <p>Birro: <?=$dadosEndereco['bairro'] ?></p>
    <p>Cidade <?=$dadosEndereco['localidade'] ?></p>
    <p>Cidade <?=$dadosEndereco['uf'] ?></p>
    
    </body>
</html>