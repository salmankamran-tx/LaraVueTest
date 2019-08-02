<template>
  <div>
    <section class="hero is-primary is-medium">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              {{title}}
            </h1>
          </div>
        </div>
    </section>
    <br><br>

    <div class="container">
    <div class="field">
      <label class="label">Title</label>
      <div class="control">
        <input class="input" type="text" name="title" id="title"  v-model="e_title">
      </div>
    </div>
    <div class="field">
       <label class="label">Body</label>
       <div class="control">
         <textarea class="textarea" name="body" id="body" v-model="e_body"></textarea>
       </div>
     </div>


     <div class="field is-grouped">
       <div class="control">
         <button type="submit" class="button is-primary" @click.prevent="editPost(post_id) , navigate()">Update</button>
           <button class="btn btn-danger" @click.prevent="deletePost(post_id) , navigate()">Delete</button>
       </div>
     </div>
    </div>

  </div>

    </template>

    <script>
      import Vue from 'vue'
      import VueRouter from 'vue-router'
      Vue.use(VueRouter)

        export default {
          data: function(){
            return{
              e_title: '',
              e_body: '',
              id: '',
              post_title: '',
              body: '',
              post_id: '',
            }
          },
          created(){
            this.id = this.$route.params.id;              // getting the post id from v-route params that will be edited
            this.post_title = this.$route.params.title;   // getting the post title from v-route params that will be edited
            this.body = this.$route.params.body;          // getting the post body from v-route params that will be edited

            this.e_title = this.post_title;           // assigning post title to e_title that is modeled in input type
            this.e_body = this.body;                // assigning post body to e_body that is modeled in input type
          },
          methods:{
            editPost: function editPost(post_id){
              var _this = this;
              axios.post('/editPost/' + this.id ,{
                e_title: _this.e_title,
                e_body: _this.e_body
              })

            },
            deletePost: function deletePost(post_id){
              var _this = this;
              axios.post('/deletePost/' + this.id)
                .then(function(response){
                });
            },
            navigate() {
               this.$router.go(-1);
           },

          },
            props : ['title']
        }
    </script>

    <style scoped>
      @import "~bulma/css/bulma.css";

    </style>
