<style type="text/css">
	nav {
		width: 100%;
		background-color: black;
		padding: 20px 10px;
		margin-bottom: 20px;
	}
	.a {
		text-decoration: none;
		text-transform: uppercase;
		font-family: sans-serif;
		margin-right: 5px;
		color: white;
		margin: 15px;
		width: 100%;height: 100%;
	}
</style>

<nav>
	<span>{{ auth()->check() ? auth()->user()->name : 'XXX' }}</span>
	||
	<a class="a" href="/clubs">Clubs</a>
	<a class="a" href="/players">Players</a>
	||
	<form method="post" action="/logout">
		@csrf
		<input type="submit" value="Logout">
	</form>
</nav>
