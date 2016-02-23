<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-cube"></i> Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url('id-admin/module/product');?>">Product</a></li>
            <li>Add New</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add New Product</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');}?>
                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('id-admin/module/product/add', array('class' => 'form-horizontal')); ?>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="title_1">Title 1 <small class="text-danger">*</small></label>
                            <input type="text" name="title_1" class="form-control input-sm" required>
                        </div>
                        <div class="col-xs-6">
                            <label for="title_2">Title 2</label>
                            <input type="text" name="title_2" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="brand">Brand <small class="text-danger">*</small></label>
                            <input type="text" name="brand" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <label for="descriptipn">Description <small class="text-danger">*</small></label>
                            <textarea name="description" class="form-control textarea" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="price_1">Price 1 <small class="text-danger">*</small></label>
                            <input type="text" name="price_1" class="form-control input-sm" placeholder="Harga sebelum diskon / harga asli" required>
                        </div>
                        <div class="col-xs-6">
                            <label for="price_2">Price 2</label>
                            <input type="text" name="price_2" class="form-control input-sm" placeholder="Harga setelah diskon">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input_fields_wrap">
                            <div class="col-xs-12"><button type="button" class="add_field_button btn btn-primary btn-xs btn-flat"><i class="fa fa-plus"></i> Add More Images</button></div>
                            <div class="col-xs-2">
                                <label for="userfile">Image <small class="text-danger">*</small></label>
                                <input type="file" name="userfile[]" class="form-control input-sm" required>
                            </div>
                        </div>
                        <div class="col-xs-12"><small class="text-danger"><em>format gambar yang didukung hanya .jpg / .png</em></small></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12"><small class="text-danger">* wajib diisi</small></div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="submit" class="btn btn-primary btn-sm btn-flat" value="Submit">
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>