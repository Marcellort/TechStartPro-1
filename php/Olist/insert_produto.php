<?php
 include_once ('conexao.php');

 $sql="SELECT * from categorias";
 $result= mysqli_query($conexao,$sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <script src="https://kit.fontawesome.com/9af93cb7cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php require_once "topo.html" ?>
</head>
<body>
    <div class="container">
    <div class=" container col-sm-8 justify-content-center" >
    
    <form method="POST" action="querys/inserirProduto.php">
  <div class="form-group">
    <label for="formGroupExampleInput">Nome do Produto</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Produto">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Descrição do produto</label>
    <input name="desc" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descrição">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Valor</label>
    <input name="value" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Valor do produto">
  </div>
  <div class="form-group">
    <label for="subject">Categoria:</label>
    <select id="Tipo" name="cat" class="form-control" required="required">
    <?php while($dados=mysqli_fetch_array($result)){ ?>
      <option value="<?= $dados['id']; ?>" selected=""><?= $dados['nome'] ?></option>
    <?php } ?>
    </select>
  </div>
  <div class="col-md-12">
    <button class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>