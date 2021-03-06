 @extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
	<section class="content-header">
		<h1>Edit Mata Pelajaran</h1>
	</section>
	<section class="content">
		<div class="box box-success"><br>
			<form method="post" action="{{route('admin.mapel.update',$mapels)}} " enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PATCH')}}
				<div class="isi">
					<div class="row">
						<div class="col-md-6">
							<label>Kode Mata Pelajara</label><br>
							<input type="text" name="kode" class="form-control input-sm" placeholder="Kode Mata Pelajaran" value="{{$mapels->kode}} " ><br>
						</div>
						<div class="col-md-6">
							<label>Mata Pelajaran</label><br>
							<input type="text" name="matapelajaran" class="form-control input-sm" placeholder="Mata Pelajaran" value="{{$mapels->matapelajaran}} "><br>
						</div>			
						<div class="col-md-6">
							<label>Pengajar</label><br>
							<textarea name="pengajar" style="width: 540px" >
								{{$mapels->pengajar}}
							</textarea>
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