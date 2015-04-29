<div role="tabpanel" class="tab-pane active" id="tab_acad">
	<div class="panel panel-default" style="margin-top:10px">
		<div class="panel-body">    
		<!--Acads tab HERE-->	
			
			<svg id = "mainGraph"></svg>
			<div id = "buttons">

				<input type = "button" onclick = "animateGood(<?php echo $search_results['fgood'] ?>, <?php echo  $search_results['ftotal'] ?>, <?php echo  $search_results['sgood'] ?>, <?php echo  $search_results['stotal'] ?>, <?php echo  $search_results['jgood'] ?>, <?php echo  $search_results['jtotal'] ?>, <?php echo  $search_results['srgood'] ?>, <?php echo  $search_results['srtotal'] ?>)" value = "Good"> </input>
				<input type = "button" onclick = "animateProbation(<?php echo $search_results['fprobation'] ?>, <?php echo  $search_results['ftotal'] ?>, <?php echo  $search_results['sprobation'] ?>, <?php echo  $search_results['stotal'] ?>, <?php echo  $search_results['jprobation'] ?>, <?php echo  $search_results['jtotal'] ?>, <?php echo  $search_results['srprobation'] ?>, <?php echo  $search_results['srtotal'] ?>)" value = "Probation"> </input>
				<input type = "button" onclick = "animateDismissed(<?php echo $search_results['fdismissed'] ?>, <?php echo $search_results['ftotal'] ?>, <?php echo  $search_results['sdismissed'] ?>, <?php echo  $search_results['stotal'] ?>, <?php echo  $search_results['jdismissed'] ?>, <?php echo  $search_results['jtotal'] ?>, <?php echo  $search_results['srdismissed'] ?>, <?php echo  $search_results['srtotal'] ?>)" value = "Dismissed"> </input>
				<input type = "button" onclick = "refresh()" value = "Refresh"> </input>

			</div>
			<!-- modal for freshmen -->
			<div id="freshModal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
				        <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				            <h4 class="modal-title"> Freshman Status </h4>
				        </div>
				        <div class="modal-body">
				            <p> Total Number of freshman: <?php echo $search_results['ftotal'] ?> <br/>
				            	Number of freshman with: <br/>
				            	Good Standing: <?php echo $search_results['fgood'] ?> <br/>
				            	Dismissed Standing:  <?php echo $search_results['fdismissed'] ?> <br/>
				            	Probation Standing: <?php echo $search_results['fprobation'] ?> <br/>
				            </p>
				        </div>
				        <div class="modal-footer">
				            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				        </div> <!-- footer close -->
				    </div> <!-- content close -->
				</div> <!-- dialog close -->
			</div> <!-- fade close -->

			<!-- modal for sophomore -->
			<div id="sophoModal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
				        <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				            <h4 class="modal-title"> Sophomore Status </h4>
				        </div>
				        <div class="modal-body">
				            <p> Total Number of sophomore: <?php echo $search_results['stotal'] ?> <br/>
				            	Number of sophomore with: <br/>
				            	Good Standing: <?php echo $search_results['sgood'] ?> <br/>
				            	Dismissed Standing:  <?php echo $search_results['sdismissed'] ?> <br/>
				            	Probation Standing: <?php echo $search_results['sprobation'] ?> <br/>
				            </p>
				        </div>
				        <div class="modal-footer">
				            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				        </div> <!-- footer close -->
				    </div> <!-- content close -->
				</div> <!-- dialog close -->
			</div> <!-- fade close -->

			<!-- modal for junior -->
			<div id="juniorModal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
				        <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				            <h4 class="modal-title"> Junior Status </h4>
				        </div>
				        <div class="modal-body">
				            <p> Total Number of junior: <?php echo $search_results['jtotal'] ?> <br/>
				            	Number of junior with: <br/>
				            	Good Standing: <?php echo $search_results['jgood'] ?> <br/>
				            	Dismissed Standing:  <?php echo $search_results['jdismissed'] ?> <br/>
				            	Probation Standing: <?php echo $search_results['jprobation'] ?> <br/>
				            </p>
				        </div>
				        <div class="modal-footer">
				            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				        </div> <!-- footer close -->
				    </div> <!-- content close -->
				</div> <!-- dialog close -->
			</div> <!-- fade close -->
			
			<!-- modal for senior -->
			<div id="seniorModal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
				        <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				            <h4 class="modal-title"> Senior Status </h4>
				        </div>
				        <div class="modal-body">
				            <p> Total Number of senior: <?php echo $search_results['srtotal'] ?> <br/>
				            	Number of senior with: <br/>
				            	Good Standing: <?php echo $search_results['srgood'] ?> <br/>
				            	Dismissed Standing:  <?php echo $search_results['srdismissed'] ?> <br/>
				            	Probation Standing: <?php echo $search_results['srprobation'] ?> <br/>
				            </p>
				        </div>
				        <div class="modal-footer">
				            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				        </div> <!-- footer close -->
				    </div> <!-- content close -->
				</div> <!-- dialog close -->
			</div> <!-- fade close -->
			
		<!--Acads tab HERE-->	
		</div>
	</div>
  </div>