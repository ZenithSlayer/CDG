<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/4989e20d8f.js" crossorigin="anonymous"></script>
    <base href="https://localhost/websites/CDG/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Cookie Do Gato</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="home"> <img src="imagens/logos/logo-ron.png" alt="logo do site" width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                    <li class="nav-item"> <a class="nav-link" href="home">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="produtos">Produtos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="Quem-somos">Quem Somos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="galeria">Galeria</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="contato">Contato</a> </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <?php
        $allowed_files = [
            'home' => 'pages/home.php',
            'produtos' => 'pages/produtos.php',
            'galeria' => 'pages/galeria.php',
        ];

        $page = $_GET['page'] ?? 'home';

        if (array_key_exists($page, $allowed_files)) {
            include $allowed_files[$page];
        } else {
            include "pages/erro.php";
        }
        ?>

    </main>


    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <div class="col-md-4 d-flex align-items-center"> <a href="home" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                            <img src="imagens/logos/logo-ron.png" alt="" height="50px">
                        </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Cookie Do Gato</span> </div>
                    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                        <li class="ms-3"><a class="text-body-secondary" target="_blank" href="https://www.instagram.com/cookiesdogato?utm_source=ig_web_button_share_sheet&igsh=eDN3bjU2Ym5tYmRv" aria-label="Instagram"><img src="imagens/logos/instagram.png" alt="" height="40px"></a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>