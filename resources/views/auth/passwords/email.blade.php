@extends('main')

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="col-md-4 col-md-offset-4">
                <div class="row">
                    <h3>Reset Password</h3>
                    <hr>
                </div>
                {!! Form::open(['route' => 'password.email', 'method' => 'post']) !!}

                    <div class="form-horizontal">
                        <div class="form-group">
                            {{ Form::label('email', 'E-Mail Address:', ['class' => 'control-label']) }}
                            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter E-Mail Address']) }}
                        </div>
                    </div>

                    <div class="row">
                        {{ Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary btn-block']) }}
                        <a href="{{ route('login') }}" class= 'btn btn-default btn-block'>Back</a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
</div>
@endsection
