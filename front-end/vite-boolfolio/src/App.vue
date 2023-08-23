<script>

import axios from 'axios';

const API = "http://localhost:8000/api/v1"

export default {
    name: 'App',
    mounted() {
        axios.get(API + '/projects')
            .then(res => {
                console.log(res.data);
            })
            .catch(err => console.error(err));
    }
}
</script>

<template>
    <h1>Welaaaaa!</h1>
</template>

<style scoped></style>
