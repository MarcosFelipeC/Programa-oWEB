<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <title>Cards</title>
</head>

<body>
    <div class="container">
        <div class="row margin-top-20">

            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/js.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Curso Javascript</h5>
                        <p class="card-text">Curso avança de JavaScript!</p>
                        <a href="#" class="btn btn-primary col-md-12" data-bs-toogle="modal" data-bs-target="cadastrar">Increva-se</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/js.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Curso Javascript</h5>
                        <p class="card-text">Curso avança de JavaScript!</p>
                        <a href="#" class="btn btn-primary col-md-12">Increva-se</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/js.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Curso Javascript</h5>
                        <p class="card-text">Curso avança de JavaScript!</p>
                        <a href="#" class="btn btn-primary col-md-12">Increva-se</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <img src="assets/images/js.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Curso Javascript</h5>
                        <p class="card-text">Curso avança de JavaScript!</p>
                        <a href="#" class="btn btn-primary col-md-12">Increva-se</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>