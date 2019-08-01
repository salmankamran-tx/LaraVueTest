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

         <article class="message is-success" v-for="post in posts">
            <div class="message-header">
              <p>{{post.title}}</p>
              <router-link :to="{ name: 'editpost' , params: {id: post.id, title: post.title , body: post.body}}">
                <button class="btn btn-warning">Edit</button>
              </router-link>
            </div>
            <div class="message-body">
             {{post.body}}
            </div>
        </article>

       </div>

  </div>
</template>

    <script>
        export default {
          data: function(){
            return {
              posts: [],
            }
          },
          mounted: function mounted(){
             this.getPosts();
           },
          methods: {
            getPosts: function getPosts(){
              var _this = this;
              axios.get('/posts')
                .then(function (response){
                  _this.posts = response.data;
                })
              }
          },
          props : ['title']
        }
    </script>

    <style scoped>
        @import "~bulma/css/bulma.css";
    </style>
