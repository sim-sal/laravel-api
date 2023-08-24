<script>
import ProjectCard from './components/ProjectCard.vue'

import axios from 'axios';

const API = "http://localhost:8000/api/v1"

export default {
    name: 'App',
    data() {
        return {
            projects: [],
            pages: []
        }
    },
    mounted() {
        // axios.get(API + '/projects')
        //     .then(res => {

        //         this.projects = res.data.projects;

        //         // console.log(JSON.stringify(this.projects, null, 2));
        //     })
        //     .catch(err => console.error(err));

        axios.get(API + '/projects-page')
            .then(res => {
                const data = res.data.projects;

                this.projects = data.data;
                this.pages = data.links;
            })
            .catch(err => console.error(err));
    },
    components: {
        ProjectCard
    }
}
</script>

<template>
    <h1>PROJECTS</h1>

    <div class="row justify-content-center">
        <ProjectCard v-for="project in projects" :key="project.id" :project="project" class="col-3 mx-2 my-2" />
    </div>
</template>

<style scoped></style>
