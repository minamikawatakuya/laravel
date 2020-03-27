<template>
	<div class="row">
		<div class="offset-4 col-md-4">
			<br>
			<h4>ログイン</h4>
			<br>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" v-model="email">
				
			</div>
			<div class="form-group">
				<label>パスワード</label>
				<input type="password" class="form-control" v-model="password">
				
			</div>
			
			<div class="form-group">
				<button type="button" class="btn btn-dark btn-block" @click="login">ログイン</button>
			</div>
		</div>
	</div>
</template>

<script>

export default {

	mounted () {

    },
    data:function(){
        return {
            email: '',
			password: ''
        };
    },
	methods: {
		login: function(){

			var self = this;

			let params = new URLSearchParams();
			params.append('email', this.email);
			params.append('password', this.password);

			var url = 'http://laravel.localhost/api/login';
			this.$axios.post(url, params)
				.then(function(response){

					self.$store.commit('update_login_writer_id',response.data.id);
					self.$store.commit('update_login_writer_name',response.data.disp_name);

					window.location = "/home";

				})
				.catch(function(error){

					alert("error");

				});

		}
	}
}

</script>

