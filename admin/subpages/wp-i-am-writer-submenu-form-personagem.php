<?php include 'inc/header.php'; ?>
    <div class="container">
        <div class="row">
            <h1>Personagens</h1>
            <fieldset id="about" class="row">
                <h3>Sobre</h3>
                <div class="col-md-3">
                    <img src="https://pbs.twimg.com/tweet_video_thumb/Ei2wEVIWAAIUP6l.jpg" class="img-thumbnail" alt="...">
                    <div class="mb-3 row">
                        <label for="formFile" class="form-label">Trocar o avatar do personagem</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="mb-3 row">
                        <label for="personagem" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="personagem" placeholder="Percy Jackson">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="resumo" class="col-sm-2 col-form-label">Sobre</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                        <select class="form-select col-md-6 ms-3" aria-label="Função Dramática">
                            <option selected>Função Dramática</option>
                            <option value="1">Protagonista</option>
                            <option value="2">Antagonista</option>
                            <option value="3">Par Romântico</option>
                            <option value="3">Dinâmico</option>
                            <option value="3">Oponente</option>
                            <option value="3">Aliado</option>
                            <option value="3">Falso Aliado</option>
                            <option value="3">Aliado do Antagonista</option>
                            <option value="3">Comentador</option>
                            <option value="3">Emblema</option>
                        </select>
                        <select class="form-select col-md-6 ms-3" aria-label="Função Dramática">
                            <option selected>Arquétipo</option>
                            <option value="1">Herói</option>
                            <option value="2">Sombra</option>
                            <option value="3">Pícaro</option>
                            <option value="3">Sábio</option>
                            <option value="3">Explorador</option>
                            <option value="3">Criador</option>
                            <option value="3">Rebelde</option>
                            <option value="3">Amante</option>
                            <option value="3">Tolo</option>
                            <option value="3">Cuidador</option>
                            <option value="3">Homem Comum</option>
                            <option value="3">Inocente</option>
                            <option value="3">Governante</option>
                            <option value="3">Mestre</option>
                            <option value="3">Mago</option>
                        </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Comportamento Dominante</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="Teimoso">
                        </div>
                    </div>
                </fieldset>
                <fieldset id="caracteristicas" class="row">
                    <h3>Características Físicas</h3>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Cabelos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Olhos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Descrição Facial</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Tipo Físico</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Altura</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Peso</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Características Marcantes ou Diferenciadoras</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Estilo de Roupa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="comp_dominante" class="col-sm-2 col-form-label">Acessórios de Vestimenta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="comp_dominante" placeholder="">
                        </div>
                    </div>
                </fieldset>
                
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