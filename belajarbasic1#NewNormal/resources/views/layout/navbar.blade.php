
	<nav>
		<span>{{ auth()->check() ? auth()->user()->name : '-' }}</span>
		||
		<a href="/">Home</a>
		|
		<a href="/guardians">The Guardians</a> |
		<a href="/students">Student</a>
		||
		<form method="post" action="/logout">
			@csrf
			<input type="submit" value="Logout">
		</form>
	</nav>
