@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-9 text-light m-0 p-0">

		</div>
		<div class="col box-login text-center">
			<form class="form-box-login mx-5" method="POST" action="{{ route('login') }}">
				@csrf
				<h2 class=" mb-4 ">Login</h2>

				<div class=" mb-3">
					<div class="input-group">
						<span class="input-group-text">Email:</span>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
					<div class="form-text text-left">Nunca compartilharemos seu e-mail com mais ninguém.</div>

				</div>
				<div class="mb-3">
					<div class="input-group">
						<span class="input-group-text">Password:</span>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>
				<div class="mb-3 ">

	
  
					<div class="row d-flex justify-content-center items-center">
					<div class="col-12">
						<input class="col-6 form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						
						<label class="col-6 form-text text-muted text-left">Lembrar de min?</label>
</div>
					</div>
					<label class="form-text text-center text-muted px-2" for="exampleCheck1">Esqueceu a senha?</label>
				</div>
				<div class="col">
					<a href="{{route('register')}}"><button type="button" class="col-12 btn btn-block btn-sm btn-primary my-2">Registre-se</button></a>
				</div>
				<button type="submit" class="col-12 btn btn-block btn-sm btn-danger">Entrar</button>
				<div class="row my-2">
					<div class="col-6 my-1">
						<a href="#" class=" w-100 btn btn-primary btn-sm"> <span>Facebook</span> <i class="fa fa-facebook"></i> </a>
					</div>
					<div class="col-6 my-1">
						<a href="#" class=" w-100 btn btn-danger btn-sm"> <span>Google</span> <i class="fa fa-google-plus"></i> </a>
					</div>
				</div>
			</form>


		</div>
	</div>
</div>
@endsection