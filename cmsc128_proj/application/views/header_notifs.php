<ul class="nav navbar-nav navbar-right">
		<?Php if ($notifications){?>
				<li class="dropdown nav">
			<?Php	$ctr=0;
					foreach($notifications as $row) $ctr++;	?>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-envelope"></span>
					<?Php if ($ctr>0){?>
							<span class="badge"><?=$ctr;?></span>
					<?Php }?>	
					  &nbsp <span class="caret"></span>
					</a>
					
					<ul class="dropdown-menu" role="menu">
				<?Php	foreach($notifications as $row){ ?>
							<li><a href="#"><?=$row->notif_body;?></a></li>
				<?Php 	}?>
					</ul>			
				</li>
					<?Php }?>
				<li class="dropdown nav">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-user"></span>
						&nbsp <span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">
							<?Php 
								$image_properties = array(
										'src'   => base_url('img/prof_pic.jpg'),
										'alt'   => 'Me, demonstrating how to eat 4 slices of pizza at one time',
										'class' => 'post_images img-thumbnail',
										'width' => '120',
										'height'=> '90',
										'title' => 'That was quite a night',
										'rel'   => 'lightbox'
								);
									echo img($image_properties);
							?>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<?= form_open('main_control/profile');?>
							<!--<form method="post" action=''>-->
							<!-- <form method="post" action="<?php echo base_url();?>index.php/main_control/changePassword"> -->
							<div class="col-md-12">
								<?Php
									$attr = array(
										'type'          => 'button',
										'value'         => 'Account Settings',
										'class' 	  => "btn btn-link form-control",
										'data-toggle' => "modal",
										'data-target' => "#account_settings_modal",
										);
									echo form_input($attr);
								?>
							</div>
							</form>						
						</li>
						<li>
							<?= form_open('main_control/logout');?>
							<!--<form method="post" action=''>-->
							<div class="col-md-12">
								<input class="btn btn-link form-control" type="submit" name="logout" value="logout"/>
							</div>
							</form>						
						</li>
					</ul>			
				</li>
          </ul>