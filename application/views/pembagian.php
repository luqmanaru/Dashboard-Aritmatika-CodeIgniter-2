<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <h1 class="text-center mt-4">PEMBAGIAN</h1>
                    <div class="card">
                        <div class="card-body">
                            <?php echo form_open('hitung/pembagian'); ?>
                            <div class="input-group">
                                <?php echo form_input('d1', '', ['class' => 'form-control', 'placeholder' => 'Angka Pertama']); ?>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-light">/</span>
                                </div>
                                <?php echo form_input('d2', '', ['class' => 'form-control', 'placeholder' => 'Angka Kedua']); ?>
                            </div>
                            <br><br>
                            <?php echo form_submit('submit', 'Bagi', ['class' => 'btn btn-primary btn-block']); ?>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            Hasil: <strong><?php echo isset($hasil) ? $hasil : ''; ?></strong>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <?php echo anchor('hitung', 'Menu Utama', ['class' => 'btn btn-secondary']); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
