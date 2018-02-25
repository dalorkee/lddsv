<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('AdminLTE-2.4.3/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>Prajak Sopha</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
						<i class="fas fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">การบริการข้อมูล</li>
			<li class="active"><a href="#"> Dashboard</a></li>
			<li><a href="{{ url('/add') }}"> <span>บันทึกข้อมูลใหม่</span></a></li>
			<li><a href="#"> <span></span>สถานะการบริการ</a></span></li>
			<li class="header">บริหารจัดการเว็บไซต์</li>
			<li class="treeview">
				<a href="#">
					<span>หน้าแรก</span>
					<span class="pull-right-container">
						<i class="fas fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="far fa-circle"></i> เรื่องเด่น</a></li>
					<li><a href="#"><i class="far fa-circle"></i> ข่าว</a></li>
					<li><a href="#"><i class="far fa-circle"></i> บทความ</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<span>หน้าอื่นๆ ของเว็บไซต์</span>
					<span class="pull-right-container">
						<i class="fas fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="#"><i class="far fa-circle"></i> อัตราค่าบริการ</a></li>
					<li><a href="#"><i class="far fa-circle"></i> รูปประกอบเว็บไซต์</a></li>
					<li><a href="#"><i class="far fa-circle"></i> แบบฟอร์ม</a></li>
				</ul>
			</li>
			<li><a href="#"><i></i> <span></span>จัดการผู้ใช้</a></span></li>
		</ul>

	</section>
	<!-- /.sidebar -->
</aside>
