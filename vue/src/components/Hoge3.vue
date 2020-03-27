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

		<div>hogehoge</div>

		<div>
			<button @click="send">送信</button>
		</div>

		<div id="response_data_id"></div>
		<div id="response_data_question"></div>
		<div id="response_data_select_1"></div>
		<div id="response_data_select_2"></div>
		<div id="response_data_select_3"></div>
		<div id="response_data_select_4"></div>
		<div id="response_data_answer"></div>
		<div id="response_data_description"></div>

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
	name: 'Hoge3',
	data () {
		return {
			qa_data: this.$store.state.qa_data,
			qa_data_2: [
				{id: 1, name: 'スライム'},
				{id: 2, name: 'ゴブリン'}
			]
		}
	},
	created: function(){
		
	},
	methods: {
		send(){

			let params = new URLSearchParams();
			//params.append('namae', this.$store.state.namae);
			//params.append('mail', this.$store.state.mail);
			var url = 'http://laravel.localhost/hello/hogepost1';
			this.$axios.post(url,params).then(response => {

				//alert(response.data);

				//var response_data = response.data;

				//this.qa_data = response_data;

				//this.$store.state.qa_data = response.data;

				//this.$store.state.qa_data =  [{"id": "1", "question": "スライムsss"},{"id": "2", "question": "ゴブリンsss"}];

				/*
				var date = new Date() ;
				var a = date.getTime() ;
				var b = Math.floor( a / 1000 ) ;
				var tmp = [{"id": "1", "question": "スライム"+b},{"id": "2", "question": "ゴブリン"+b}];
				*/

				this.$store.commit('update_qa_data',response.data);

				this.qa_data = this.$store.state.qa_data;

				/*
				document.getElementById("response_data_id").innerHTML = response_data[0].id;
				document.getElementById("response_data_question").innerHTML = response_data[0].question;
				document.getElementById("response_data_select_1").innerHTML = response_data[0].select_1;
				document.getElementById("response_data_select_2").innerHTML = response_data[0].select_2;
				document.getElementById("response_data_select_3").innerHTML = response_data[0].select_3;
				document.getElementById("response_data_select_4").innerHTML = response_data[0].select_4;
				document.getElementById("response_data_answer").innerHTML = response_data[0].answer;
				document.getElementById("response_data_description").innerHTML = response_data[0].description;
				*/

			}).catch(error => {
				alert("ng");
			});

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
