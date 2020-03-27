<template>
	<div>
		ログアウトページ
	</div>
</template>

<script>
export default {
    mounted () {

		this.$store.commit('update_login_writer_id','');
		this.$store.commit('update_login_writer_name','');

    },
    data:function(){
        return {

        };
    },
    methods:{
        
    },

    computed: {
        
    }

}

</script>
