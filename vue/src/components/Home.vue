<template>
	<div>
		マイページ(ログインしていないとアクセスできないページ)<br>
        login_writer_id : {{this.login_writer_id}}<br>
        login_writer_name : {{this.login_writer_name}}<br><br>
        <a href="/logout">ログアウト</a>
	</div>
</template>

<script>
export default {
    mounted () {

		//認証チェック
        this.login_writer_id = this.$store.state.login_writer_id;
        this.login_writer_name = this.$store.state.login_writer_name;

        //alert(this.login_writer_id);
        //alert(this.login_writer_name);

		if( (this.login_writer_id == "") || (this.login_writer_name == "") ){
			window.location = "/login";
		}

    },
    data:function(){
        return {
            login_writer_id:'',
            login_writer_name:''
        };
    },
    methods:{
        
    },

    computed: {
        
    }

}

</script>
