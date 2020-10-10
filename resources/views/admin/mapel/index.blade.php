@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
	<section class="content-header">
		<div class="row">
			<div class="col-md-8">
				<h3>Mata Pelajaran</h3>
			</div>
		
			<div class="col-md-2">
				<form action="{{route('admin.mapel.search')}} " method="get">
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
				<a href="{{route('admin.mapel.create')}} " class="btn btn-success">Data Baru</a>
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
								<th>Kode</th>
								<th>Mata pelajaran</th>
								<th>Pengajar</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<?php $no=0; ?>
						@foreach($mapels as $mapel)
						<?php $no++ ?>
						<tbody>	
							<tr>
								<td>{{$no}} </td>
								<td>{{$mapel->kode}} </td>
								<td>{{$mapel->matapelajaran}} </td>
								<td>{{$mapel->pengajar}} </td>
								<td>
								<div class="form-gr">
									<a href="{{route('admin.mapel.edit',$mapel->id)}} " class="btn btn-primary sm"><i class="fa fa-edit"></i></a>
									<form action="{{route('admin.mapel.destroy',$mapel)}} " method="post">
										{{csrf_field()}}
                        				{{method_field('DELETE')}}
										<button class="btn btn-danger sm" type="submit"><i class="fa fa-trash"></i></button>
									</form>
								</div>
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