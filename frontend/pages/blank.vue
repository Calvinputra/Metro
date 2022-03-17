<template>
  <section></section>
</template>

<script>
export default {
  mounted(){
    console.log(this.$auth.strategy.token.get());
  }
};
</script>
