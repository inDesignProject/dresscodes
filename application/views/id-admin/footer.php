        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <small>Developed by <a href="http://indesign.co.id" target="_blank">inDesign Project</a> | Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'production') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></small>
            </div>
            <strong>&copy; <?php echo date('Y');?></strong>
            DressCodes | All Rights Reserved.
        </footer>
        <script src="<?php echo base_url('dist/jquery-2.1.4.min.js');?>"></script>
        <script src="<?php echo base_url('dist/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/datatables/jquery.dataTables.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/select2/select2.full.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/datetimepicker/jquery.datetimepicker.full.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/plugins/fastclick/fastclick.min.js');?>"></script>
        <script src="<?php echo base_url('dist/backend/js/app.min.js');?>"></script>
        <script>
            // datatable
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );
        </script>
        <script>
            // tooltip
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
                $(".select2").select2();
                $(".textarea").wysihtml5();
            })
        </script>
        <script>
            // datepicker
            $(document).ready(function() {
                jQuery('#datetimepicker').datetimepicker({
                    timepicker:false,
                    format: 'Y-m-d'
                });
            } );
        </script>
        <script>
            $(document).ready(function() {
                var max_fields      = 6; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $(".add_field_button"); //Add button ID
               
                var x = 1; //initlal text box count
                $(add_button).click(function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div class="col-xs-2"><label for="userfile">Image <small class="text-danger">*</small></label> | <a href="#" class="remove_field"><span class="label label-danger">remove</span></a><input type="file" name="userfile[]" class="form-control input-sm" required></div>'); //add input box
                    }
                });
               
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
            });
        </script>
    </body>
</html>