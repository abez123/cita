<template>
	<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="http://todoparasuspies.com/includes/templates/tpsp.catalog/images/tpsp_logo_blue.svg" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
    </a>
 <div class="navbar-menu">
 	<div class="navbar-start">
     <router-link to="/home" class="navbar-item">Home</router-link>
    <router-link to="/about" class="navbar-item">About</router-link>
  </div>
</div>
    <button class="button navbar-burger" data-target="navMenu">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="navbar-menu" id="navMenu">
    	<div class="navbar-end">
  <router-link to="/home" class="navbar-item">Home</router-link>
    <router-link to="/about" class="navbar-item">About</router-link>
</div>
</div>

  </div>
</nav>
</template>