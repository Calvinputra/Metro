<template>
  <div>
    <b-button v-b-modal.modal-center>Launch centered modal</b-button>

    <b-modal id="modal-center" centered title="Konfirmasi">
      <p class="my-4">
        Terima kasih, barang yang anda pilih akan segera dikirim. Ingin lanjut
        belanja?
      </p>
      <div class="d-flex">
        <div class="mr-4">
          <button type="button" class="btn btn-danger">Lanjut</button>
        </div>
        <div>
          <button type="button" class="btn btn-light border-danger">
            Selesai
          </button>
        </div>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {};
</script>
