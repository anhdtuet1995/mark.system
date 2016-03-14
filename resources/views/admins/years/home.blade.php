@extends('layouts.dashboard')

@section('content')
<div class="col-lg-5 col-lg-offset-1" >
    <h1><i class="fa fa-folder"></i> Quản lý năm học </h1>
    {{ Form::open(['method' => 'DELETE']) }}
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Lựa chọn</th>
					<th>STT</th>
					<th>Năm học</th>
					<th>Chức năng quản lý</th>
				</tr>
			</thead>
			<tbody>
				@foreach($years as $year)
				<tr>@role('admin')
					<td><input type="checkbox" name="selectMany[]" value="{{$year->id}}"></td>
					<td>{{$i++}}</td>
					<td>{{$year->year_title}}</td>
					<td>
						<a href="{{url('admin/year/edit')."/".$year->id}} " class="btn btn-info pull-left" style="margin-right: 3px;">Sửa</a>
			            {{ Form::open(['url' => 'admin/year/' . $year->id, 'method' => 'DELETE']) }}
			            {{ Form::submit('Xóa', ['class' => 'btn btn-danger'])}}
			            {{ Form::close() }}
		            </td>
		            @endrole
		            @role('teacher')
					<td><input type="checkbox" name="selectMany[]" value="{{$year->id}}"></td>
					<td>{{$i++}}</td>
					<td>{{$year->year_title}}</td>
					<td>
						<a href="{{url('teacher/year/edit')."/".$year->id}} " class="btn btn-info pull-left" style="margin-right: 3px;">Sửa</a>
			            {{ Form::open(['url' => 'teacher/year/' . $year->id, 'method' => 'DELETE']) }}
			            {{ Form::submit('Xóa', ['class' => 'btn btn-danger'])}}
			            {{ Form::close() }}
		            </td>
		            @endrole
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{{ Form::submit('Xóa nhiều', ['class' => 'btn btn-danger'])}}
	{{ Form::close() }}


</div>	

<div class="col-lg-5 col-lg-offset-1" >
	@if ($errors->has())
        @foreach ($errors->all() as $error)
            <div class='bg-danger alert'>{{ $error }}</div>
        @endforeach
    @endif

    <h1><i class='fa fa-user'></i> Thêm năm học</h1>
	@role('admin')
    {{ Form::open(['role' => 'form', 'url' => '/admin/year']) }}
	@endrole
	@role('teacher')
    {{ Form::open(['role' => 'form', 'url' => '/teacher/year']) }}
	@endrole
	
    <div class='form-group'>
        {{ Form::label('year', 'Năm học') }}
        {{ Form::text('year', null, ['placeholder' => 'Năm học', 'class' => 'form-control']) }}
    </div>

    <div class='form-group'>
        {{ Form::submit('Xác nhận', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}
</div>
@stop