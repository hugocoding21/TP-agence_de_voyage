<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="paris.css">
    <link rel="stylesheet" href="../header-footer/css/header.css">
    <title>Document</title>
</head>
<body>
    <main>

        <header>
        <?php include_once "../header-footer/header.php"; ?>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Galerie de photos -->
                    <div class="main-photo">
                        <img src="https://picsum.photos/1000/500" alt="Photo Principale" class="img-fluid">
                    </div>
                    <div class="thumbnails my-5">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 1" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 2" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 3" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 4" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 1" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 2" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 3" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 4" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 3" class="img-fluid mb-3">
                            </div>
                            <div class="col-md-3">
                                <img src="https://picsum.photos/200" alt="Miniature 4" class="img-fluid mb-3">
                            </div>
                            <!-- Ajoutez d'autres miniatures ici -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <!-- Informations à droite -->
                    <h1>Paris</h1>
                    <h3>Hôtel Calypso</h3>
                    <div class="rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, omnis error? Possimus voluptatem illo aliquam laborum laudantium quod nobis sunt deleniti itaque rerum, nisi dolor, magnam est ipsum eaque! Nobis.</p>
                    <div class="d-flex">
                        <a href="#" id="choosedate" class="btn text-white px-5 me-3">Choose a date</a>
                        <p class="bg-warning p-2">150 €</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mx-auto my-5 card text-bg-dark">
                <img src="https://picsum.photos/20/3" class="card-img" alt="...">
                <div class="card-img-overlay text-center">
                    <h5 class="card-title mt-5" style="font-size: 4em;">Paris</h5>
                    <p class="card-text">A perfect destination to do strolls in a forest.</p>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-sm-10">
                    <h3 class="custom-title">Description</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet laborum molestiae magni numquam reprehenderit? Iusto ad non ratione laborum commodi, facere illum reprehenderit accusamus debitis, saepe in laboriosam quibusdam eos.</p>
                </div>
                <div class="col-sm-10">
                    <h3 class="custom-title">Détails</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, quam animi cupiditate vero fugiat molestiae quibusdam natus voluptas eum quae, tempore dolores ipsa molestias maiores. Itaque veritatis at nisi cupiditate!</p>
                </div>
                <div class="col-sm-10">
                    <h3 class="custom-title">Other</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam nemo error quidem voluptatibus accusantium aliquam doloremque animi. Id neque nihil deleniti asperiores aspernatur animi dolores quaerat, delectus quo, assumenda atque!</p>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>