<?php include 'inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <h1>Livros</h1>
            <div class="mb-3 row">
                <p>Filtrar por:</p>
                <select class="form-select col-md-6 ms-3" aria-label="Filtro de Livros">
                    <option value="1">Série</option>
                    <option value="2">Gênero</option>
                </select>
            </div>
            <div class="row">
                <div class="alert alert-primary" role="alert">
                    Nenhum <strong>Livro</strong> foi criado. 
                    <br>Você está a um passo da magia dos contadores de história.
                    <br>Você pode criar seu primeiro <strong>Livro</strong> agora mesmo:
                </div>
                <a class="btn btn-primary" href="post-new.php?post_type=livros">Criar meu primeiro <strong>Livro</strong></a>
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