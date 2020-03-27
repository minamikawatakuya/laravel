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

		<div>{{ $store.state.namae }}</div>
		<div>{{ $store.state.mail }}</div>
		<div>
			<button @click="back">戻る</button>
			<button @click="send">送信</button>
		</div>
		<div id="kurukuru"><img src="../assets/indicator.gif"></div>

	</div>
</template>

<script>
export default {
	name: 'Page1',
	data () {
		return {
			msg: 'Page1'
		}
	},
	methods: {
		send(){

			var kurukuru = document.getElementById("kurukuru");
			kurukuru.style.display = "block";

			let params = new URLSearchParams();
			params.append('namae', this.$store.state.namae);
			params.append('mail', this.$store.state.mail);
			//var self = this;
			var url = 'http://laravel.localhost/hello/hogeaddpost';
			this.$axios.post(url,params).then(response => {
				//alert("ok");
				alert(response.data);
			}).catch(error => {
				alert("ng");
			});

			window.location.href = 'page2'
		},
		back(){
			window.location.href = '/'
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
#kurukuru{
	display:none;
}
</style>
