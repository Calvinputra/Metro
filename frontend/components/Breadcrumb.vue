<template>
  <nav class="container my-4" style="color: red" aria-label="breadcrumb">
    <ol class="py-1 breadcrumb">
      <li v-for="link in links" :key="link.name" :class="link.class" >
        <nuxt-link style="text-decoration: none; color: red" :to="link.url">{{
          link.name
        }}</nuxt-link>
      </li>
    </ol>
  </nav>
</template>

<script>
export default {
  props: ["links"]
};
</script>
