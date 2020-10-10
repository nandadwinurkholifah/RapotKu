@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content-header">
		<h1>Tambah Guru</h1>
    </section>
	<section class="content">
		<div class="box box-success"><br>
			<form method="post" action="{{route('admin.guru.update',$gurus)}} " enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="isi">
					<div class="row">
						<div class="col-md-6">
							<label>Nomor Induk Pegawai</label><br>
							<input type="text" name="nip" class="form-control input-sm" placeholder="Nomor Induk Pegawai" value="{{$gurus->nip}} " ><br>
						</div>
						<div class="col-md-6">
							<label>Nama</label><br>
							<input type="text" name="nama" class="form-control input-sm" placeholder="Nama" value="{{$gurus->nama}} " ><br>
						</div>
						<div class="col-md-6">
	    					<label>Jenis Kelamin </label><br>
						 	<select name="jeniskelamin" style="width: 100%" class="form-control select-sm">
						 		@foreach($jnkels as $jnkel)
								<option 
								value="{{$jnkel->nama}} "
								@if ($jnkels == $gurus->jeniskelamin)
									selected
								@endif
								>
								{{$jnkel->nama}} 
								</option>
							 	@endforeach
						 	</select><br>
						</div>
						<div class="col-md-6">
							<label>Telepon</label>
							<input type="text" name="telepon" class="form-control input-sm" placeholder="Telepon" value="{{$gurus->telepon}} " ><br>
						</div>
						<div class="col-md-6">
							<div class="form-group"><br>
								<input type="submit" class="btn btn-primary" value="Simpan">
							</div>
						</div>						
		    		</div>
				</div>
			</form>
		</div>
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection