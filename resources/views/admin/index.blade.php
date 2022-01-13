@extends('admin.admin_master')
@section('admin')

  <div class="content-wrapper">
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>

		<a>
			<div>
				<a href="{{ route('user.view') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
			<p class="text-mute mt-20 mb-0 font-size-16">New Student</p>
		    
			<h3 class="text-white mb-0 font-weight-500">400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
		</div>
	</a>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
		</div>
		<a>
		<div>
			<a href="{{ route('student.registration.view') }}" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Student Registered List">
			<p class="text-mute mt-20 mb-0 font-size-16">Student Registered</p>
			<h3 class="text-white mb-0 font-weight-500">400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
		</div>
	</a>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-info-light rounded w-60 h-60">
			<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
		</div>
		<div>
			
			<p class="text-mute mt-20 mb-0 font-size-16">Unregistered Students</p>
			<h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-3 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-danger-light rounded w-60 h-60">
			<i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
			<h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i class="fa fa-caret-up"></i> -1.5%</small></h3>
		</div>
	</div>
</div>
</div>
 
 

				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>

  @endsection