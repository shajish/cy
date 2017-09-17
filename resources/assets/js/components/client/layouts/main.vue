<template>
    <div>
        <client-navbar></client-navbar>
        <router-view></router-view>
        <client-footer></client-footer>
    </div>
   </template>
<script>
    export default {
        mounted() {
            console.log('Component mounted main.')
        }
    }
</script>
