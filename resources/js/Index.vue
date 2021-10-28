<template>
  <div>
    <nav class="navbar bg-white border-bottom navbar-light">
      <router-link class="navbar-brand mr-auto"  v-bind:to="{ name: 'first' }">BoomVacance Draft</router-link>
      <router-link class="navbar navbar-button" :to="{ name: 'second' }">Second Page</router-link>
    </nav>

    <div class="container pl-4 pr-4 mt-4 mb-2">
        <router-view></router-view>
    </div>
    
  </div>
</template>