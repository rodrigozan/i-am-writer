<?php include 'inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <h1>Personagens</h1>
            <div class="mb-3 row">
                <p>Filtrar por:</p>
                <select class="form-select col-md-6 ms-3" aria-label="Filtro de Personagens">
                    <option selected>Livro</option>
                    <option value="1">Conto</option>
                    <option value="2">Série</option>
                    <option value="3">Raça</option>
                    <option value="4">Etnia</option>
                    <option value="5">Arquétipo</option>
                    <option value="3">Função Dramática</option>
                </select>
            </div>
            <div class="row">
                <div class="alert alert-primary" role="alert">
                    Nenhum <strong>Personagem</strong> foi criado. 
                    <br>O <strong>Personagem</strong> é a alma da sua história, então vale a pena investir tempo em sua criação.
                    <br>Você pode criar seu primeiro personagem agora mesmo:
                </div>
                <a class="btn btn-primary" href="post-new.php?post_type=personagens">Criar meu primeiro <strong>Personagem</strong></a>
            </div>
        </div>
    </div>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
        crossorigin="anonymous">
    </script>
</body>
</html>