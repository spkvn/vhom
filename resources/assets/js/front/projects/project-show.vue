<template>
    <div class="project-show">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12">
                <h2>{{project.title}}</h2>
                <p>{{project.subtitle}}</p>
                <p>{{errors}}</p>
            </div>
            <div class="cell small-12" v-html="project.body">

            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: ['id'],
        data :() => {
            return {
                errors: "",
                project : ""
            }
        },
        created(){
            axios.get("/api/projects/"+this.id)
                .then((response) =>{
                    this.project = response.data
                })
                .catch((response) => {
                    this.errors = response;
                });
        }
    }
</script>