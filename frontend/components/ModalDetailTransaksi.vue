<template>
  <div style="background-color: white !important">
    <b-modal id="modal-detailtransaksi" title="Detail Transaksi" ok-only>
      <div class="border border-danger rounded row py-3">
        <div class="col-8">
          <table>
            <tbody>
              <tr>
                <th scope="row">Nomor Invoice:</th>
                <td>{{ transaction.uuid }}</td>
              </tr>
              <tr>
                <th scope="row" class="pt-2">Tanggal:</th>
                <td class="pt-2">{{ transaction.date_view }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-4">
          <span class="text-danger">
            <p class="mb-2">Tujuan Pengiriman</p>
          </span>
          <h6 class="text-black mb-0">{{ transaction.customer_name }}</h6>
          <p class="mb-0">{{ transaction.customer_phone }}</p>
          <p class="mb-0">
            {{ transaction.shipping_address }}
          </p>
          <p class="mb-0">Indonesia</p>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table pt-2">
          <thead>
            <tr>
              <th scope="col" class="py-2">Nama Produk</th>
              <th scope="col" class="py-2">Jumlah</th>
              <th scope="col" class="py-2">Berat</th>
              <th scope="col" class="py-2">Harga</th>
              <th scope="col" class="py-2">Sub total</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="td in transaction.transaction_details" :key="td.id">
              <td class="py-2">{{ td.name }}</td>
              <td class="py-2">{{ td.qty }}</td>
              <td class="py-2">{{ td.weight }}gr</td>
              <td class="py-2">Rp {{ Number(td.price).toLocaleString("id-ID") }}</td>
              <td class="py-2">
                Rp {{ Number(td.price * td.qty).toLocaleString("id-ID") }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </b-modal>
  </div>
</template>


<script>
export default {
  props: ["transaction"],
};
</script>
