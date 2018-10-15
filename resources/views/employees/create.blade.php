@extends('layout.app')

@section('content')

    <div class="container">
        <a class="btn btn-dark" href={{url('employees')}}> &laquo; return to table</a>
        <div class="row">
            <div class="col-md-6 offset-md-3">

                {{--Success Msg--}}
                @if (session('msg_success'))
                    <div class="alert alert-success text-center">{{session('msg_success')}}</div>
                @endif

                {{--Error Msg--}}
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger text-center">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="card card-custom">
                    <div class="card-header">
                        Create Employee
                    </div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'EmployeesController@store']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name')}} 
                                {{Form::text('name', '', ['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('email', 'Email')}} 
                                {{Form::text('email', '', ['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('position', 'Position')}} 
                                {{Form::text('position', '', ['class'=>'form-control'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('rank', 'Rank')}} 
                                {{Form::select('rank', ['fresh' => 'Fresh', 'junior' => 'Junior', 'senior' => 'Senior'], 'fresh', ['class'=>'form-control'])}}
                            </div>
                            {{Form::submit('Create', ['class'=>'btn btn-dark'])}}
                        {!! Form::close() !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>



@endsection