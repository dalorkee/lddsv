@extends('layouts.adminTemplate')
@section('content')
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
					<div class="box-body">
						<form role="form" class="main-form">
							<fieldset>
								<legend>ข้อมูลการบริการ</legend>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="service_no">ลำดับที่</label>
											<input type="text" name="service_no" class="form-control"  placeholder="ลำดับที่">
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="book_receive_date">วันที่รับหนังสือ:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="book_receive_date" id="book_receive_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
										<div class="form-group">
											<label for="service_no">เลขที่หนังสือ</label>
											<input type="text" name="book_no" class="form-control" placeholder="เลขที่หนังสือ">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="service_type">ประเภทผู้ขอรับบริการ</label>
											<select name="service_type" class="form-control select2" style="width: 100%">
												<option value="1">รัฐบาล</option>
												<option value="2">รัฐวิสาหกิจ</option>
												<option value="3">เอกชน</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="service_kind">ชนิดผู้ขอรับบริการ</label>
											<select name="service_kind" id="service_kind" class="form-control select2" style="width: 100%">
												<option value="1">องค์กร/หน่วยงาน</option>
												<option value="2">บุคคล</option>
											</select>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>ข้อมูลผู้ขอรับบริการ</legend>
								<div id="organize">
									<div class="row">
										<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
											<div class="form-group">
												<label>ชื่อองค์กร/หน่วยงาน ที่ขอรับบริการ</label>
												<input type="text" name="cust_org_name" class="form-control" placeholder="ชื่อองค์กร/หน่วยงาน">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
											<div class="form-group">
												<label>หมายเลขทะเบียนนิติบุคคล (ถ้ามี)</label>
												<input type="text" name="cust_company_idx" class="form-control" placeholder="หมายเลขทะเบียนนิติบุคคล">
											</div>
										</div>
									</div>
								</div>
								<div id="personal">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="customer_id_card">หมายเลขบัตร ปชช.</label>
												<input type="text" name="cust_id_card" class="form-control" placeholder="หมายเลขบัตร ปชช.">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="name_title">คำนำหน้าชื่อ</label>
												<select name="name_title" id="name_title" class="form-control select2" style="width: 100%">
													<option value="0">- โปรดเลือก -</option>
													<option value="1">นาย</option>
													<option value="2">นาง</option>
													<option value="3">นางสาว</option>
													<option value="4">อื่นๆ ระบุ</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="name_title_other">คำนำหน้าชื่ออื่นๆ</label>
												<input type="text" name="name_title_other" class="form-control"  placeholder="คำนำหน้าชื่ออื่นๆ" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="customer_name">ชื่อ</label>
												<input type="text" name="cust_name" class="form-control" placeholder="ชื่อ">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="customer_lastname">นามสกุล</label>
												<input type="text" name="cust_lastname" class="form-control" placeholder="นามสกุล">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="customer_mobile">หมายเลขโทรศัพท์</label>
												<input type="text" name="cust_mobile" class="form-control" placeholder="หมายเลขโทรศัพท์">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
											<div class="form-group">
												<label for="customer_email">อีเมล์</label>
												<input type="text" name="cust_email" class="form-control" placeholder="E-mail address">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="customer_house_no">ที่ตั้งเลขที่/บ้านเลขที่</label>
											<input type="text" name="cust_house_no" class="form-control" placeholder="บ้านเลขที่">
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
										<div class="form-group">
											<label for="customer_addr">หมู่บ้าน/อาคาร/ชั้น</label>
											<input type="text" name="cust_house_name" class="form-control" placeholder="ชื่อหมู่บ้าน/อาคาร/ชั้น">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="customer_addr">หมู่ที่</label>
											<input type="text" name="cust_village_no" class="form-control"  placeholder="หมู่ที่">
										</div>
									</div>
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="province">จังหวัด</label>
											<select name="prov" id="prov" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="district">อำเภอ/เขต</label>
											<select name="dist" id="dist" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="sub_district">ตำบล/แขวง</label>
											<select name="sub_dist" id="sub_dist" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="service_condition">เงื่อนไขการขอรับบริการ</label>
											<select name="service_condition" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
												<option value="1">คิดค่าบริการ</option>
												<option value="2">ยกเว้นค่าบริการ</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
										<div class="form-group">
											<label for="service_area">พื้นที่ขอรับบริการ</label>
											<input type="text" name="service_area" class="form-control"  placeholder="พื้นที่ขอรับบริการ">
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>รายการข้อมูล</legend>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-circle"></i> Add Data</button>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>การดำเนินการ</legend>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
										<div class="form-group">
											<label for="service_assign">ผู้ได้รับมอบหมาย</label>
											<select name="service_assign" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
												<option value="1">นาย ก</option>
												<option value="2">นาย ข</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
										<div class="form-group">
											<label for="service_contact_result">ผลการประสานงาน</label>
											<textarea name="service_contact_result" class="form-control"  placeholder="ผลการประสานงาน"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
										<div class="form-group">
											<label for="service_status">สถานะการบริการ</label>
											<select name="service_status" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
												<option value="1">xxx</option>
												<option value="2">yy</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="sent_apporve_date">วันที่ส่งอนุมัติ:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="sent_approve_date" id="sent_apporve_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="apporve_date">วันที่ได้รับอนุมัติ:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="approve_date" id="apporve_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="copy_data_date">วันที่คัดลอกข้อมูล:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="data_copy_date" id="data_copy_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="data_download_date">วันที่ดาวน์โหลดข้อมูล:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="data_download_date" id="data_download_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="job_id">Job ID</label>
											<input type="text" name="job_id" class="form-control"  placeholder="Job ID">
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="job_queue">Job Queue</label>
											<input type="text" name="job_queue" class="form-control"  placeholder="Job Queue">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="media">สื่อบันทึกข้อมูล</label>
											<select name="media" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
												<option value="1">xxx</option>
												<option value="2">yy</option>
											</select>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="media_receive_date">วันที่มารับข้อมูล:</label>
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="far fa-calendar-alt"></i>
												</div>
												<input type="text" name="media_receive_date" id="media_receive_date" class="form-control pull-right"  placeholder="d/m/Y">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<label for="paid_status">สถานะการชำระเงิน</label>
											<select name="paid_status" class="form-control select2" style="width: 100%">
												<option value="0">- โปรดเลือก -</option>
												<option value="1">xxx</option>
												<option value="2">yy</option>
											</select>
										</div>
									</div>
								</div>
							</fieldset>
							<div class="row">
								<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
									<div class="form-group">
										<label for="service_note">หมายเหตุ</label>
										<textarea name="service_note" class="form-control"  placeholder="หมายเหตุ"></textarea>
									</div>
								</div>
							</div>
							<fieldset>
								<legend>&nbsp;</legend>
								<div class="row">
									<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 col-xl-2">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save</button>
											<button type="reset" class="btn btn-danger">Reset</button>
										</div>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="box-footer">
						* โปรดตรวจสอบความถูกต้องของข้อมูล ก่อนการบันทึกเสมอ
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="display: inline-block;">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="form-group">
								<label for="data">ข้อมูล</label>
								<select name="service_data" class="form-control select2" style="width: 100%">
									<option value="0">- โปรดเลือก -</option>
									<option value="1">ภาพถ่ายทางอากาศสีเชิงเลข</option>
									<option value="2">แผนที่ภาพถ่ายออร์โธสี</option>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<div class="form-group">
								<label for="data_resolution">ความละเอียด</label>
								<select name="service_data_resolution" class="form-control select2" style="width: 100%">
									<option value="0">- โปรดเลือก -</option>
									<option value="1">1:25,000</option>
									<option value="2">1:4,000</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.content-wrapper -->
@stop
@section ('script')
<script>
$(function () {
	$('#personal').hide();
	$('#book_receive_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('#sent_approve_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('#approve_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('#data_copy_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('#data_download_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('#media_receive_date').datepicker({
		language:'th-th',
		format:'dd/mm/yyyy',
		todayHighlight: true
	});
	$('.select2').select2();
	/* toggle organize/personal */
	$('#service_kind').on('change', function() {
		if ($(this).find(":selected").val() === '2') {
			$('#organize').hide(1000);
			$('#personal').show(1000);
		} else {
			$('#organize').show(1000);
			$('#personal').hide(1000);
		}
	});

});
</script>
@stop
