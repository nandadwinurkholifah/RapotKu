@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content-header">
		<h1>Edit Siswa</h1>
    </section>
    <section class="content">
		<div class="row">
    		<div class="col-md-12">
    			<div class="box box-succes">
	    			<form method="post" action="{{ route('admin.tkj.update', $tkjs)}} " enctype="multipart/form-data">
	    				{{ csrf_field() }}
	    				{{ method_field('PATCH')}}

	    				<div class="input">    					
		    				<div class="row">
		    					<div class="col-md-3">
				    				<label>No. Induk</label><br>
									 <input name="noinduk" class="form-control input-sm" placeholder="No.induk" value="{{$tkjs->noinduk}} " >
								</div>
								
								<div class="col-md-3">
				    				<label>Nama</label><br>
									 <input name="nama" class="form-control input-sm" placeholder="Nama" value="{{$tkjs->nama}} " >
								</div>

								<div class="col-md-3">
				    				<label>Jenis Kelamin</label><br>
									 <select name="jeniskelamin">
									 	@foreach($jnkels as $jnkel)
										<option 
										value="{{$jnkel->nama}} "
										@if ($jnkels)
											selected
										@endif
										>
										{{$jnkel->nama}} 
										</option>
									 	@endforeach
									 </select>
								</div>
							</div><br>
							<div class="row">
								<div class="col-md-6">
									<label>Alamat</label><br>
									<textarea name="alamat" cols="50" rows="8">
									{{$tkjs->alamat}}
									</textarea>
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