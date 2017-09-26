	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; WebGis Theme. All Rights Reserved.

					</div>
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>

	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url('assets/resources/js/jquery-2.1.1.min.js') ?>"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/resources/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/resources/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('assets/resources/js/jquery.isotope.min.js') ?>"></script>  
	<script src="<?php echo base_url('assets/resources/js/wow.min.js')?>"></script>
	<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"> </script>-->
	<script src="<?php echo base_url('assets/resources/js/functions.js') ?>"></script>
	<!-- Data Tables -->
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.responsive.js') ?>"></script>
    <script src="<?php echo base_url('assets/inspinia/js/plugins/dataTables/dataTables.tableTools.min.js') ?>"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "../assets/inspinia/js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });
	</script>

	
</body>
</html>