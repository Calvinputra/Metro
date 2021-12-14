<template>
  <div style="background-color: white !important">
    <b-modal id="modal-detailtransaksi" title="Detail Transaksi">
      <div class="border border-danger rounded">
        <div class="d-flex justify-content-between">
          <div class="d-flex justify-content-around">
            <div class="pl-4 mr-5" style="font-size: 80%">
              <p class="text-danger">Nomor Invoice</p>
              <p class="text-danger">Tanggal</p>
            </div>
            <div class="pr-3 mr-3 pt-3" style="font-size: 80%">
              <p class="text-danger">
                <span class="text-black">:</span>{{ transaction.uuid }}
              </p>
              <p>:{{transaction.date_view}}</p>
            </div>
          </div>
          <div class="ml-5" style="font-size: 80%">
            <span class="text-danger">
              <p class>Tujuan Pengiriman</p>
            </span>
            <h6 class="text-black">{{transaction.customer_name}}</h6>
            <p>{{transaction.customer_phone}}</p>
            <p>
              {{transaction.shipping_address}}
            </p>
            <p>Indonesia</p>
          </div>
        </div>
      </div>
      <div class="table-responsive shopping-cart">
        <table class="table">
          <tr >
            <th>Nama Produk</th>
            <th class="text-center">Jumlah</th>
            <th class="text-center">Berat</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Sub total</th>
          </tr>
        </table>
      </div>
      <hr style="height: 3px; border-width: 0; color: red" class="col-sm-11" />
      <div class="table-responsive shopping-cart">
        <table class="table" style="font-size: 80%">
          <tr v-for="td in transaction.transaction_details" :key="td.id">
            <th>{{td.name}}</th>
            <th class="pl-5">{{td.qty}}</th>
            <th class="pl-5">{{td.weight}}gr</th>
            <th>Rp {{Number(td.price).toLocaleString("id-ID")}}</th>
            <th>Rp {{Number(td.price*td.qty).toLocaleString("id-ID")}}</th>
          </tr>
        </table>
      </div>
      <br />
      <div class="d-flex justify-content-around">
        <div class="text-right col-sm-9 fw-bold">
          <span>
            <p>Subtotal</p>
          </span>
          <span>
            <p>Biaya Pengiriman</p>
          </span>
          <p>Total</p>
        </div>
        <div class="text-right">
          <span class="fw-bold">
            <p>RP {{Number(transaction.total_price).toLocaleString("id-ID")}}</p>
          </span>
          <span>
            <p>RP {{Number(transaction.total_shipping_cost).toLocaleString("id-ID")}}</p>
          </span>
          <p class="fw-bold">RP {{Number(transaction.grand_total).toLocaleString("id-ID")}}</p>
        </div>
      </div>
    </b-modal>
  </div>
</template>

<script>
export default {
  props: ["transaction"],
 
};
</script>
