<?php $this->load->view('partials/header'); ?>

<header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/assets1/img/about-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1>Tambah Artikel</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="com-md-8">
            <h1>Tambah Artikel</h1>

            <div class="alert alert-warning">
                <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open_multipart(); ?>
            <div>
                <label>Judul</label>
                <?php echo form_input('title', set_value('title'), 'class="form-control"'); ?>
            </div>
            <div>
                <label>Url</label>
                <?php echo form_input('url', set_value('url'), 'class="form-control"'); ?>
            </div>
            <div>
                <label>Konten</label>
                <?php echo form_textarea('content', set_value('content'), 'class="form-control" id="" cols="30" rows="10"') ?>
            </div>
            <div>
                <label>Cover</label>
                <?php echo form_upload('cover', set_value('cover'), 'class="form-control" id="" cols="30" rows="10"') ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
        </div>
    </div>
</div>