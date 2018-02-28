@extends('layouts.adminTemplate')
@section('content')
	@include('layouts.adminHeader')
	@include('layouts.adminLeftSidebar')
 	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>บันทึกข้อมูลใหม่</h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">บันทึกข้อมูลใหม่</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">ข้อมูลบุคคล</h3>
						</div>
						<form role="form">
							<div class="box-body">
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="exampleInputEmail1">ลำดับที่</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="service_type">ประเภทผู้ขอรับบริการ</label>
											<select name="service_type" class="form-control">
												<option value="1">รัฐบาล</option>
												<option value="2">เอกชน</option>
												<option value="100">อื่นๆ</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
										<div class="form-group">
											<label for="service_type_etc">ประเภทผู้ขอรับบริการอื่นๆุ</label>
											<input type="text" class="form-control" placeholder="ประเภทผู้ขอรับบริการอื่นๆ โปรดระบุ">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
							<div class="box-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.adminFooter')
	@include('layouts.adminControlSidebar')
@stop
