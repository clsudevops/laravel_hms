<template>
    <div class="col s12 m8">
        <label >Select Type</label>
        <select id="roomType" style="height:36px; line-height:36px;">
           <option  v-for="type in roomtypes" v-bind:key="type.id">{{type.type}}</option>
        </select>
    </div>
</template>

<script>
export default {
    data(){
        return{
            roomtypes:[
                {id: '4', type:'single'},
                {id: '5', type:'Double'}
            ]
        }
    }
}
</script>

<style>

</style>


