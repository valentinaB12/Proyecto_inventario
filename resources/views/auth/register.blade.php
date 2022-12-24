@extends('layouts.app')

@section('content')
<div class="container" style="background-image:url('/resources/imagenes/fondo2.jpg')" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="background:linear-gradient(#3cb2f6,#07fabd); height: 500px;">
                <div class="card-header " style=" font-style:sant-serif; font-size:20px;">Registro</div>

                <div class="card-body " >
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-0 offset-md-1">
                            <div>
                            <label for="name" class="col-md-4 col-form-label "></label>
                            </div>
                            <div class="col-md-9" style="width: 25rem">
                            <input id="name" type="text" placeholder="Name" class="form-control-lg form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2 offset-md-1">
                            <div>
                            <label for="email" class="col-md-4 col-form-label"></label>
                            </div>
                            <div class="col-md-9" style="width: 25rem">
                                <input id="email" type="email" placeholder="Email"class=" form-control-lg form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 offset-md-1">
                            <div>
                            <label for="password" class="col-md-4 col-form-label form-label"> </label>
                            </div>
                            <div class="col-md-9" style="width: 25rem">
                                <input id="password" type="password" placeholder="Password" class=" form-control-lg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 offset-md-1">
                            <div>
                            <label for="password-confirm" class="col-md-4 col-form-label "></label>
                            </div>
                            <div class="col-md-9" style="width: 25rem">
                                <input id="password-confirm" type="password" placeholder="Confirm password" class=" form-control-lg form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3" >
                            <div class=" offset-md-1" style="padding:15px" >



                                <button type="submit"  style="width: 26rem" class="btn btn-primary btn-block mb-8 ">
                                  Registro
                                </button>



                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
