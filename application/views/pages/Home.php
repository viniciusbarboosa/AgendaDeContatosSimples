<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--SCRIPT FONT AWESSOME-->
    <script src="https://kit.fontawesome.com/e56cfcec1d.js" crossorigin="anonymous"></script>
  </head>
</head>
<body>

<div class="container">

<div style="text-align:center;">
   <h1>AGENDA DE CONTATOS</h1>
</div>

<?php  if(!empty($alerta)){
  
  ?>
  <?php  if($alerta == 'Deletado Com Sucesso'){

    ?>
    <div class="alert alert-danger" role="alert">
    <?= $alerta ?>
    </div>
    <?php
  }else if($alerta == 'Adicionado Com Sucesso'){ ?>
<div class="alert alert-success" role="alert">
    <?= $alerta ?>
</div>

<?php   
}else if($alerta == 'Editado Com Sucesso'){
  ?>
<div class="alert alert-success" role="alert">
    <?= $alerta ?>
</div>
<?php
}


}
?>

<div style="text-align:end; display:flex; justify-content: end;">


    <form style="margin-right:10px;"  action="<?php echo base_url() ?>home/pesquisa" method="post">
		  	<input class="form-control form-control-dark" type="text" name="busca" id="busca" placeholder="Search" aria-label="Search" value="">
		</form>

  
  <a  href="<?= base_url('Adicionar') ?>" class="btn btn-success">ADICIONAR</a>
  
</div>
<br>


   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">NUMERO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">AÇÃO</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contatos as $key => $value) {
      
     ?>
    <tr>
      <th scope="row"><?= $value['id']?></th>
      <td><?= $value['nome']?></td>
      <td><?= $value['numero']?></td>
      <td><?= $value['email']?></td>
      <td>
        <a href="<?= base_url('Editar/Editando') ?>/<?= $value['id'] ?>" type="button" class="btn btn-primary"><i class="fa-solid fa-pen"></i></a>
        <a href="<?= base_url('Deletar/Delete') ?>/<?= $value['id'] ?>" type="button" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
      </td>
    </tr>
    <?php }  ?>
  </tbody>
</table>

</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>