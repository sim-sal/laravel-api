<script>
export default {
    name: 'ProjectCard',
    props: {
        project: {
            type: Object,
            required: true
        }
    }
}
</script>

<template>
    <div class="card">
        <h2>{{ project.name }}</h2>
        <p>{{ project.description }}</p>
    </div>
</template>

