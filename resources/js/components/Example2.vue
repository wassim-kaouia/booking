<template>
    <div>
        <h2>Second Component by : {{ name }}</h2>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name:'wassim',
        }
    },
    mounted(){
        console.log('example 2 mounted!');
    },
}
</script>