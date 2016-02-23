<div class="container-fluid">
    <div class="div-search">
        <div class="row">
            <div class="col-xs-12">
                <form action="#" method="POST" class="form-inline form-search" role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Search...">
                    </div>
                    <button type="submit" class="btn btn-search btn-flat"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="slider" class="owl-carousel owl-theme">
    <div class="item">
        <img src="<?php echo base_url('dist/frontend/images/slide-1.jpg');?>" class="img-responsive" alt="Slider 1">
    </div>
    <div class="item">
        <img src="<?php echo base_url('dist/frontend/images/slide-2.jpg');?>" class="img-responsive" alt="Slider 2">
    </div>
    <div class="item">
        <img src="<?php echo base_url('dist/frontend/images/slide-3.jpg');?>" class="img-responsive" alt="Slider 3">
    </div>
</div>
<div class="bg-dress">
    <h4 class="text-center">LATEST COLLECTIONS</h4>
</div>
<div class="container">
    <div class="row">
        <?php foreach ($listproduct as $product) { ?>
        <div class="col-md-3 col-xs-12">
            <a href="<?php echo base_url('detail/'.$product->slug);?>">
                <div class="box-image">
                    <img src="<?php echo base_url('dist/frontend/product/'.$product->image);?>" class="hover img-responsive" alt="<?php echo $product->title_1;?>">
                    <div class="contenthover">&nbsp;</div>
                </div>
                <div class="info-product text-center">
                    <span class="brand"><?php echo $product->brand;?></span>
                    <h4 class="title"><?php echo $product->title_1;?></h4>
                    <span class="price">
                        <?php 
                            if(!$product->price_2){ 
                                echo 'Rp. '. rupiah($product->price_1); 
                            }else{
                                echo 'Rp. '.rupiah($product->price_2).' <span class="line"> Rp. '.rupiah($product->price_1).'</span>';
                            } 
                        ?>
                    </span>
                </div>
            </a>
        </div>
        <?php } ?>
    </div><br/>
    <div class="text-center">
        <a href="#" class="btn btn-flat btn-default">MORE COLLECTIONS <i class="fa fa-chevron-circle-right"></i></a><br/><br/>
        <nav>
            <ul class="pagination">
                <li class="disabled">
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div><br/>
</div>