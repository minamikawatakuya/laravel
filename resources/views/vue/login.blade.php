<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="offset-4 col-md-4">
                <br>
                <h4>ログイン</h4>
                <br>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" v-model="email">
                    <div class="alert alert-danger" v-text="errors.email" v-if="errors.email"></div>
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input type="password" class="form-control" v-model="password">
                    <div class="alert alert-danger" v-text="errors.password" v-if="errors.password"></div>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" v-model="remember"> 次回から省略
                    </label>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-block" @click="login">ログイン</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.min.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                email: '',
                password: '',
                remember: false,
                errors: {}
            },
            methods: {
                login: function(){

                    this.errors = {};

                    var self = this;
                    var url = '/login';
                    var params = {
                        email: this.email,
                        password: this.password,
                        remember: this.remember
                    };
                    axios.post(url, params)
                        .then(function(response){

                            location.href = '/home';

                        })
                        .catch(function(error){

                            //console.log(JSON.stringify(error));

                            var responseErrors = error.response.data;
                            var errors = {};

                            for(var key in responseErrors) {

                                errors[key] = responseErrors[key][0];

                            }

                            self.errors = errors;

                        });

                }
            }
        });

    </script>
</body>
</html>