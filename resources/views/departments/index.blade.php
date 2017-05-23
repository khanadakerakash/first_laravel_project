@extends('layouts.master')

@section('content')
    <h1>Department List:</h1>
    <hr>
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['url' => 'department/store', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Name', ['class' => 'col-sm-2 control-label'])}}
                    <div class="col-sm-6">
                        {{Form::text('name', '', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    {{Form::label('code', 'Code', ['class' => 'col-sm-2 control-label'])}}
                    <div class="col-sm-6">
                        {{Form::text('code', '', ['class' => 'form-control'])}}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        {{Form::submit('Save', ['class' => 'btn btn-success'])}}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Counting Time</th>
                        <th>Created @</th>
                        <th>Update @</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($departments as $department)
                        <tr>
                            <td>{{$department->id}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->code}}</td>
                            <td>{{$department->mydate->diffForHumans(\Carbon\Carbon::now())}}</td>
                            <td>{{$department->created_at->toDayDateTimeString()}}</td>
                            <td>{{$department->updated_at->toDayDateTimeString()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
