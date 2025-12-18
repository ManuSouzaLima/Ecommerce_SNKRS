<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Concluse.org</title>
</head>

<body>
    <header>
        <div class="cabecalho d-flex justify-content-between">
            <a href="#">
                <img class="logo ms-4 d-flex" src="images/logo.png" alt="">
            </a>
            <nav class="pesquisa_cabecalho navbar d-flex justify-content-center">
                <div class="container-fluid">
                    <form class="d-flex" role="search" action="">
                        <input class="form-control me-2 " type="search" placeholder="Pesquise" aria-label="Search">
                        <Button class="btn_pesquisar">Pesquisar</Button>
                    </form>
                </div>
            </nav>
            <div class=" d-flex justify-content-end login_btns me-4">
                <button class="login_btn" data-bs-target="#modalLogin">Login</button>
                <button class="cadastrar_btn">Cadastrar</button>
            </div>
        </div>
        <div class="categorias">
            <nav class="d-flex align-itens-center">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Novidades
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Casual
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            ofertas
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <dialog id="modal_login">
            <aside>
                <img src="images/IMG_login.png" style="height: 70vh; width: 70vh; margin:0px; border: none;">
            </aside>
            <aside>
                <div class="formulario_login">
                    <div class="d-flex justify-content-between">
                        <h1 class="display-5 m-4">Login</h1>
                        <i>
                            <img id="btn_fechar" class="m-3" src="images/icons/x.png"
                                style="width: 20px; height: 20px;">
                        </i>
                    </div>
                    <form action="./app/controller/controller_login.php" method="post">
                        <div class="input_login">
                            <label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg>
                                Email
                                <input style="padding: 5px;" name="email" id="nome" type="text" placeholder="Digite seu email">
                            </label>
                        </div>
                        <div class="input_login">
                            <label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-lock" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3" />
                                </svg>
                                Senha
                                <input style="padding: 5px;" name="password" id="senha" type="password" placeholder="Digite sua senha">
                            </label>
                        </div>
                        <div class="lembrar">
                            <span>

                            </span>

                            <label>
                                <input style="width: 15px;margin-top: 10px;" type="radio">
                                Lembrar de mim
                            </label>

                        </div>
                        <div class="botao_login d-flex justify-content-center">
                            <button type="submit">Fazer Login</button>
                        </div>
                        <div class="outros_login">
                            <div class="outros_login_google mt-3">
                                <a style="text-decoration: none; color: black;" href="#">
                                    <svg style="width: 25px; height: 25px; margin: 5px;" viewBox="0 0 128 128">
                                        <path fill="#fff"
                                            d="M44.59 4.21a63.28 63.28 0 004.33 120.9 67.6 67.6 0 0032.36.35 57.13 57.13 0 0025.9-13.46 57.44 57.44 0 0016-26.26 74.33 74.33 0 001.61-33.58H65.27v24.69h34.47a29.72 29.72 0 01-12.66 19.52 36.16 36.16 0 01-13.93 5.5 41.29 41.29 0 01-15.1 0A37.16 37.16 0 0144 95.74a39.3 39.3 0 01-14.5-19.42 38.31 38.31 0 010-24.63 39.25 39.25 0 019.18-14.91A37.17 37.17 0 0176.13 27a34.28 34.28 0 0113.64 8q5.83-5.8 11.64-11.63c2-2.09 4.18-4.08 6.15-6.22A61.22 61.22 0 0087.2 4.59a64 64 0 00-42.61-.38z">
                                        </path>
                                        <path fill="#e33629"
                                            d="M44.59 4.21a64 64 0 0142.61.37 61.22 61.22 0 0120.35 12.62c-2 2.14-4.11 4.14-6.15 6.22Q95.58 29.23 89.77 35a34.28 34.28 0 00-13.64-8 37.17 37.17 0 00-37.46 9.74 39.25 39.25 0 00-9.18 14.91L8.76 35.6A63.53 63.53 0 0144.59 4.21z">
                                        </path>
                                        <path fill="#f8bd00"
                                            d="M3.26 51.5a62.93 62.93 0 015.5-15.9l20.73 16.09a38.31 38.31 0 000 24.63q-10.36 8-20.73 16.08a63.33 63.33 0 01-5.5-40.9z">
                                        </path>
                                        <path fill="#587dbd"
                                            d="M65.27 52.15h59.52a74.33 74.33 0 01-1.61 33.58 57.44 57.44 0 01-16 26.26c-6.69-5.22-13.41-10.4-20.1-15.62a29.72 29.72 0 0012.66-19.54H65.27c-.01-8.22 0-16.45 0-24.68z">
                                        </path>
                                        <path fill="#319f43"
                                            d="M8.75 92.4q10.37-8 20.73-16.08A39.3 39.3 0 0044 95.74a37.16 37.16 0 0014.08 6.08 41.29 41.29 0 0015.1 0 36.16 36.16 0 0013.93-5.5c6.69 5.22 13.41 10.4 20.1 15.62a57.13 57.13 0 01-25.9 13.47 67.6 67.6 0 01-32.36-.35 63 63 0 01-23-11.59A63.73 63.73 0 018.75 92.4z">
                                        </path>
                                    </svg>
                                    <label for="">
                                        Continuar com Google
                                    </label>
                                </a>
                            </div>
                            <div class="outros_login_facebook" href="">
                                <a style="text-decoration: none; color: black;" href="#">
                                    <svg style="width: 25px; height: 25px; margin: 5px;" viewBox="0 0 128 128">
                                        <rect fill="#3d5a98" x="4.83" y="4.83" width="118.35" height="118.35" rx="6.53"
                                            ry="6.53"></rect>
                                        <path fill="#fff"
                                            d="M86.48 123.17V77.34h15.38l2.3-17.86H86.48v-11.4c0-5.17 1.44-8.7 8.85-8.7h9.46v-16A126.56 126.56 0 0091 22.7c-13.62 0-23 8.3-23 23.61v13.17H52.62v17.86H68v45.83z">
                                        </path>
                                    </svg>
                                    <label>
                                        Continuar com Facebook
                                    </label>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </aside>
        </dialog>

        <dialog id="modal_cadastrar">
            <h1>funfou</h1>
            <button type="submit"></button>
        </dialog>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carrossel_index/img 1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carrossel_index/img 2.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/carrossel_index/img 3.jpg" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="titulo mt-4 d-flex justify-content-center">
            <span>
                <img class="me-3" src="images/icons/one-shoe.png" style="width: 50px; height: 50px;">
            </span>
            <h1 class="display-5">Confira nossos destaques</h1>
        </div>
        <div class="container mt-4">
            <div class="card" style="width: 14rem;">
                <img src="images/card/principal.png" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Nike Dunk Low</h5>
                    <p class="card-categoria">Casual</p>
                    <p class="preco-produto">R$ 850 no pix </p>
                    <a class="d-flex justify-content-center" href="#">
                        <button id="btn-card" class="btn btn-primary mt-3" type="submit">Comprar</button>
                    </a>

                    <!--Pop Up que será aberto ao clicar no item-->

                    <dialog id="item-card">
                        <h1>Modal item card </h1>
                    </dialog>

                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>