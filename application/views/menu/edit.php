<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <tbody>
                    <!-- looping menu -->
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <form action="<?= base_url('menu'); ?>" method="post">
                            <input type="hidden" name="id" value="<?= $m['id']; ?>">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="menu" value="<?= $m['menu']; ?>">
                                </div>
                                <div class=" col">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="<?= base_url('menu'); ?>" type="button" class="btn btn-primary">Cancel</a>
                                </div>
                            </div>
                        </form>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>


</div>