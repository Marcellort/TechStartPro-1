 <?php
 include_once ('conexao.php');

 $sql="SELECT produtos.id,produtos.nome,produtos.descricao,produtos.valor,produtos.categorias,categorias.nome as Categoria FROM olist.produtos inner join categorias on categorias.id=produtos.categorias";

 $result= mysqli_query($conexao,$sql);

 ?>
 <script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
   document.location = 'querys/deleteProduto.php?id='+delUrl;
  }
}
</script>
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

</div>
    <div class="container">
    <div class="card shadow mb-4">
          <div class="card-header">
                <h4 class="mb-0 text-gray-800">Meus Produtos</h4>
                </div>
         <div class="card-body">
            <form  method="POST" action="listProdutos.php">
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Busca" name="text" required>
                    </div>
                    <div class="col-sm-4">
                        <select id="Tipo" name="filter" class="form-control" required="required">
                            <option value="name" selected="">Nome Produto</option>
                            <option value="desc" selected="">Descrição</option>
                            <option value="value" selected="">Valor máximo</option>
                            <option value="cat" selected="">Categoria</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
                            </form>
            <!-- inicio da tabela -->
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      
                      <th>Produto</th>
                      <th>Descrição</th>
                      <th>Valor</th>
                      <th>Categorias</th>
                      <th>Ações</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php

		while($dados=mysqli_fetch_array($result)){	

		?>
                      <tr>
                      <td><?php echo $dados['nome'];?></td>
                      <td><?php echo $dados['descricao'];?></td>
                      <td><?php echo $dados['valor'];?></td>
                      <td><?php echo $dados['Categoria'];?></td>
                      <td>
                          <a href="update_produto.php?id=<?= $dados['id'];?>&name=<?= $dados['nome'];?>&desc=<?= $dados['descricao'];?>&value=<?= $dados['valor'];?>&cat=<?= $dados['categorias'];?>"><i class="fas fa-edit"></i></a>
                          <a href="javascript:confirmDelete('<?= $dados['id'] ?>')"><i class="fas fa-trash"></i></a>
                      </td>
              
                    </tr>


                    <?php } ?>
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo Deletar o registro?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="querys/deleteProduto.php?id=<?= $dados['id'];?>" type="button" class="btn btn-primary">Deletar</a>
      </div>
    </div>
  </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>