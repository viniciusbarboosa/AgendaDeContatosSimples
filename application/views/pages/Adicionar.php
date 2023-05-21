<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
      .formulario{
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 40vh; /* opcional para centralizar verticalmente */
    }


    </style>
  </head>
</head>
<body>

<div class="container">

<div>
    <h1 style="text-align: center;">ADICIONAR</h1>
</div>

<div class="formulario">
<form  action="<?= base_url()?>Adicionar/Salvar" method="POST">
  <div style="width:600px;" class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o Nome">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="Insira o Email">
  </div>
  <div class="form-group">
    <label for="numero">Numero</label>
    <input type="text" class="form-control" id="numero" name="numero" placeholder="Insira o Numero de Telefone">
  </div>
  <br>
  <div style="text-align: end;">
  <p>
  <a href="<?= base_url("Home")?>" type="button" class="btn btn-danger">Voltar</a>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </p>
  </div>
</form>
</div>

</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>