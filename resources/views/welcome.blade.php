<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
					<div class="col-lg-6">
						<label> No 1 </label>
						<input type="text" class="form-control form-control-sm" name="no1" id="no1" />
					</div>
					<div class="col-lg-6">
						<label> No 2 </label>
						<input type="text" class="form-control form-control-sm" name="no2" id="no2" />
					</div>
					<div class="col-lg-6">
						<label> No 3 </label>
						<input type="text" class="form-control form-control-sm" name="no3" id="no3" />
					</div>
					<div class="col-lg-6">
						<input type="submit" value="Sum" class="btn btn-sm btn-primary" name="submit" id="submit" />
					</div>
				<!--form action="" method="POST">
					<div class="col-lg-6">
						<label> Username </label>
						<input type="text" class="form-control form-control-sm" name="username" id="username" />
					</div>
					<div class="col-lg-6">
						<label> Password </label>
						<input type="text" class="form-control form-control-sm" name="password" id="password" />
					</div>
					<div class="col-lg-6">
						<input type="submit" value="Submit" class="btn btn-sm btn-primary" name="submit" id="submit" />
					</div>
				</form-->
            </div>
        </div>
    </body>
</html>
