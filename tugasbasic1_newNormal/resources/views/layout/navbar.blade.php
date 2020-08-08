<style type="text/css">
	nav {
		color: white;
	}
	nav {
		width: 100%;
		height: 50px;
		background-color: gray;
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
	nav table {
		width: 100%;
		height: 100%;
	}
	td {
		border-right: 1px solid white;
	}
</style>

<nav>
	<table>
		<tr>
			<td>
				<span>{{ auth()->check() ? auth()->user()->name : 'XXX' }}</span>
			</td>
			<td>
				<a class="a" href="/">Home</a>
			</td>
			<td>
				<a class="a" href="/clubs">Clubs</a>
			</td>
			<td>
				<a class="a" href="/players">Players</a>
			</td>
			<td>
				<form method="post" action="/logout">
					@csrf
					<input type="submit" value="Logout">
				</form>
			</td>
		</tr>
	</table>
</nav>
