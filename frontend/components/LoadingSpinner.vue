<template>
  <div class="text-center spinner">
    <b-button variant="primary" disabled>
      <b-spinner small></b-spinner>
      Loading... Please wait a minutes
    </b-button>
    <div style="color: red; margin-top: 10px">
      if nothing happens please refresh the page
    </div>
  </div>
</template>

<style scoped>
.spinner {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
