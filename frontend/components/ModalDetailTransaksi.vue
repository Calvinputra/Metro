<template>
  <div style="background-color: white !important; font-family: 'Nunito Sans'">
    <b-modal id="modal-detailtransaksi" title="Detail Transaksi" ok-only>
      <div class="border border-danger rounded row py-3">
        <div class="col-sm-6" style="font-size: 12px">
          <table>
            <tbody>
              <tr>
                <th scope="row">Nomor Invoice</th>
                <td>:{{ transaction.transaction_id }}</td>
              </tr>
              <tr>
                <th scope="row" class="pt-2">Tanggal</th>
                <td class="pt-2">:{{ transaction.date_view }}</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-sm-6" style="font-size: 12px">
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

      <div class="table-responsive" style="font-size: 12px">
        <table class="table pt-2">
          <thead>
            <tr>
              <th scope="col" class="py-2 text-center">Nama Produk</th>
              <th scope="col" class="py-2 text-center">Jumlah</th>
              <th scope="col" class="py-2 text-center">Berat</th>
              <th scope="col" class="py-2 text-center">Harga</th>
              <th scope="col" class="py-2 text-center">Sub total</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="td in transaction.transaction_details" :key="td.id">
              <td class="py-2">{{ td.name }}</td>
              <td class="py-2 text-center">{{ td.qty }}</td>
              <td class="py-2">{{ td.weight }}gr</td>
              <td class="py-2">
                Rp. {{ Number(td.price).toLocaleString("id-ID") }}
              </td>
              <td class="py-2">
                Rp. {{ Number(td.price * td.qty).toLocaleString("id-ID") }}
              </td>
            </tr>
          </tbody>
        </table>

        <div class="row justify-content-around mt-3 mb-4">
          <div class="col-sm-4"></div>
          <div class="col-sm-5 text-right fw-bold">
            <span>
              <p>Subtotal</p>
            </span>
            <span>
              <p>Biaya Pengiriman</p>
            </span>
            <p>Total</p>
            <span>
              <p>Jenis Pengiriman</p>
            </span>
          </div>
          <div class="col-sm-3">
            <span>
              <p>
                Rp.
                {{ Number(transaction.total_price).toLocaleString("id-ID") }}
              </p>
            </span>
            <span>
              <p>
                Rp.
                {{
                  Number(transaction.total_shipping_cost).toLocaleString(
                    "id-ID"
                  )
                }}
              </p>
            </span>
            <p class="fw-bold">
              Rp. {{ Number(transaction.grand_total).toLocaleString("id-ID") }}
            </p>
            <p>{{ transaction.shipping }}</p>
          </div>
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
