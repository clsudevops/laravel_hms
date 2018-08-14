<template>
 
    <div class="row justify-content-center">
        
        <div class="col m12">
            <div class="card">
                <form action="" method="POST" @submit.prevent="addtask()">
                    <div class="input-field col s12 m6" style="margin-bottom:0px;">
                        <label>Add Task:</label>
                        <input style="height:36px; line-height:36px;" v-model="title" id="title" type="text" class="validate" required>
                        <span>{{title}}</span>
                    </div>
                    <div class="input-field col s12 m6">
                        <button type="submit" class="btn btn-1" id="submitFoods" style="margin-left:5px; height:36px; line-height:36px;">
                            <i class="material-icons left" style="margin-right:10px;">
                                send
                            </i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
                title:''
            }
        },
        methods:{
            // addtask(){
            //     axios.post('./api/task',{title:'something'});
            // }
        }
    }
</script>
