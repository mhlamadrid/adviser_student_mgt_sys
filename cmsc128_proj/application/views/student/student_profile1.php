<!DOCTYPE html>
<html>
<head>
   <title>Student Page</title>
   
<?Php 
	echo link_tag(base_url('css/bootstrap.css'));
	echo link_tag(base_url('css/common.css'));
	echo link_tag(base_url('css/bootstrap.min.css'));
	echo link_tag(base_url('css/styles.css'));
	echo link_tag(base_url('css/profile.css'));
	echo script_tag(base_url('js/profile.js'));
	echo script_tag(base_url('js/jquery-1.11.2.min.js'));
	echo script_tag(base_url('js/bootstrap.js'));

?>
 </head>

<body>
	<!---Header-->
	<?Php $this->load->view('header_view');?>

	<div class="container">
	      <div class="row">
	      
	        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
	   
	   
	          <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title">USERNAME</h3>
	            </div>
	            <div class="panel-body">
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
	                 <div class="panel-footer">
	                        
	                        <span class="pull-right">
	                            <a href="edit_profile.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning">EDIT</a>
	                        </span>
	                  </div>
	            
	          </div>
	        </div>
	      </div>
	    </div>

	<!---Footer-->
	<?php $this->load->view('footer_view');?>

</body>

</html>