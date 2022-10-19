<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?> <!-- Preferencias de Encabezado -->
</head>
<body>
    <header>
        <section class="container">
            <section class="navegador">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/index.html"><img src="
                        <?php echo get_template_directory_uri()?>/assets/img/logo.png" style="width: 150px;"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#plataforma">Plataforma</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#contacto">Contacto</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
        </section>
    </header>