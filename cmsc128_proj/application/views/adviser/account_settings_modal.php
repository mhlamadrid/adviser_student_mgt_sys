<div class="modal fade" id="account_settings_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<!--Start of Header-->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">USERNAME</h4>
			<!--End of Header-->
			</div>
	
    <body>
      <div class="modal-body">
              <div class="row">
                <div class="col-md-4 col-lg-3 " align="center">
                  <?Php 
            $image_properties = array(
              'src'   => base_url('img/profpic.jpg'),
              'alt'   => '128 AB-4L',
              'class' => 'img-circle',
              'width' => '80',
              'height'=> '80',
              'title' => 'ProfPic',
            );
            echo img($image_properties);
          ?> 
                </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Employee ID:</td>
                        <td>123456789</td>
                      </tr>
                      <tr>
                        <td>Name:</td>
                        <td>Username</td>
                      </tr>
                      <tr>
                        <td>Office No:</td>
                        <td>C-112</td>
                      </tr>
                   
                      <tr>
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
                  
                  <?php 
                    echo form_open('main_control/change_password', array( 'id' => 'form_change'));?>
                    <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Enter new password"> </div>
                    <?php echo form_hidden('id', '');
                    echo form_close();
                  ?>

                </div>
              </div>
            </div>
                 
			<!--End of Body-->
			
			<div class="modal-footer">
			<!--Start of Footer-->

        <?Php
          $attr = array(
            'type'          => 'button',
            'data-dismiss'  => 'modal',
            'value'         => 'Close',
            'class'     => "btn btn-default",
          );
          echo form_input($attr);

          $attr = array(
            'type'          => 'button',
            'data-dismiss'  => 'modal',
            'value'         => 'Change Password',
            'class'     => "btn btn-primary",
            'onclick'       => "func_edit()"
          );
          echo form_input($attr);
            ?>
             <!--<form method="post" action=''>-->

			<!--End of Footer-->
			</div>
		</div>
	</div>
</div>

<script>
function func_add() {
    document.getElementById("form_add").submit();
}

function func_edit() {
    document.getElementById("form_change").submit();
}
</script>