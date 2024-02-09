<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software de Patrimônio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Adicione os seus próprios estilos CSS, se necessário -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Software de Patrimônio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Conta</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
        <button href="{{ route('ativos.cadastro') }}" class="btn btn-primary ml-2">Adicionar</button>
        <button class="btn btn-secondary ml-2">Filtrar</button>
        <button class="btn btn-success ml-2">Exportar Excel</button>
    </div>
</nav>

<div class="container mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Cod.ID</th>
                <th scope="col">Intes</th>
                <th scope="col">Categoria</th>
                <th scope="col">Data Aquisição</th>
                <th scope="col">Usuario</th>
                <th scope="col">Departamento</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">S/N</th>
                <!-- Adicione mais colunas conforme necessário -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ativo 1</td>
                <td>MT1000,00</td>
                <td>01/01/2023</td>
                <td>Adriano Antonio</td>
                <td>Limpesa</td>
                <td>Depointe</td>
                <td>N/S</td>
                <td>0000NFC</td>
                <!-- Preencha com dados reais -->
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Ativo 2</td>
                <td>MT 2000,00</td>
                <td>01/02/2023</td>
                <td>Ativo 2</td>
                <td>Ativo 2</td>
                <td>Ativo 2</td>
                <td>Ativo 2</td>
                <td>Ativo 2</td>
                <!-- Preencha com dados reais -->
            </tr>
            <!-- Adicione mais linhas conforme necessário -->
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Adicione seus próprios scripts JavaScript, se necessário -->
</body>
</html>
