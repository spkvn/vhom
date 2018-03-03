<template>
    <div class="projects-index">
        <h2>Projects</h2>
        <p v-if="errors != 'none'">
            {{errors}}
        </p>
        <div class="grid-x grid-margin-x">
            <div v-for="project in projects" @click="showProject(project.id)" class="cell small-4">
                <h3 class="project-title">
                    {{project.title}}
                </h3>
                <p class="project-subtitle">
                    {{project.subtitle}}
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data : () => {
            return {
                projects : [],
                errors   : "none"
            };
        },
        created(){
            axios.get('/api/projects')
                 .then((response) =>{
                    this.projects = response.data;
                 })
                .catch((response) =>{
                    this.errors = response;
                });
        },
        methods : {
            showProject(id){
                console.log(id+" to be shown");
            }
        }
    }
</script>