@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content-header">
		<div class="row">
			<div class="col-md-8">
				<h3>Daftar Guru</h3>
			</div>

			<div class="col-md-2">
				<form action="{{route('admin.guru.search')}} " method="get">
					<div class="input-group custom-search-form" style="margin-top: 20px">
						<input type="text" class="form-control " name="keyword" placeholder="Search">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
			</div>

			<div class="col-md-2">
				<br>
				<a href="{{route('admin.guru.create')}} " class="btn btn-success">Data Baru</a>
			</div>
		</div>
    </section>
    <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="box box-succes">
	    			<table class="table table-striped">
						<thead>
							<tr>
							<th>No</th>
							<th>Nip</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Telepon</th>
							<th colspan="1">Aksi</th>
							</tr>
						</thead>
						<?php $no = 0; ?>
						@foreach($gurus as $guru)
	    				<?php $no++ ?>
						<tbody>			
							<tr>
								<td>{{$no}} </td>
								<td>{{$guru->nip}} </td>
								<td>{{$guru->nama}} </td>
								<td>{{$guru->jeniskelamin}}  </td>
								<td>{{$guru->telepon}}  </td>
								<td>
									<a href="{{route('admin.guru.edit',$guru->id)}} " class="btn btn-primary"><i class="fa fa-edit"></i></a>
								<form action="{{route('admin.guru.destroy', $guru)}} " class="" method="post">
                        		{{csrf_field()}}
                        		{{method_field('DELETE')}}
                            	<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>   
                        		</form>
								</td>
							</tr>
						</tbody>
						@endforeach
						
					</table>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection