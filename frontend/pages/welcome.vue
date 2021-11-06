<template>
  <div>Welcome, {{ this.$auth.user }}</div>
</template>
<script>
export default {
  middleware: ["auth"],
};
</script>

