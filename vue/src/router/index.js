import Vue from 'vue'
import Router from 'vue-router'
import Top from '@/components/Top'
import Detail from '@/components/Detail'
import Login from '@/components/Login'
import Home from '@/components/Home'
import Logout from '@/components/Logout'
import Page1 from '@/components/Page1'
import Page2 from '@/components/Page2'
import Hoge1 from '@/components/Hoge1'
import Hoge2 from '@/components/Hoge2'
import Hoge3 from '@/components/Hoge3'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'Top',
			component: Top
		},
		{
			path: '/detail',
			name: 'Detail',
			component: Detail
		},
		{
			path: '/login',
			name: 'Login',
			component: Login
		},
		{
			path: '/home',
			name: 'Home',
			component: Home
		},
		{
			path: '/logout',
			name: 'Logout',
			component: Logout
		},
		{
			path: '/page1',
			name: 'Page1',
			component: Page1
		},
		{
			path: '/page2',
			name: 'Page2',
			component: Page2
		},
		{
			path: '/hoge1',
			name: 'Hoge1',
			component: Hoge1
		},
		{
			path: '/hoge2',
			name: 'Hoge2',
			component: Hoge2
		},
		{
			path: '/hoge3',
			name: 'Hoge3',
			component: Hoge3
		},
	]
})
