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
			<div class="container-fluid">
				<form>
					<fieldset>
						<legend>ข้อมูลบุคคล</legend>
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
								<div class="form-group">
									<label for="index_number">ลำดับที่</label>
									<input type="text" class="form-control" placeholder="ลำดับที่">
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
						<div class="row">
							<div class="input-append date" id="datetimepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
						        <input class="span2" size="16" type="text" value="12-02-2012">
						        <span class="add-on"><i class="icon-remove"></i></span>
						        <span class="add-on"><i class="icon-th"></i></span>
						    </div>            
					</fieldset>
				</form>
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	@include('layouts.adminFooter')
	@include('layouts.adminControlSidebar')
@stop
