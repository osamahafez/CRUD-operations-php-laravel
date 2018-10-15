@extends('layout.app')

@section('content')
    <div class="container">
        {{--Success Msg--}}
        @if (session('msg_success'))
            <div class="alert alert-success text-center">{{session('msg_success')}}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <tr class="table-header">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Position</td>
                    <td>Rank</td>
                    <td>Joined</td>
                    <td>Operations</td>
                </tr>

                @foreach ($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->position}}</td>
                        <td>{{$employee->rank}}</td>
                        <td>{{$employee->created_at->toDateString()}}</td>
                        <td>

                            <a class="btn btn-primary btn-sm" href="employees/{{$employee->id}}">Read</a>

                            <a class="btn btn-success btn-sm" href="employees/{{$employee->id}}/edit">Edit</a>
                            
                            {!! Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'class'=>'delete-form']) !!}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm delete-button'])}}
                                {{Form::hidden('_method', 'DELETE')}}
                            {!! Form::close() !!}
                            
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>

        <a class="btn btn-dark" href="employees/create">Create Employee</a>
    </div>
@endsection