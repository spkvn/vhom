<template>
    <div class="project-show">
        <div class="grid-x grid-padding-x">
            <div class="cell small-12 taller project-show-header"
                 :style="{ 'background-image' : 'url(\'http://dev.vhom.org/storage/app/' + project.background_image + '\')' }"
                >
                <div class="left">
                    <strong @click="returnToProjects()"><a>← Projects</a></strong>
                </div>
                <div class="right">
                    <h2>{{project.title}}</h2>
                    <p>{{project.subtitle}}</p>
                    <p>{{errors}}</p>
                </div>
            </div>
            <div class="cell small-8 body" v-html="project.body">
            </div>
            <div class="cell small-4">
                <div class="grid-y">
                    <div class="cell small-4">
                        Top
                    </div>
                    <div class="cell small-4">
                        Bottom
                    </div>
                </div>
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
        },
        methods : {
            returnToProjects(){
                this.$router.push('/projects');
            }
        }
    }
</script>