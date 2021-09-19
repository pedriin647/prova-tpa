<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <div class="container">

    <h2>Receitas</h2>

    <form action="" method="POST">
  <div class="form-group">
    <label for="email">Digite seu email:</label>
    <input type="email" class="form-control" placeholder="ex: email@email.com" id="email" required>
  </div>

  <div class="form-group">
    <label for="nome">Digite o nome do autor</label>
    <input type="text" class="form-control" id="nome" required>
  </div>

  <div class="form-group">
    <label for="titulo">Titulo da receita:</label>
    <input type="text" class="form-control" id="titulo" required>
  </div>

  <div class="form-group">
    <label for="descricao">Descrição da receita:</label>
    <textarea class="form-control" id="descricao" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="preparo">Modo de preparo:</label>
    <textarea class="form-control" id="preparo" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Adicionar</button>
  <button type="reset" class="btn btn-primary">Limpar</button>
    </form>


    </div>


</body>
</html>