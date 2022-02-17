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
  margin-top:20px;
  
}
</style>
