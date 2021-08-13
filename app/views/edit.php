<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sensedia - Teste</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/8e85704265.js" crossorigin="anonymous"></script>

    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Sensedia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container-fluid">

        <div class="starter-template">
            <form class="form-horizontal" method="POST" action="<?php echo '/save/'.$pessoa->PessoaId; ?>">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="PrimeiroNome">Primeiro Nome</label>
                            <input type="text" class="form-control" id="PrimeiroNome" name="PrimeiroNome"
                                placeholder="Ex: Fulano" value="<?php echo $pessoa->PrimeiroNome ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="SegundoNome">Segundo Nome</label>
                            <input type="text" class="form-control" id="SegundoNome" name="SegundoNome"
                                placeholder="Ex: de Tal" value="<?php echo $pessoa->SegundoNome ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="Endereco">Endereco</label>
                            <input type="text" class="form-control" id="Endereco" name="Endereco"
                                placeholder="Ex: Rua do Bobo, n 0" value="<?php echo $pessoa->Endereco ?>" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Cidade">Cidade</label>
                            <select class="form-control" name="CidadeId" id="Cidade">
                                <option disabled>Escolha uma cidade</option>
                                <?php foreach($cidades as $cidade) { ?>
                                <option <?php echo $pessoa->cidade->CidadeId == $cidade->CidadeId ? 'selected' : ''; ?>
                                    value="<?php echo $cidade->CidadeId; ?>">
                                    <?php echo $cidade->CidadeDesc; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="DataNascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" id="DataNascimento" name="DataNascimento"
                                value="<?php echo $pessoa->DataNascimento; ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <select class="form-control" name="Status" id="Status">
                                <option disabled selceted>Escolha uma opção</option>
                                <option <?php echo $pessoa->Status == 1 ? 'selected' : ''; ?> value="1">Ativo</option>
                                <option <?php echo $pessoa->Status == 2 ? 'selected' : ''; ?> value="2">Inativo</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row py-4 float-right">
                    <a href="/home" class="btn btn-outline-info mx-3">Voltar</a>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>