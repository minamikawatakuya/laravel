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
			<li>
				<a href="hoge1">hoge1</a>
			</li>
		</ul>

		<div>名前：<input v-model="namae"></div>
		<div>メール：<input v-model="mail"></div>
		<div><button @click="send">送信</button></div>

		<div id="tbl_content">
		<table border="1">
		<tr v-for="item in qa_data" v-bind:key="item.id">
			<td>{{ item.id }}</td>
			<td>{{ item.question }}</td>
		</tr>
		</table>
		</div>

	</div>
</template>

<script>
export default {
	name: 'TopPage',
	data () {
		return {
			msg: 'TopPage',
			namae: this.$store.state.namae,
			mail: this.$store.state.mail,
			qa_data: this.$store.state.qa_data,
		}
	},
	created: function(){
		
	},
	methods: {
		storeIncrement () {
			this.$store.commit('increment')
		},
		send(){
			this.$store.commit('update_namae',this.namae)
			this.$store.commit('update_mail',this.mail)
			window.location.href = 'page1'
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
