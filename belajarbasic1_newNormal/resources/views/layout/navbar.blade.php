
	<nav>
		<span>{{ auth()->check() ? auth()->user()->name : '-' }}</span>
		||
		<a href="/">Home</a>
		|
		<a href="/guardians">The Guardians</a> |
		<a href="/students">Student</a>
		||
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        ||
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
		||
		<form method="post" action="/logout">
			@csrf
			<input type="submit" value="Logout">
		</form>
	</nav>
