<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import VueRouter from 'vue-router';

    import Home from './Home.vue';

    export default {
        router : new VueRouter ({
            routes : [
                {
                    path : '/home',
                    name : 'home',
                    component : Home
                },
                {
                    path : '/',
                    redirect : {name : 'home'}
                }
            ]
        })
    }
</script>
