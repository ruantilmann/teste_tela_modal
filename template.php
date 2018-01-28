<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#firstModal">Click</button>

    <div class="modal fade" id="firstModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Faltam algumas informações!</h3>
                    <p>Por favor, preencha os campos em branco.</p>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <p>Razão Social: <input type="text" name="razao_s"></p>
                        <p>Nome Fantasia: <input type="text" name="nome_f"></p>
                        <p>CNPJ: <input type="number" name="cnpj"></p>
                        <p>Rua: <input type="text" name="rua"></p>
                        <p>Bairro: <input type="text" name="bairro"></p>
                        <p>Nº: <input type="text" name="num_c"></p>
                        <p>Cidade: <input type="text" name="cidade"></p>
                        <p>Código do Município: <input type="number" name="cod_mun"></p>
                        <p>CEP: <input type="number" name="cep"></p>
                        <p>País: <input type="text" name="pais"></p>
                        <p>Estado: <input type="text" name="estado"></p>   
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default" value="Enviar" name="enviar">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>              
                    </form>
                </div>
            </div>    
        </div>
    </div>
</div>

</body>
</html>