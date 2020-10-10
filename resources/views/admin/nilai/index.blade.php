@extends('theme.themeadmin.admin_design')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
	<section class="content-header">
		<div class="row">
			<div class="col-md-8">
				<h3>Nilai</h3>
			</div>
			
			<div class="col-md-2">
				<form action="{{route('admin.nilai.search')}} " method="get">
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
				<a href="{{route('admin.nilai.create')}} " class="btn btn-success">Data Baru</a>
			</div>
		</div>
	</section>
	 <section class="content">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="box box-succes" >
	    			<table class="table table-striped">
						<thead>
							<tr>
							<th>No</th>
							<th>No. Induk</th>
							<th>Nama</th>
							<th>Semester</th>
							<th>Mata pelajaran</th>
							<th>Tugas 1</th>
							<th>Tugas 2</th>
							<th>Tugas 3</th>
							<th>UTS</th>
							<th>UAS</th>
							<th colspan="2">Aksi</th>
							</tr>
						</thead>
						<?php $no = 0; ?>
	    				@foreach($nilais as $nilai)
	    				<?php $no++ ?>
						<tbody>
							<tr>
								<td>{{$no}} </td>
								<td>{{$nilai->noinduk}} </td>
								<td>{{$nilai->nama}} </td>
								<td>{{$nilai->semester}} </td>
								<td>{{$nilai->matapelajaran}} </td>
								<td>{{$nilai->tugas1}} </td>
								<td>{{$nilai->tugas2}} </td>
								<td>{{$nilai->tugas3}} </td>
								<td>{{$nilai->UTS}} </td>
								<td>{{$nilai->UAS}} </td>
								<td><a href="{{route('admin.nilai.edit',$nilai->id)}} " class="btn btn-success" ><i class="fa fa-edit" ></i></a>	
								</td>
									<td>
								<form action="{{route('admin.nilai.destroy', $nilai)}} " class="" method="post">
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