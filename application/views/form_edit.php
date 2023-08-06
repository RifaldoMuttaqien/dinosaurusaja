<?php $this->load->view('partials/header'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit Artikel</h1>
            <div class="alert alert-warning">
                <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open_multipart(); ?>

            <div class="form-group">
                <label for="">Judul</label>
                <?php echo form_input('title', set_value('title', $blog['title']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">URL</label>
                <?php echo form_input('url', set_value('title', $blog['url']), 'class="form-control"'); ?>

            </div>

            <div class="form-group">
                <label for="">Content</label>
                <?php echo form_textarea('content', set_value('title', $blog['content']), 'class="form-control"'); ?>
            </div>
            <div class="form-group">
                <label for="">Cover</label>
                <?php echo form_upload('cover', set_value('title', $blog['cover']), 'class="form-control"'); ?>

            </div>
            </br>
            <button type="submit" class="btn btn-primary">Simpan Artikel</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>