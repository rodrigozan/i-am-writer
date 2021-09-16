<?php include 'inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <h1>Contos</h1>
            <div class="mb-3 row">
                <p>Filtrar por:</p>
                <select class="form-select col-md-6 ms-3" aria-label="Filtro de Contos">
                    <option value="1">Série</option>
                    <option value="2">Gênero</option>
                    <option value="3">Antologia</option>
                    <option value="4">Spin Off de Livro</option>
                </select>
            </div>
            <div class="row">
                <div class="alert alert-primary" role="alert">
                    Nenhum <strong>Conto</strong> foi criado. 
                    <br>Prepare-se para narrar uma aventura épica em forma de <strong>Conto</strong>.
                    <br>Você pode criar seu primeiro <strong>Conto</strong> agora mesmo:
                </div>
                <a class="btn btn-primary" href="post-new.php?post_type=conto">Criar meu primeiro <strong>Livro</strong></a>
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>