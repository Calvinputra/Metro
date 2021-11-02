<template>
  <nav class="container my-4" aria-label="breadcrumb">
    <ol class="py-1 breadcrumb">
      <li v-for="link in links" :key="link.url" :class="link.class">
        <a style="text-decoration: none; color: black" :href="link.url">{{link.name}}</a>
      </li>
    </ol>
  </nav>
</template>

<script>
export default {


  props: ["links"],
};
</script>