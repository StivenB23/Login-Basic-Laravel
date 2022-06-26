    @extends('partials.nav')

    @section('contenido')
    <div class="container">
        <div class="row">
            <h1 class="blue-text text-lighten-1" >Login</h1>
        </div>
    </div>
    {{-- Middleware--}}
    {{-- <pre>{{ Auth::user() }}</pre> --}}
    <form class="container col s8" action="" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s6">
                <p class="red-text text-darken-4">{{ $errors->first('email') }}</p>
                <label for="">Email: <b class="red-text text-darken-4">*</b></label>
                <input type="email" name="email" id="" value="{{old('email')}}" placeholder="Email..." required autofocus>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <p class="red-text text-darken-4">{{ $errors->first('password') }}</p>
                <label for="">Password: <b class="red-text text-darken-4">*</b></label>
                <input type="password" name="password" id="" placeholder="Contraseña..." required >
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label>
                    <input type="checkbox" class="filled-in" name="remember" id=""  />
                    <span>remember my session</span>
                  </label>
            </div>
        </div>
       <br>
       <button class="btn waves-effect blue lighten-1" type="submit" name="action">Login</button>
    </form> 
    @endsection

    
