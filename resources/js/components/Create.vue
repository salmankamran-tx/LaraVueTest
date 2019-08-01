<template>
      <div>
        <section class="hero is-primary is-medium">
            <div class="hero-body">
              <div class="container">
                <h1 class="title">
                  {{title}}
                </h1>
                <h2 class="subtitle">
                 Lets Start!
                </h2>
              </div>
            </div>
        </section>
        <br><br>

           <div class="container">

             <div class="field">
               <label class="label">Title</label>
               <div class="control">
                 <input class="input" type="text" placeholder="Title" name="title" id="title" v-model="newPost.title">
               </div>
             </div>
             <div class="field">
                <label class="label">Body</label>
                <div class="control">
                  <textarea class="textarea" placeholder="Body" name="body" id="body" v-model="newPost.body"></textarea>
                </div>
              </div>

              <article class="message is-danger" v-show="hasError">
                <div class="message-body">
                    Please fill all the fields
                </div>
              </article>

              <div class="field is-grouped">
                <div class="control">
                  <button type="submit" class="button is-success" @click.prevent="createPost()">Submit</button>
                </div>
              </div>

           </div>

        </div>

    </template>

    <script>
        export default {
          data: function(){
            {
            return {
              newPost: {'title': '' , 'body': ''},
              hasError: false,
            }
          }
        },
        methods: {
            createPost: function createPost(){
              var input = this.newPost;
              var _this = this;
              if(input['title'] == '' || input['body'] == '' ){
                this.hasError = true;
              }
              else {
                this.hasError = false;
                axios.post('/createPost' , input)
                  .then (function (response){
                    _this.newPost = {'title': '' , 'body': ''}
                  });
              }
            }
        },
        props:['title']
        }
    </script>
    <style scoped>
      @import "~bulma/css/bulma.css";

    </style>
