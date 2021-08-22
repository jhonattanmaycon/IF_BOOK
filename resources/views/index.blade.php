
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>IFBOOK</title>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets\img\favicon-32x32.png')}}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets\img\favicon-16x16.png')}}">
		<link rel="manifest" href="{{asset('assets\img\site.webmanifest')}}">
		<link rel="sortcut icon" href="favicon.ico" type="image/x-icon" />;
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Font-->
		<link rel="stylesheet" type="text/css" href="{{asset('assets\css\sourcesanspro-font.css')}}">
		<!-- Main Style Css -->
	    <link rel="stylesheet" href="{{asset('assets\css\stylelogin.css')}}"/>

		<style>

		</style>

	</head>
	<body class="form-v8">

		<div class="page-content">
			<div class="form-v8-content">
				<div class="form-left">
					<img src="{{asset('assets\img\logo.png')}}" alt="form">
				</div>
				<div class="form-right">
					<div class="tab">

						<div class="tab-inner">
							<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Registrar</button>
						</div>
						<div class="tab-inner">
							<button class="tablinks" onclick="openCity(event, 'sign-in')">Entrar</button>
						</div>
					</div>
			
					
					<form method="POST" class="form-detail" action="{{ route('login') }}">
						@csrf

						<div class="tabcontent" id="sign-in">
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" id="email" name="email" id="full_name_1" class="input-text" :value="old('email')" required>
									<span class="label">Nome de usuário ou e-mail</span>
			  						<span class="border"></span>
								</label>
							</div>
								<!-- * 
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
									<span class="label">E-Mail</span>
			  						<span class="border"></span>
								</label>
						
							</div>	-->
							<div class="form-row">
								<label class="form-row-inner">
									<input type="password" name="password" id="password" class="input-text" required autocomplete="current-password">
									<span class="label">Senha</span>
									<span class="border"></span>
								</label>
							</div>
							<!-- * 
							<div class="form-row">
								<label class="form-row-inner">
									<input type="password" name="comfirm_password_1" id="comfirm_password_1" class="input-text" required>
									<span class="label">Comfirm Password</span>
									<span class="border"></span>
								</label>
							
							</div>-->
							<div class="form-row-last">

								<input type="submit" name="register" class="register" value="Login">
							</div>
						</div>
					</form>

					<form class="form-detail" action="{{ route('register') }}" method="post">
						@csrf
						<div class="tabcontent" id="sign-up">

							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="name" id="name" class="input-text" :value="old('name')" required autofocus>
									<span class="label">Digite um nome de usuário</span>
			  						<span class="border"></span>
								</label>
							</div>
							<div class="form-row">
								<label class="form-row-inner">
									<input type="text" name="email" id="email" class="input-text" :value="old('email')" required>
									<span class="label">Digite um email válido</span>
			  						<span class="border"></span>
								</label>
							</div>

							<div class="form-row">
								<label class="form-row-inner"  :value="__('Password')">
									<input type="password" name="password" id="password" class="input-text" required autocomplete="new-password">
									<span class="label">Escolha uma senha</span>
									<span class="border"></span>
								</label>
							</div>

							<div class="form-row">
								<label class="form-row-inner" :value="__('Confirm Password')">
									<input type="password" name="password_confirmation" id="password_confirmation" class="input-text" required>
									<span class="label">Confirme a senha</span>
									<span class="border"></span>
								</label>
							</div>
							<div class="form-row-last">
								<!-- Session Status -->
								<x-auth-session-status class="mb-4" :status="session('status')" />

								<!-- Validation Errors -->
								<x-auth-validation-errors class="mb-4" :errors="$errors" />
								<input type="submit" name="register" class="register" value="Criar Conta">

								<!-- Validation Errors (register) 
								<x-auth-validation-errors class="mb-4" :errors="$errors" />-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function openCity(evt, cityName) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(cityName).style.display = "block";
			    evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
		</script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	</html>