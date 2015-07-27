@extends('app')

@section('content')

        <style>
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        </style>

        <div class="container">
            <br><br>

            <div class="row">
                <div class="col-md-5 col-centered">
                    <h2>Sign up Parkir<i>in</i></h2>
                    <p>This is the <strong>Alpha version</strong> of the platform. At this stage, software can be unstable and could cause crashes or data loss. <i>Try it only if you aware of this concern</i>.</p>

                    <!-- {!! Form::open(['url' => '/auth/register']) !!} -->
                    <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}

                        <div class="form-group">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full name">
                            <p class="help-block">Your real-life name, so people will recognise you.</p>
                        </div>

                        <div class="form-group">
                            <!-- {!! Form::label('email', 'Email') !!} -->
                            <!-- {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'type' => 'email']) !!} -->
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your email">
                            <p class="help-block">We will send you an email to verify your account.</p>
                        </div>

                        <div class="form-group">
                            <!-- {!! Form::label('password', 'Password') !!} -->
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            <p class="help-block">Min 8 characters, never use common words.</p>
                        </div>
                      
                        <div class="form-group">
                            {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Retype your password']) !!}
                            <p class="help-block">Just retype the same password for confirmation.</p>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> By registering, I agree to Parkirin's <a>Terms of Service</a> and <a>Policies</a>.
                            </label>
                        </div>

                        {!! Form::submit('Sign up', ['class' => 'btn btn-default']) !!}
                        <a href="/" class="btn btn-dark">Not now</a>

                    </form>

                    <!-- {!! Form::close() !!} -->
                </div>
            </div>
        </div>

@stop