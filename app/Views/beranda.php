<?= $this->include('Templates/header') ?>
<div class="container-fluid mt-1 mb-1" style="padding: 0 !important">
    <!-- <img src=<?= base_url('assets/images/logorskemenkesmakassar.png') ?> class="img-fluid w-100" alt="..."> -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src=<?= base_url('assets/images/peresmianrskemenkesmakassar3.jpeg') ?> class="img-fluid w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img src=<?= base_url('assets/images/peresmianrskemenkesmakassar3.jpeg') ?> class="w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src=<?= base_url('assets/images/peresmianrskemenkesmakassar3.jpeg') ?> class="w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mb-5">
    <div class="row mt-3">
        <div class="col-12 text-center">
            <h1 style="font-family: MyCustomFont; font-size: 60px">
                Layanan Unggulan
            </h1>
            <h2 style="font-family: MyCustomFont; font-size: 50px">
                Setiap layanan kesehatan kami, adalah wujud perhatian dan harapan
            </h2>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Kanker</h5>
                    <p class="card-text">mendiagnosis, mengobati, dan mengelola penyakit kanker.</p>
                    <a href="#" class="btn btn-outline-success">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Jantung</h5>
                    <p class="card-text">mendiagnosis, mengobati, dan mengelola penyakit jantung.</p>
                    <a href="#" class="btn btn-outline-success">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Stoke</h5>
                    <p class="card-text">mendiagnosis, mengobati, dan mengelola penyakit stroke</p>
                    <a href="#" class="btn btn-outline-success">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Uronefrologi</h5>
                    <p class="card-text">mendiagnosis, mengobati, dan mengelola penyakit uronefrologi.</p>
                    <a href="#" class="btn btn-outline-success">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('Templates/footer') ?>