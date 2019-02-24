
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter)

import UserIndex from './components/user/Index';
import UserCreate from './components/user/Create';
import UserEdit from './components/user/Edit';

import LevelIndex from './components/level/Index';
import LevelEdit from './components/level/Edit';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const routes = [
  {
    path: '/',
    components: {
      userIndex: UserIndex,
      levelIndex: LevelIndex
    }
  },
  {
    path: '/user/create',
    components: {
      userIndex: UserCreate,
      levelIndex: LevelIndex
    },
    name: 'createUser'
  },
  {
    path: '/user/edit/:id',
    components: {
      userIndex: UserEdit,
      levelIndex: LevelIndex
    },
    name: 'editUser'
  },
  {
    path: '/level/edit/:id',
    components: {
      userIndex: UserIndex,
      levelIndex: LevelEdit
    },
    name: 'levelEdit'
  }
]

const router = new VueRouter({
  routes
})

const user = new Vue({
    router
}).$mount('#user');

const level = new Vue({
  router
}).$mount('#level');
