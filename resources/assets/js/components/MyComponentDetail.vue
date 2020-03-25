
<template>
    <div class="container">
        <h1>{{article.title}}</h1>
        <p v-html="article.content.replace(/\n/g,'<br/>')"></p>
    </div>
</template>

<script>
const axios = require('axios');

export default {
    props: {
        article_id: String,
    },
    mounted () {

        axios.get('/api/detail?id='+this.article_id)
        .then(response =>{
            this.article = response.data;
        });

    },
    data:function(){
        return {
            article:[],
        };
    },
    methods:{
        
    }
}
</script>


