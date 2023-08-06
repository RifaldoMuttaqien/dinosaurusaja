<?php $this->load->view('partials/navbar'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <link href="<?php echo base_url(); ?>assets/assets1/css/styles.css" rel="stylesheet" />
</head>
<?php
if (empty($blog['cover']))
    $cover = base_url() . 'assets/assets1/assets/img/post-bg.jpg';
else
    $cover = base_url() . 'uploads/' . $blog['cover'];

// <?php
// $cover = base_url() . 'uploads/' . $blog['cover']; 
// Jika tidak ada foto di database
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('<?php echo $cover; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $blog['title']; ?></h1>

                    <span class="meta">
                        Posted by <?php echo $blog['date']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <?php echo $blog['content']; ?>
            </div>
        </div>
    </div>
</article>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>