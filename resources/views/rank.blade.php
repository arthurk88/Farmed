@extends('layouts.app')

@section('content')
<div class="container ">
	<div class="row">
		<div class="col-9 box-glass text-light m-0 p-0">
			<div class="bg-danger m-0 p-0">
				<h1 class="text-left my-5 mx-5 ">Rank</h1>
			</div>

			<table>
				<tr>
					<th>Fama</th>
					<th>Respeito</th>
					<th></th>
					<th></th>
				</tr>
			</table>

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
				<div class="mb-3 form-check">

					<label class="form-check-label" for="exampleCheck1"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Lembrar de min?</label>
					<label class="form-check-label" for="exampleCheck1">Esqueceu a senha?</label>
				</div>
				<button type="submit" class="col-12 btn btn-block btn-sm btn-danger">Entrar</button>
			</form>
			<div class="col mx-5">
				<a href="{{ route('register') }}"><button type="button" class="col-12 btn btn-block btn-sm btn-primary my-2">Registre-se</button></a>
			</div>

		</div>
	</div>
</div>
@endsection