<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm {{this.name}}.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data : function() {
            return {
            ToPro:1200,
            name:'Xavi Hernandez'
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
