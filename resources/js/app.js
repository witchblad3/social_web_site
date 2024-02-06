import titleMixin from "./components/mixins/titleMixin";

require('./bootstrap');

window.Vue = require('vue').default;
import {createApp} from "vue";
import router from "./router";
import store from './store';
import {configureAxios} from "./settings";

const app = createApp({});


app.mixin(titleMixin);
configureAxios(window.axios);
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//app.component('example-component', require('./components/ExampleComponent.vue').default);
app.component('main-component', require('./components/MainComponent.vue').default);
app.use(router).use(store).mount('#app');
