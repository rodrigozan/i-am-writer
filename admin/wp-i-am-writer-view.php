<?php include 'subpages/inc/header.php'; ?>
    <section class="wrap container">
        <div class="row">
            <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
            <p>Olá, seja bem vindo à plataforma de criação de livros I Am Writer</p>
            <h2>Por onde começar</h2>
            <p>Você pode começar sua história por onde quiser:</p>
        </div>
        <div class="row">
            <div class="card col-md-4">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Criar um livro</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="post-new.php?post_type=livro" class="btn btn-primary">Crie um livro agora</a>
                </div>
            </div>
            <div class="card col-md-4">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Criar uma Série</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="edit-tags.php?taxonomy=serie&post_type=livro" class="btn btn-primary">Crie uma série de livros agora</a>
                </div>
            </div>
            <div class="card col-md-4">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Criar um Personagem</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="post-new.php?post_type=personagens" class="btn btn-primary">Crie um personagem agora</a>
                </div>
            </div>
        </div>
        <div class="row">
            <h2>Ou, se preferir, pode seguir nosso tutorial</h2>
            <p>Vamos lá?</p>
        </div>
    </section>
    <?php include 'subpages/inc/footer.php'; ?>