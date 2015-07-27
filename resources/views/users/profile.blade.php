@extends('app')

@section('content')

        <div class="container">
            <br><br>

            <div class="row">
                <div class="col-md-5">
                    <h2>Complete your profile</h2>
                    <p>It requires your username and email for sign up, that's it! Then check your email afterward for further instruction.</p>

                    {!! Form::open(['url' => 'register']) !!}
                    
                        <div class="form-group">
                            <!-- {!! Form::label('first_name', 'First Name') !!} -->
                            {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First name']) !!}
                            <p class="help-block">We will send you an instruction to setup your account.</p>
                        </div>

                        <div class="form-group">
                            <!-- {!! Form::label('surname', 'Last Name') !!} -->
                            {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Last name']) !!}
                            <p class="help-block">We will send you an instruction to setup your account.</p>
                        </div>
                    
                        {!! Form::submit('Register', ['class' => 'btn btn-default']) !!}
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

@stop