<template>
    <div class="container">
        <h1>{{article.title}}</h1>
        <p v-html="article.content.replace(/\n/g,'<br/>')"></p>
    </div>
</template>

<script>
const axios = require('axios');

export default {
    mounted () {

		this.article_id = this.$store.state.article_id;

		//alert(this.article_id);

		let params = new URLSearchParams();
		params.append('id', this.article_id);
		var url = 'http://laravel.localhost/api/detail';
        axios.post(url,params)
        .then(response =>{
            this.article = response.data;
        });

    },
    data:function(){
        return {
            article:[],
			article_id:'',
        };
    },
    methods:{
        
    }
}
</script>
