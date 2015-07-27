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
                <div class="col-md-3 col-centered">
                    <h2>Log in Parkir<em>in</em></h2>
                    <br>

                    <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}

                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Your email">
                        </div>

                        <div class="form-group">
                            <!-- {!! Form::label('password', 'Password') !!} -->
                            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                        </div>

                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember me
                            </label>
                        </div>    
                            
                        {!! Form::submit('Log in', ['class' => 'btn btn-default']) !!}

                        <hr>
                        <a href="/password/email">Forgot password?</a>
                        <p>Don't have an account? <a href="register">Sign up</a></p>

                    </form>

                </div>
            </div>
        </div>

@stop