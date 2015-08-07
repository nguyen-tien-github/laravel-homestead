@extends('admin.master')
<div id="wrapper">

	@include('admin.nav')

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Slider Management</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-sm-6">
				<div class="dataTables_paginate paging_simple_numbers"
					id="dataTables-example_paginate">
				<?php echo $list->render(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">List Sliders</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="dataTable_wrapper">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<colgroup>
									<col class="col-xs-1">
									<col class="col-xs-3">
									<col class="col-xs-3">
									<col class="col-xs-6">
									<col class="col-xs-1">
								</colgroup>
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Image</th>
										<th>Description</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($list as $key => $item)
									<tr class="odd gradeX">
										<td>{{ $item->id }}</td>
										<td>{{ $item->title }}</td>
										<td class="center"><img
											src="{{ url() }}/mulodo/images/slider/upload/{{ $item->image }}"
											width=200 class="img-circle"></td>
										<td class="center">{{ $item->description }}</td>
										<td class="center">{!! Form::button('Edit', ['class' => 'btn btn-default']) !!}</td>
										<td class="center">{!! Form::button('Delete', ['class' => 'btn btn-default']) !!}</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-sm-6">
				<div class="dataTables_paginate paging_simple_numbers"
					id="dataTables-example_paginate">
				<?php echo $list->render(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /#page-wrapper -->

</div>