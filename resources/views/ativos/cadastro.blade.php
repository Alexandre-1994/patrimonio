<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ativos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Adicione os seus próprios estilos CSS, se necessário -->
</head>
<body>

<div class="container mt-4">
    <h2>Cadastro de Ativos</h2>
    <form action="{{ route('ativos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Ativo:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="form-group">
            <label for="data_aquisicao">Data de Aquisição:</label>
            <input type="date" class="form-control" id="data_aquisicao" name="data_aquisicao" required>
        </div>
        <!-- Adicione mais campos conforme necessário -->
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Adicione seus próprios scripts JavaScript, se necessário -->
</body>
</html>
