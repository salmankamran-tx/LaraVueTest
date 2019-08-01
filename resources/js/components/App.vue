<template>
        <div>

      <section class="hero is-primary is-medium">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <nav class="navbar">
            <div class="container">

            <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
            <a class="navbar-item">
              <router-link :to="{ name: 'create' }" class="nav-link">Create Posts</router-link>
            </a>
            <a class="navbar-item">
              <router-link :to="{ name: 'allposts' }" class="nav-link" >All Posts</router-link>
            </a>

          </div>
        </div>
      </div>
    </nav>

  </div>
</section>

<main>
    <router-view></router-view>
</main>
        </div>

    </template>

    <script>
        export default {}
    </script>

    <style>
    @import "~bulma/css/bulma.css";
    </style>
