<div class="modal fade" id="add_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<!--Start of Header-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">USERNAME</h4>
			<!--End of Header-->
			</div>
			<div class="modal-body">
			<!--Start of Body-->
				<body>
      <div class="row">
      
      
              <div class="row">
                <div class="col-md-4 col-lg-3 " align="center"> <img alt="User Pic" src="profpic.jpg" class="img-circle"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Student No:</td>
                        <td>2012-12345</td>
                      </tr>
                      <tr>
                        <td>Name:</td>
                        <td>Username</td>
                      </tr>
                      <tr>
                        <td>Classification:</td>
                        <td>Junior</td>
                      </tr>
                   
                      <tr>
                        <tr>
                        <td>Status:</td>
                        <td>status</td>
                        </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
            </div>
                 
          
    </div>

			<!--End of Body-->
			
			<div class="modal-footer">
			<!--Start of Footer-->
				<?Php
					$attr = array(
								'type'         	=> 'button',
								'data-dismiss'	=> 'modal',
								'value'         => 'Close',
								'class' 	 	=> "btn btn-default",
							);
					echo form_input($attr);
					
					$attr = array(
								'type'          => 'button',
								'value'         => 'Edit Profile',
								'class' 	 	=> "btn btn-primary",
								'onclick'       => "func_add()"
							);
					echo form_input($attr);
				?>
								<!-- PAKIPALITAN KUNG SAAN NAGREREDIRECT YUNG EDIT PROFILE -->		

			<!--End of Footer-->
			</div>
		</div>
	</div>
</div>

<script>
function func_add() {
    document.getElementById("form_add").submit();
}
</script>