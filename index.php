<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Projeto Web</title>
</head>

<body class = text-bg-light>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand link-light" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active link-light" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link-light" href="#">Consultar</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>

            </div>

            <div class="row bg-white">
                <div class="col">
                    &nbsp;
                </div>
            </div>

            <div class="row bg-white">
                <div class="col text-start">
                    <form name="Cadastro" method="POST" action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">NOME:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Digite seu nome completo:">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">TELFEONE:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="(DDD)XXXXX-XXXX:">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ORIGEM:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Celular</option>
                            <option value="1">Google meu negócio</option>
                            <option value="2">Fixo</option>
                            <option value="3">WhatsApp</option>
                            <option value="4">Facebook</option>
                            <option value="5">Instragram</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">DATA DO CONTATO:</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Exemplo: 18/09/2021">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">OBSERVAÇÃO:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                <div class="mb-3">
                <button type="button" class="btn btn-primary">Cadastrar-se</button>
                </div>
                    </form>

            </div>

</body>

</html>