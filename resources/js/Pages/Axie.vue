<template>
    <h1 class="d-flex justify-content-center">Axie Infinity</h1>
    <hr>

    <div class="d-flex justify-content-between">
        <ul class="list-group">
         <div class="row row-cols-4">
        <div class="card mb-3" v-for="axie in axies" :key="axie.id">
            <div class="card-header bg-Danger">
                <h2>Type:</h2> 
                <h5> {{ axie.type }} </h5>
                <h5> Mouth: {{axie.mouth}}</h5>
                <h5>Eyes: {{axie.eyes}}</h5>
                <h5>Tail: {{axie.tail}}</h5>
                <h5>Ears: {{axie.ears}}</h5>
                <h5>Horns: {{axie.horns}}</h5>
                <h5>Back: {{axie.back}}</h5>
            </div>
        </div>
        </div>
        </ul>
    </div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout,
    props: {
        axies: Array
    }
}
</script>


<style scoped>
.card {
    width: 400px;
}
</style>