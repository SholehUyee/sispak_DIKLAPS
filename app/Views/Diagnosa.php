<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Kerusakan Laptop -- DIKLAPS --</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>

    <link rel="stylesheet" href="<?= base_url('css/navbar.css') ?>" />


</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary" aria-label="Offcanvas navbar large">
            <div class=" container-fluid">
                <a class="navbar-brand" href="<?= base_url() ?>">
                    <!--DIKLAPS-->
                    <img src="<?= base_url('image/diklaps2.svg') ?>">
                    Diagnosa Kerusakan Laptop Asus
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Diagnosa') ?>">Diagnosa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Kerusakan') ?>">Kerusakan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Penanganan') ?>">Penanganan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('Tentang') ?>">Tentang</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3 mt-lg-0" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>

                </div>
            </div>
        </nav>
    </main>

    <header class="jumbotron ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="h1">Diagnosa Kerusakan Laptop Asus</h1>
                    </center>
                </div>
            </div>
        </div>
    </header>

    <hr>
    <div class="container">
        <div class="d-flex" style="height: 56px;">
            <div class="vr">
            </div>
            <div class="card-body">
                <h5 class="p-10 h5" text> Laptop Anda Rusak !!</h5>
                <h5 class="p-10 h5 "> Cari tau kerusakannya dengan menjawab pertanyaan berikut</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="h5">Codeigniter 4 Sudah Rilis!</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur
                        quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere
                        eos earum laboriosam excepturi quas?</p>
                </div>
            </div>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5">Pengembangan Codeiginter 4 Tertunda</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur
                        quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere
                        eos earum laboriosam excepturi quas?</p>
                </div>
            </div>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5">Wow, Ini 5 Startup yang Menggunakan Codeigniter</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur
                        quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere
                        eos earum laboriosam excepturi quas?</p>
                </div>
            </div>
            <div class="col-md-12 my-2 card">
                <div class="card-body">
                    <h5 class="h5">Codeigniter Ternyata Framework Terpopuler di Inodnesia</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur
                        quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere
                        eos earum laboriosam excepturi quas?</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> DIKLAPS </div>
    </footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>