<template>
	<div class="hello">
	
		<h1>{{ msg }}</h1>
		<ul>
			<li>
				<a href="/">top</a>
			</li>
			<li>
				<a href="page1">page1</a>
			</li>
			<li>
				<a href="page2">page2</a>
			</li>
		</ul>

		<div>メールを送信しました</div>

	</div>
</template>

<script>
export default {
	name: 'Page2',
	data () {
		return {
			msg: 'Page2'
		}
	}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
	font-weight: normal;
}
ul {
	list-style-type: none;
	padding: 0;
}
li {
	display: inline-block;
	margin: 0 10px;
}
a {
	color: #42b983;
}
</style>
