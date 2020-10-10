@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content-header">
		<h1>Tambah Siswa</h1>
    </section>
    <section class="content">
		<div class="row">
    		<div class="col-md-12">
    			<div class="box box-succes"><br>
	    			<form method="post" action="{{route('admin.tkj.store')}} " enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				
	    				<div class="input">
		    				<div class="row">
		    					<div class="col-md-3">
				    				<label>No. Induk</label><br>
									 <input type="text" name="noinduk" class="form-control input-sm" placeholder="No.induk">
								</div>
								
								<div class="col-md-3">
				    				<label>Nama</label><br>
									 <input type="text" name="nama" class="form-control input-sm" placeholder="Nama">
								</div>
								
								<div class="col-md-3">
				    				<label>Jenis Kelamin</label><br>
									 <select name="jeniskelamin">
									 	@foreach($jnkels as $jnkel)
										<option value="{{$jnkel->nama}} ">{{$jnkel->nama}} </option>
									 	@endforeach
									 </select>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-6">
									<label>Alamat</label><br>
									<textarea name="alamat" cols="50" rows="8"></textarea>
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