@extends('layouts.base_login')

@section('content')
<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    <div class="msg">Login</div>
    {{ csrf_field() }}
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-envelope"></i>
        </span>
        <div class="form-line">
            <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>
    <div class="input-group">
        <span class="input-group-addon">
            <i class="fa fa-lock"></i>
         </span>
        <div class="form-line">
            <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required>
        </div>
    </div>
   
   

    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Se connecter</button>


</form>
@endsection
