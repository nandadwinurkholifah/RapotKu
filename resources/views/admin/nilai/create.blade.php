@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content-header">
		<h1>Tambah</h1>
    </section>
    <section class="content">
		<div class="row">
    		<div class="col-md-12">
    			<div class="box box-succes"><br>
	    			<form method="post" action="{{route('admin.nilai.store')}} " enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				
	    				<div class="input">
		    				<div class="row col-md-12">
		    					<div class="col-md-3">
				    				<label>No.Induk</label><br>
									 <input type="text" name="noinduk" class="form-control input-sm" placeholder="No.Induk">
								</div>
								<div class="col-md-3">
				    				<label>Nama</label><br>
									 <input type="text" name="nama" class="form-control input-sm" placeholder="Nama">
								</div>
								<div class="col-md-3">
				    				<label>Semester</label><br>
									 <input type="text" name="semester" class="form-control input-sm" placeholder="Semester">
								</div>
							</div>

							<div class="row col-md-12">
								<div class="col-md-3"><br>
				    				<label>Mata Pelajaran</label><br>
									 <input type="text" name="matapelajaran" class="form-control input-sm" placeholder="Mata Pelajaran">
								</div>

								<div class="col-md-3"><br>
				    				<label>Tugas 1</label><br>
									 <input type="text" name="tugas1" class="form-control input-sm" placeholder=" Tugas 1">
								</div>
								<div class="col-md-3"><br>
				    				<label>Tugas 2</label><br>
									 <input type="text" name="tugas2" class="form-control input-sm" placeholder="Tugas 2">
								</div>
							</div>
							
							<div class="row col-md-12">
								<div class="col-md-3"><br>
				    				<label>Tugas 3</label><br>
									 <input type="text" name="tugas3" class="form-control input-sm" placeholder="Tugas 2">
								</div>
								<div class="col-md-3"><br>
				    				<label>UTS</label><br>
									 <input type="text" name="UTS" class="form-control input-sm" placeholder=" UTS">
								</div>
								<div class="col-md-3"><br>
				    				<label>UAS</label><br>
									 <input type="text" name="UAS" class="form-control input-sm" placeholder="UAS">
								</div>
							</div>			
					</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
	    			</form><br>			
    			</div>
    		</div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection