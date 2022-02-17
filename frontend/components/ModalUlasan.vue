<template>
  <div style="background-color:white !important;font-family: 'Nunito Sans'">
    <b-modal id="modal-1" title="BootstrapVue">
      <h5 class="text-center fw-bold">
        Beri Ulasan
      </h5>
      <div class="col-sm-12 d-flex mb-3">
        <img
          class="img-fluid max-width:100% height:auto rounded"
          src="/img/spcBody.jpg"
          alt=""
        />
        <div>
          <div class="d-flex">
            <p>Kode Produk-</p>
            <p>Nama Produk</p>
          </div>
          <div class="">
            <img
              class="img height:auto w-10"
              src="/img/emojione_star.png"
              alt=""
            />
            <img
              class="img max-width:100% height:auto"
              src="/img/emojione_star.png"
              alt=""
            />
            <img
              class="img max-width:100% height:auto"
              src="/img/emojione_star.png"
              alt=""
            />
            <img
              class="img max-width:100% height:auto"
              src="/img/emojione_star.png"
              alt=""
            />
            <img
              class="img max-width:100% height:auto"
              src="/img/emojione_star.png"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="">
        <p>
          Hai [Nama Customer], puas dengan barang yang kamu beli? Beri ulasan
          dan rekomendasikan ke pembeli lain ya!
        </p>
      </div>
      <div>
        <label for="address"
          >Alamat Lengkap<span style="color: red">*</span>:</label
        >
        <textarea
          class="form-control col-sm-8"
          id="address"
          name="address"
          rows="3"
          placeholder="Tulis ulasan di sini..."
          v-model="address"
        ></textarea>
      </div>
      <br />

      <div class="text-center">
        <button
          type="submit"
          class="  btn
                  text-danger
                  btn-light
                  btn-sm
                  shadow
                  rounded
                  col-sm-2
                  py-2
                  px-2"
        >
          Kirim
        </button>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {};
</script>
