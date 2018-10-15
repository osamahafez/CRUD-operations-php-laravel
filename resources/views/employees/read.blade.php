@extends('layout.app')

@section('content')

    <div class="container">
        <a class="btn btn-dark" href={{url('employees')}}> &laquo; return to table</a>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card card-custom">
                    <div class="card-header">
                       {{$employee->name}}'s Profile
                    </div>
                    <div class="card-body">
                        <p> ID: {{$employee->id}} </p> 
                        <p> Name: {{$employee->name}} </p>
                        <p> Email: {{$employee->email}} </p>
                        <p> Position: {{$employee->position}} </p>
                        <p> Experience: {{$employee->rank}} </p>
                        <p> Joined: {{$employee->created_at->toDateString()}} </p>
                        <a class="btn btn-dark" href="{{url('employees/'.$employee->id.'/edit')}}">Edit</a>

                        {!! Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'class'=>'delete-form']) !!}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger delete-button'])}}
                            {{Form::hidden('_method', 'DELETE')}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection