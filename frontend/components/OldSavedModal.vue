<template>
  <div style="background-color:white !important;">
    <b-button v-b-modal.modal-1>Launch demo modal</b-button>

    <b-modal id="modal-1" title="BootstrapVue">
      <div class="border border-danger rounded">
        <div class="d-flex justify-content-between ">
          <div class="d-flex justify-content-around">
            <div class="pl-4 mr-5" style="font-size : 80%">
              <p class="text-danger">
                Nomor Invoice
              </p>
              <p class="text-danger">
                Tanggal
              </p>
            </div>
            <div class="pr-3 mr-3 pt-3" style="font-size : 80%">
              <p class="text-danger">
                <span class="text-black">:</span>INV9123741071
              </p>
              <p>
                :28 Oktober 2020
              </p>
            </div>
          </div>
          <div class="ml-5" style="font-size : 80%">
            <span class="text-danger">
              <p class>
                Tujuan Pengiriman
              </p>
            </span>
            <h6 class="text-black">
              Calvin Hage Wijaya
            </h6>
            <p>
              081788672567
            </p>
            <p>
              Araya Mansion No.8 - 22, Genitri, Tirtomoyo, kec. Pakis, Malang,
              Jawa Timur 65154
            </p>
            <p>
              Indonesia
            </p>
          </div>
        </div>
      </div>
      <div class="table-responsive shopping-cart">
        <table class="table">
          <tr>
            <th>Nama Produk</th>
            <th class="text-center">Jumlah</th>
            <th class="text-center">Berat</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Sub total</th>
          </tr>
        </table>
      </div>
      <hr style="height:3px; border-width:0; color:red" class="col-sm-11" />
      <div class="table-responsive shopping-cart">
        <table class="table" style="font-size: 80%">
          <tr>
            <th>Nama Produk 1</th>
            <th class="pl-5">1</th>
            <th class="pl-5">1 Kg</th>
            <th>Rp 120.000</th>
            <th>Rp 120.000</th>
          </tr>
        </table>
      </div>
      <br />
      <div class="d-flex justify-content-around ">
        <div class="text-right col-sm-9 fw-bold">
          <span>
            <p>
              Subtotal
            </p>
          </span>
          <span>
            <p>
              Biaya Pengiriman
            </p>
          </span>
          <p>
            Total
          </p>
        </div>
        <div class="text-right">
          <span class="fw-bold">
            <p>
              RP 120.000
            </p>
          </span>
          <span>
            <p>
              RP 9.000
            </p>
          </span>
          <p class="fw-bold">
            RP 120.000
          </p>
        </div>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {};
</script>
