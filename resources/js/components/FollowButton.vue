<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser" 
        v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
     props:['userId','follows'],

     
      
        mounted() {
            console.log('Component mounted.')
        },

         data:function(){
      return{
      status:this.follows,
      }
      },
        methods:{
        followUser(){
        axios.post('/follow/'+this.userId)
        .then(function (response) {

        this.status= !this.status;
        console.log(response.data);
        })
        .catch(function (error) {
        console.log(error);
        });
        }
        },

        computed:{
         buttonText(){
         return( this.status)? 'unfollow':'follow';
         }
        }
    }
</script>
