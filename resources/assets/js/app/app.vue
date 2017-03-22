<script>
    import Vue from 'vue'
    import App from './components/app.vue'
    import store from './store.vue'
    import VueResource from 'vue-resource';

    Vue.use(VueResource);

    new Vue({
        el: 'app',
        store,
        render: h => h(App)
    });

</script>