<!doctype html>
<html>

<head>
    <title>CodeIgniter Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">Web Lanjut</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </div>
        </div>
    </div>
</nav>

<h1 class="p-4"><?= esc($title) ?></h1>

<body>