<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <nav class="main-nav">
                    <a href="#">Home</a>
                    <a href="#">Serie TV</a>
                    <a href="#">Film</a>
                    <a href="#">Contattaci</a>
                </nav>
            </nav>
        </header>


        <div class="rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5 text-white">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder text-white">Ehy!</h1>
                <p class="lead fw-normal mb-0 text-white">Scrivi tutto quello che ti passa per la testa!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="username" type="text" placeholder="Inserisci Username">
                            <label for="username" class="text-muted">Username</label>

                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="nome@esempio.com">
                            <label for="email" class="text-muted">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>


                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Inserisci Messaggio" style="height: 10rem"></textarea>
                            <label for="message" class="text-muted">Messaggio</label>

                        </div>



                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">Invia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <footer>

        </footer>
    </div>
</body>

</html>
