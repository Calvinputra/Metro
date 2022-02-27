<template>
  <div class="text-center spinner">
    <b-button variant="primary" disabled>
      <b-spinner small></b-spinner>
      Sedang memuat....Silakan tunggu sebentar
    </b-button>
    <div style="color: red; margin-top: 10px">
      Jika tidak terjadi apa apa, tolong muat ulang halaman
    </div>
  </div>
</template>

<style scoped>
.spinner {
  margin-top: 20px;
}
</style>
