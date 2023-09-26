<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100" style="z-index: 100">
        <div class="container-fluid px-5 py-4">
            <a class="navbar-brand fw-bold" href="#">Orchari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#">Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- carousel --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel" style="padding-top: 104px;">
        <div class="carousel-inner">
            <div class="carousel-item active py-5 d-flex justify-content-center align-items-center position-relative"
                style="padding-inline: 200px">
                <img style="z-index: 0; height: 600px" src="img/test.jpg" class="d-block w-100 rounded" alt="...">
                <form action=""
                    class="position-absolute bottom-0 rounded d-flex align-items-center gap-5 px-5 py-3 text-light"
                    style="background-color: rgb(29, 29, 29); width:1000px;">
                    <div class="w-25">
                        <label for="disabledSelect" class="form-label m-0 fw-medium">Location</label>
                        <select id="disabledSelect" class="form-select fw-semibold">
                            <option>Surabaya</option>
                            <option>Sidoarjo</option>
                            <option>Bogor</option>
                        </select>
                    </div>
                    <div class="w-25">
                        <label for="disabledSelect" class="form-label m-0 fw-medium">Price</label>
                        <select id="disabledSelect" class="form-select fw-semibold">
                            <option>Paid</option>
                            <option>Free</option>
                        </select>
                    </div>
                    <div class="w-25">
                        <label for="disabledSelect" class="form-label m-0 fw-semibold">Type</label>
                        <select id="disabledSelect" class="form-select fw-semibold">
                            <option>Cosplay</option>
                            <option>Concert</option>
                            <option>Kerja Bakti</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 py-3 mt-2 fw-medium">Submit</button>
                </form>
            </div>
        </div>
    </div>

    {{-- isi --}}
    <div class="py-5" style="padding-inline: 200px">
        <h1 class="fw-bold py-2">Popular Event</h1>

        <div class="d-flex justify-content-between flex-wrap gap-4">
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
        </div>
    </div>

    {{-- isi 2 --}}
    <div class="py-5" style="padding-inline: 200px">
        <h1 class="fw-bold py-2">Upcoming Event</h1>

        <div class="d-flex justify-content-between flex-wrap gap-4">
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
            <a class="card" href="#" style="width: 22rem;">
                <img src="img/usman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </a>
        </div>
    </div>

    {{-- footer --}}
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <p class="text-muted">Orchari © 2023</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>
</body>

</html>
