
<template>

    <div class="container">

        <div class="row">
        <div class="col-sm-6">
        <ul class="pagination">
        <li :class="{disabled: current_page <= 1}"><a href="#" @click="change(1)">&laquo;</a></li>
        <li :class="{disabled: current_page <= 1}"><a href="#" @click="change(current_page - 1)">&lt;</a></li>
        <li v-for="page in pages" :key="page" :class="{active: page === current_page}">
        <a href="#" @click="change(page)">{{page}}</a>
        </li>
        <li :class="{disabled: current_page >= last_page}"><a href="#" @click="change(current_page + 1)">&gt;</a></li>
        <li :class="{disabled: current_page >= last_page}"><a href="#" @click="change(last_page)">&raquo;</a></li>
        </ul>
        </div>
        <div style="margin-top: 40px" class="col-sm-6 text-right">全 {{total}} 件中 {{from}} 〜 {{to}} 件表示</div>
        </div>

        <div>
        <table>
            <tr v-for="article in articles" :key="article.id">
                <td><a v-on:click="toDetail(article.id)">{{article.title}}</a></td>
            </tr>
        </table>
        </div>

        <ul>
            <li v-for="(writer,key) in writers">
                <span v-if="writer.nickname">{{writer.nickname}}</span>
                <span v-else>{{writer.account}}</span>
                ({{writer.article_num}})
            </li>
        </ul>

    </div>

</template>


<script>
export default {
    mounted () {

		let params = new URLSearchParams();
        var url = 'http://laravel.localhost/api/writers';
        this.$axios.post(url,params)
        .then(response =>{
            this.writers = response.data;
        })
        .catch(function(error){
            
        });

        this.load(1);

    },
    data:function(){
        return {
            articles:[],
            writers:[],
            current_page: 1,
            last_page: 1,
            total: 1,
            from: 0,
            to: 0
        };
    },
    methods:{

        toDetail:function(id){
            this.$store.commit('update_article_id',id);
            window.location = "/detail";
        },

        load(page) {
            let params = new URLSearchParams();
			params.append('page', page);
            var url = 'http://laravel.localhost/api/articles';
            this.$axios.post(url,params).then(({data}) => {
                this.articles = data.data
                this.current_page = data.current_page
                this.last_page = data.last_page
                this.total = data.total
                this.from = data.from
                this.to = data.to
            })
        },
        change(page) {
            if (page >= 1 && page <= this.last_page) this.load(page)
        }
        
    },

    computed: {
        pages() {
            
            let start = _.max([this.current_page - 2, 1])
            let end = _.min([start + 5, this.last_page + 1])
            start = _.max([end - 5, 1])
            return _.range(start, end)
            
        },
    }

}
</script>
