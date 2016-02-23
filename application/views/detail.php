<div class="border-top">
    <div class="container">
        <h3 class="dressTitle"><?php echo strtoupper($product->title_1);?></h3>
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <div id="gallery" class="simplegallery">
                    <div class="content">
                        <?php $no=0;foreach ($productimage as $productimg) {$no++; ?>
                        <img src="<?php echo base_url('dist/frontend/product/'.$productimg->image);?>" class="img-responsive image_<?php echo $no;?>">
                        <?php } ?>
                    </div>
                    <div class="clear"></div>
                    <div class="thumbnail">
                        <?php $no=0;foreach ($productimage as $productimg) {$no++; ?>
                        <div class="thumb"> <a href="#" rel="<?php echo $no;?>"> <img id="thumb_<?php echo $no;?>" src="<?php echo base_url('dist/frontend/product/'.$productimg->image);?>"> </a> </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1 col-xs-12">&nbsp;</div>
            <div class="col-md-6 col-xs-12">
                <h3 class="text-rent">RENT PRICE:</h3>
                <h2 class="text-red">
                    <?php 
                        if(!$product->price_2){ 
                            echo 'Rp. '. rupiah($product->price_1); 
                        }else{
                            echo 'Rp. '.rupiah($product->price_2).' <span class="line"> Rp. '.rupiah($product->price_1).'</span>';
                        } 
                    ?>
                </h2>
                <hr>
                <h5><strong>DRESS DESCRIPTION</strong></h5>
                <?php echo $product->description;?>
            </div>
        </div>
    </div>
</div>
<div class="bg-dress">
    <h4 class="text-center">FORM RENT</h4>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <form action="#" class="form-rent" method="POST" role="form">
                <div class="form-group">
                    <label for="name">NAME <small class="text-danger">*</small></label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL <small class="text-danger">*</small></label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                </div>
                <div class="form-group">
                    <label for="notes">EXTRA NOTES (SIZE, COLOR, ETC...)</label>
                    <textarea name="notes" class="form-control" rows="3" required></textarea>
                </div>
                <span class="text-danger pull-left">* required</span>
                <button type="submit" class="pull-right btn btn-danger btn-flat btn-lg">SEND</button>
            </form>
        </div>
    </div>
</div><br/>