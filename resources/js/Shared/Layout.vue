<template>
<div class="btn-group" role="group" ></div>
    <nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Axie'}" href="/axie">Axie</Link>
        </li> 
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}" href="/contact">Contact</Link>
        </li>
                <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'About'}" href="/about">About Us</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-5 p-4 rounded-4 shadow my-5" style="min-height: 800px;">

    <slot />
</section>
    <footer class="text-center my-3 text-white">
    Copyright &copy; 2022. All rights reserved.
    </footer>
</template>
<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: #fff;
    opacity: 0.9;
}
.selected {
    color: white;
    border-bottom: 1px solid rgba(255, 255, 255, 0.475);
}
</style>