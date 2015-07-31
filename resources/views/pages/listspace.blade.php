@extends('home')

@section('content')
        <style>
        .col-centered{
            float: none;
            margin: 0 auto;
        }
        </style>

        <div class="container">
            <div class="row text-center">
                <h2>Register Parkiran</h2>
                <p>Daftarkan properti Anda sebagai tempat parkir alternatif untuk mendapatkan penghasilan tambahan.</p>
            </div>

            <br>

            <div class="row">
                <div class="col-md-6 col-centered">

                    <!-- {!! Form::open(['url' => '/auth/register']) !!} -->
                    <form method="POST" action="/auth/register">
                    {!! csrf_field() !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Nama Parkiran') !!}
                            <!-- {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'type' => 'email']) !!} -->
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Contoh: Parkir alternatif didaerah Pondok Indah">
                        </div>

                        <div class="form-group">
                            {!! Form::label('title', 'Deskripsi') !!}
                            <!-- {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'type' => 'email']) !!} -->
                            <textarea class="form-control" rows="3" placeholder="Contoh: Lokasi sekitar 500 m dari Pondok Indah Mall"></textarea>
                        </div>

                        <hr>

                        <label>Jenis Properti</label>
                        <div class="form-group">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="options" id="1" autocomplete="off" checked> Rumah
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" id="1" autocomplete="off" checked> Ruko/Tempat Usaha
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" id="2" autocomplete="off"> Apartemen/Flat
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="options" id="3" autocomplete="off"> Tanah Kosong
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kapasitas Parkir</label>

                            <div class="input-group">
                                <input type="text" name="accom_bike" value="{{ old('accom_bike') }}" class="form-control" aria-label="Motor/Sepeda">
                                <span class="input-group-addon">Motor</span>

                                <input type="text" name="accom_bike" value="{{ old('accom_bike') }}" class="form-control" aria-label="Motor/Sepeda">
                                <span class="input-group-addon">Mobil</span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label>Provinsi</label>
                            <input type="text" name="city_id" value="{{ old('city_id') }}" class="form-control" placeholder="Contoh: Jakarta">
                            <i class="glyphicon glyphicon-map-marker form-control-feedback"></i>
                        </div>

                        <hr>

                        
                        
                        {!! Form::submit('Simpan', ['class' => 'btn btn-default']) !!}

                    </form>

                    <br><br>

                    <!-- {!! Form::close() !!} -->
                </div>
            </div>

        </div>

@stop