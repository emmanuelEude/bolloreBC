@extends('layouts.base',['title'=>'Contact'])

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-8 offset-md-2 col-10 offset-1">
            <h2>Get In Touch</h2>
            <p class="text-muted">If you having trouble with this service , please<a href="#"> ask for help</a></p>
            <form action="{{route('store_contact')}}" method="post">
                {{csrf_field()}}
              <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" required>
                  {!!$errors->first('name','<span class="help-block">:message</span>')!!}
              </div>
                <div class="form-group {{$errors->has('Email') ? 'has-error' : ''}}">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" value="{{old('Email')}}" id="Email" class="form-control" required>
                    {!!$errors->first('Email','<span class="help-block">:message</span>')!!}
                </div>
                <div class="form-group {{$errors->has('Message') ? 'has-error' : ''}}">
                    {{--sr-only:pour les lecteurs d'ecran--}}
                    <label for="Message" class="sr-only" >Message</label>
                    <textarea type="text" name="Message" id="Message" cols="10" rows="10" class="form-control" required>
                        {{old('Message')}}
                    </textarea>
                    {!!$errors->first('Message','<span class="help-block">:message</span>')!!}

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Submit Enquiry &raquo;</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection