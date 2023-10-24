<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Detail Event</title>
</head>

<body style="background-color: #EEEEEE">
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100 p-0 border-bottom" style="z-index: 9999; background-color: #EEEEEE">
        <div class="container-fluid px-5 py-4">
            <a class="navbar-brand fw-bold" href="#">Orchari</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="#">Service</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- card --}}
    <div class="card mb-2 carousel-item rounded-0 border-0 bg-transparent active py-5 d-flex position-relative"
        style="padding-inline: 6vw; margin-top: 104px;">
        <div class="col g-0">
            <div class="card-header bg-transparent px-0 mb-4 pb-3">
                <h3 class="card-title" style="font-weight: 700">Event Cosplay</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
            </div>
        </div>

        <div class="row g-0 rounded bg-white mb-5">
            <div class="col-md-8 overflow-hidden" style="max-height: 300px">
                <img src="img/usman.jpg" class="img-fluid h-100 w-100" alt="...">
            </div>

            <div class="card-body col-md-4 row p-4">
                <div class="col-6">
                    <p class="card-text m-0">Date</p>
                    <h6 class="card-title">July 27, 2025</h6>
                </div>
                <div class="col-6">
                    <p class="card-text m-0">Time</p>
                    <h6 class="card-title">12.00 - 14.00</h6>
                </div>
                <div class="col-6">
                    <p class="card-text m-0">Type</p>
                    <h6 class="card-title">Guild Raid</h6>
                </div>
                <div class="col-6">
                    <p class="card-text m-0">Location</p>
                    <h6 class="card-title">Surabaya</h6>
                </div>
                <div class="col-12">
                    <p class="card-text m-0">Price</p>
                    <h6 class="card-title">IDR. 27.000</h6>
                </div>
                <button type="button" class="btn btn-info text-white" style="font-weight: 600">Share</button>
            </div>

        </div>

        <div class="col g-0">
            <div class="card-body bg-transparent px-0 mb-5 pb-3">
                <h3 class="card-title" style="font-weight: 700">About Event</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam
                        in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices
                        mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo,
                        non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit
                        amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum,
                        vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id. Praesent lorem
                        orci, mattis non efficitur id, ultricies vel nibh. Sed volutpat lacus vitae gravida viverra.
                        Fusce vel tempor elit. Proin tempus,.</p>
            </div>
        </div>

        <div class="col g-0">
            <div class="card-body bg-transparent px-0 mb-5 pb-3">
                <h3 class="card-title" style="font-weight: 700">Topic Covered</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam
                        in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices
                        mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo,
                        non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit
                        amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum,
                        vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id. Praesent lorem
                        orci, mattis non efficitur id, ultricies vel nibh. Sed volutpat lacus vitae gravida viverra.
                        Fusce vel tempor elit. Proin tempus,.</p>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..."
        crossorigin="anonymous"></script>
</body>

</html>
