<template>
	<div class="hello">
		<h1>{{ msg }}</h1>
		<ul>
			<li>
				<a href="/">top</a>
				<a href="/hoge1">hoge1</a>
				<a href="/hoge2">hoge2</a>
				<a href="/hoge3">hoge3</a>
			</li>
		</ul>

		<div>
			<div>Q{{ qa_num }}:　{{ qa_data[qa_num].question }}</div>

			<div>
				<table border="1">
					<tr>
						<td>1</td><td>{{ qa_data[qa_num].select_1 }}</td>
					</tr>
					<tr>
						<td>2</td><td>{{ qa_data[qa_num].select_2 }}</td>
					</tr>
					<tr>
						<td>3</td><td>{{ qa_data[qa_num].select_3 }}</td>
					</tr>
					<tr>
						<td>4</td><td>{{ qa_data[qa_num].select_4 }}</td>
					</tr>
				</table>
			</div>
		</div>

		<div>
			<div>回答</div>
			<div>
				<span><button @click="send_1">1</button></span>
				<span style="padding-left:20px;"><button @click="send_2">2</button></span>
				<span style="padding-left:20px;"><button @click="send_3">3</button></span>
				<span style="padding-left:20px;"><button @click="send_4">4</button></span>
			</div>
		</div>

	</div>
</template>

<script>
export default {
	name: 'Hoge2',
	data () {
		return {
			qa_data: this.$store.state.qa_data,
			qa_num: this.$store.state.qa_num
		}
	},
	created: function(){
		
	},
	methods: {
		send_1(){
		},
		send_2(){
		},
		send_3(){
		},
		send_4(){
		}
	}
}
</script>

<style scoped>
ul {
	list-style-type: none;
	padding: 0;
}
li {
	display: inline-block;
	margin: 0 10px;
}
#tbl_content{
	width:320px;
	margin:0px auto 0px auto;
}
</style>
