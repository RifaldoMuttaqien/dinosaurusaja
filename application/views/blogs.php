<?php $this->load->view('partials/navbar'); ?>
<?php $this->load->view('partials/header'); ?>

<style>
.pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
}

.pagination li {
    margin: 0 2px;
}

.pagination a,
.pagination .fas {
    color: #333;
    text-decoration: none;
    padding: 5px 10px;
    border: 1px solid #ddd;
    border-radius: 3px;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
}

.pagination a:hover {
    background-color: #f5f5f5;
}

.pagination .active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}
</style>

<!--Service-->
<section id="services" class="container-fluid service-style">
    <div class="row text-center">
        <div class="col-12 pb-4">
            <?php echo $this->session->flashdata('message'); ?>
            <h2 class="display-4">Mengapa memilih kami?</h2>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-green"></i>
                <i class="fas fa-list fa-stack-1x text-white"></i>
            </span>

            <h3 class="mt-4 text-green">Fasilitas Oke</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                nisi, odit rerum accusamus!</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-green"></i>
                <i class="fas fa-laptop-code fa-stack-1x text-white"></i>
            </span>
            <h3 class="mt-4 text-green">Modul Lengkap</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                nisi, odit rerum accusamus!</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-green"></i>
                <i class="fas fa-money-bill fa-stack-1x text-white"></i>
            </span>
            <h3 class="mt-4 text-green">Biaya Terjangkau</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                nisi, odit rerum accusamus!</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
            <span class="fa-stack fa-2x">
                <i class="fas fa-circle fa-stack-2x text-green"></i>
                <i class="fas fa-chart-line fa-stack-1x text-white"></i>
            </span>
            <h3 class="mt-4 text-green">Spring</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque facilis perspiciatis quos, numquam
                enim distinctio inventore tempore vero, quibusdam alias ratione quae explicabo? Maiores quasi natus
                nisi, odit rerum accusamus!</p>
        </div>
        <div class="col-12 pt-3 mb-5">
            <button type="button" class="btn btn-danger btn-lg">Service Lainya</button>
        </div>
    </div>

</section>
<!--Product-->

<section id="prodct" class="container">

    <div class="row text-center justify-content-center">
        <div class="col-12 pb-4">
            <h2 class="display-4 text-center mb-4">Produk Kami</h2>

        </div>
        <?php foreach ($blogs as $key => $blog) : ?>

        <div class="col-md-4 mb-4">

            <div class="card">

                <img class="card-img-top" style="max-height: 400px;"
                    src="<?php echo base_url(); ?>assets/images/dino1.jpg" alt="Product 1">

                <div class="card-body">


                    <card class="title">
                        <?php if (isset($_SESSION['username'])) {
                            ?>
                        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>">Edit Artikel</a>
                        <a href="<?php echo site_url('blog/delete/' . $blog['id']); ?>"
                            onclick="return confirm('Yakin di Hapus?')">Delete Artikel</a>
                        <?php
                            }
                            ?>
                        <h4><?php echo $blog['title']; ?></h4>
                        <p><?php echo $blog['content']; ?></p>

                    </card>

                </div>
                <div class="card-footer"><a href="<?php echo site_url('blog/detail/' . $blog['url']); ?>"
                        class="btn button-sekunder">Detail & Harga</a></div>
            </div>

        </div>

        <?php endforeach; ?>
    </div>
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="pagination">
                <?php echo $this->pagination->create_links(); ?>
            </ul>
        </div>
    </div>

</section>

<?php $this->load->view('partials/footer'); ?>

<!--contact-->
<section id="contact">

</section>

<!--End -->
<!--Footer-->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/537736e09f.js" crossorigin="anonymous"></script>
</body>

</html>
</div>
</section>
<!--contact-->
<section id="contact">

</section>

<!--End -->
<!--Footer-->
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/537736e09f.js" crossorigin="anonymous"></script>
</body>

</html>

<html>