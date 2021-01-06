 <div class="title-pg">
    <h1 class="title-pg">Listagem dos Itens</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        <form class="form form-inline">
            <input type="text" name="nome" placeholder="Nome:" class="form-control">
            <input type="text" name="email" placeholder="E-mail:" class="form-control">

            <button class="btn btn-search">Pesquisar</button>
        </form>

    <div class="class-btn-insert">
        <a href="?pag=forms" class="btn-insert">                        
            <i class="bi bi-person-plus"></i>
            Cadastrar
        </a>
    </div>

    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col" width="150">Ação</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 1; $i <= 10; $i++) {?>
            <tr>
              <th scope="row"> <?php echo $i; ?> </th>
                <td>Mark</td>
                <td>@mdo</td>
                <td>
                    <a href="" class="edit">Edit</a>
                    <a href="" class="delete">Deletar</a>
                </td>
              </tr>

        <?php } ?>

       </tbody>     
    </table>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </nav>                

            </div> <!-- Conteúdo dinâmico -->