<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-cube"></i> Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Product</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <a href="<?php echo base_url('id-admin/module/product/add');?>" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Add New</a><br/><br/>
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">List of Product</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Brand</th>
                                <th class="text-center">Price</th>
                                <th width="5%" class="text-center">Sold</th>
                                <th width="8%" class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=0; foreach ($listproduct as $product) { $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo $no;?></td>
                                <td>
                                    <?php 
                                        echo $product->title_1;
                                        if($product->title_2){
                                            echo '<br/><small>'.$product->title_2.'</small>';
                                        }
                                    ?>
                                </td>
                                <td><?php echo $product->brand;?></td>
                                <td class="text-right">
                                    <?php
                                        if (!$product->price_2) {
                                            echo 'Rp. '.rupiah($product->price_1);
                                        }else{
                                            echo 'Rp. '.rupiah($product->price_2);
                                            echo '<br/><small class="text-line">Rp. '.rupiah($product->price_1).'</small>';
                                        }
                                    ?> 
                                </td>
                                <td class="text-right"><?php echo $product->sold;?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm btn-flat" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url('id-admin/module/product/edit/'.$product->id_product);?>"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger btn-sm btn-flat" data-toggle="tooltip" data-placement="top" title="Hapus Data" href="<?php echo base_url('id-admin/module/product/delete/'.$product->id_product);?>"><i class="fa fa-remove"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>