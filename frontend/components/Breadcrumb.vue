<template>
  <nav class="container my-4" aria-label="breadcrumb">
    <ol class="py-1 breadcrumb">
      <li v-for="link in links" :key="link.name" :class="link.class">
        <nuxt-link style="text-decoration: none; color: black" :to="link.url">{{link.name}}</nuxt-link>
      </li>
    </ol>
  </nav>
</template>

<script>
export default {
  props: ["links"],
};
</script>