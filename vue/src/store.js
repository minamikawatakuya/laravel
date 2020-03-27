//import 'babel-polyfill'
import Vue from 'vue'
import Vuex from 'vuex'

import createPersistedState from 'vuex-persistedstate';

Vue.use(Vuex)

// ストアを作成
const store = new Vuex.Store({

	state: {
		count: 0,
		namae:'',
		mail:'',
		qa_data:'',
		qa_length:'',
		qa_num:'',
		article_id:'',
		login_writer_id:'',
		login_writer_name:''
	},
	mutations: {
		// カウントアップするミューテーションを登録
		increment(state) {
			state.count++
		},
		update_namae(state,payload) {
			state.namae=payload
		},
		update_mail(state,payload) {
			state.mail=payload
		},
		update_qa_data(state,payload) {
			state.qa_data=payload
		},
		update_qa_length(state,payload) {
			state.qa_length=payload
		},
		update_qa_num(state,payload) {
			state.qa_num=payload
		},
		update_article_id(state,payload) {
			state.article_id=payload
		},
		update_login_writer_id(state,payload) {
			state.login_writer_id=payload
		},
		update_login_writer_name(state,payload) {
			state.login_writer_name=payload
		}
	},

	plugins: [
		createPersistedState({
			key: 'b0218jp',
			//paths: ['count'],
			storage: window.sessionStorage,
		}),
	],
          
})
export default store

