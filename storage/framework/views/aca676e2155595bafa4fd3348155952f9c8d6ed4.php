<?php $__env->startSection('content'); ?>
<div class="row">
        
      <div class="col-xl-12 order-xl-1">
	          <div class="card bg-secondary shadow">
	            <div class="card-header bg-white border-0">
	              <div class="row align-items-center">
	                <div class="col-8">
	                	 
		               <?php if( ($reception->file!=null) ): ?>
		              <img src="<?php echo e(asset($reception->file)); ?>" width="60" class="rounded-circle float-left d-inline-block mr-4 mt-3 ">
		              <?php endif; ?>
		                  
	                  <h3 class=" p-0 pr-4 mt-3 "><?php echo e($reception->user->name); ?></h3>
	                   <h6 class="small text-muted mb-4">Role:<?php echo e($reception->user->roles[0]->name); ?> of <?php echo e($reception->owner->clinic_name); ?></h6>
	                </div>
	                <div class="col-4 text-right">
	                 <!--  <a href="" class="btn btn-sm btn-primary">Edit Profile</a> -->
	                </div>
	              </div>
	            </div>
	            <div class="card-body">
	            	<div class="row" >

	            		<!-- general information -->
	            		<div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-xs-6 col-6 ">
	            			<h6 class="heading-small text-muted mb-4">General information</h6>
	            			<div class="row  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0" >
		            			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">Name:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;"><?php echo e($reception->user->name); ?></h5>
		            			</div>
		            			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">

		            				<p class="description mb-0 d-flex ">Gender:</p>
		            				<h5 class="heading-my ml-3 my-td " style="transform: none;"><?php echo e($reception->gender); ?></h5>
	                              	
	                          	</div>
		            		</div>

		            		<div class="row mt-3  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0">
		            			<div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				
		                              <p class="description mb-0 ">Register Date:</p>
		                              <h5 class="heading-my ml-3 my-td " style="transform: none;">
		                              	<?php
	                              	$date=date_create($reception->created_at);
									$date= date_format($date,"Y M dS ");
	                              	 ?>
	                              	<?php echo e($date); ?>

		                              </h5>
		            			</div>
		            			
		            		</div>

		            		<div class="row mt-3  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0">
		            			<div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">Phone:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;"><?php echo e($reception->phoneno); ?></h5>
		            			</div>
		            			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">Address:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;"><?php echo e($reception->address); ?></h5>
	                          	</div>
		            		</div>
		            		<!-- <div class="row mt-3  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0">
		            			<div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				
		                              <p class="description mb-0 ">Opening:</p>
		                              <h5 class="heading-my ml-3 my-td " style="transform: none;">Sep 30th 1998</h5>
		            			</div>
		            			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">Register Date:</p>
	                              <h5 class="heading-my ml-3 my-td " style="transform: none;">Sep 30th 1998</h5>
	                          	</div>
		            		</div> -->
	            		</div>
	            		<!-- user information -->
	            		<div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-xs-6 col-6 ">
	            			<h6 class="heading-small text-muted mb-4">Account information</h6>
	            			<div class="row  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0" >
		            			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">Email:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;"><?php echo e($reception->user->email); ?></h5>
		            			</div>
		            			
		            		</div>
		            		<h6 class="heading-small text-muted mb-2 mt-3">Education Infromation</h6>
		            		<div class="row mt-3  p-lg-2 p-md-2 p-sm-0 p-sx-0 p-0">
		            			<div class="col-xl-6 col-lg-6  col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 d-inline-block ">Degree:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;"><?php echo e($reception->education); ?></h5>
		            			</div>
		            			<!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 mt-lg-0 mt-md-3 mt-sm-3 mt-xs-3 mt-3">
		            				<p class="description mb-0 ">NRC NO:</p>
		                              <h5 class="heading-my ml-3 " style="transform: none;">9/AHMAZA(N)0987665</h5>
	                          	</div> -->
		            		</div>
		            		
	            		</div>

	            		

	            		
	            		
	            	</div>
	            </div>
	          </div>
	        </div>

      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontendTemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/myprj/gp-clinic/resources/views/reception/detail.blade.php ENDPATH**/ ?>