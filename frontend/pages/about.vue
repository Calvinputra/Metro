<template>
  <section>
    <Header />
    <div class="container padding-bottom-3x mb-1">
      <!-- Alert-->
      <nav class="container my-4" aria-label="breadcrumb">
        <ol class="py-1 breadcrumb">
          <li class="my-2 ms-3 breadcrumb-item">
            <a style="text-decoration: none" href="/">Beranda</a>
          </li>
          <li class="my-2 breadcrumb-item active" aria-current="page">
            Keranjang Saya
          </li>
        </ol>
      </nav>
      <h2>Keranjang Belanja</h2>
      <pre></pre>
      <!-- Shopping Cart-->
      <div class="table-responsive shopping-cart">
        <table class="table">
          <thead>
            <tr>
              <th>Produk</th>
              <th class="text-center">Jumlah</th>
              <th class="text-center">Harga</th>
              <th class="text-center">Sub total</th>
              <th class="text-center">
                <a class="btn btn-sm btn-outline-danger" href="#">Clear Cart</a>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product-item" style="display: flex">
                  <a class="product-thumb" href="#"
                    ><img
                      src="https://via.placeholder.com/220x180/FF0000/000000"
                      alt="Product"
                  /></a>
                  <p class="row gx-0 align-items-center">
                    KODE PRODUK - NAMA PRODUK 1
                  </p>
                </div>
                <pre></pre>
              </td>
              <td class="text-center align-middle">
                <div class="count-input">
                  <input
                    class="col-sm-4"
                    id="demoInput"
                    type="number"
                    min="0"
                  />
                </div>
              </td>
              <td class="text-center text-lg text-medium align-middle">
                $43.90
              </td>
              <td class="text-center text-lg text-medium align-middle">
                $18.00
              </td>
              <td class="text-center align-middle">
                <a
                  class="remove-from-cart"
                  href="#"
                  data-toggle="tooltip"
                  title=""
                  data-original-title="Remove item"
                  ><i class="fa fa-trash"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>
                <div style="display: flex" class="product-item">
                  <a class="product-thumb" href="#"
                    ><img
                      src="https://via.placeholder.com/220x180/5F9EA0/000000"
                      alt="Product"
                  /></a>
                  <p class="row gx-0 align-items-center">
                    KODE PRODUK - NAMA PRODUK 2
                  </p>
                </div>
                <pre></pre>
              </td>
              <td class="text-center align-middle">
                <div class="count-input">
                  <input
                    class="col-sm-4"
                    id="demoInput"
                    type="number"
                    min="0"
                  />
                </div>
              </td>
              <td class="text-center text-lg text-medium align-middle">
                $24.89
              </td>
              <td class="text-center align-middle">—</td>
              <td class="text-center align-middle">
                <a
                  class="remove-from-cart"
                  href="#"
                  data-toggle="tooltip"
                  title=""
                  data-original-title="Remove item"
                  ><i class="fa fa-trash"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>
                <div style="display: flex" class="product-item">
                  <a class="product-thumb" href="#"
                    ><img
                      src="https://via.placeholder.com/220x180/9932CC/000000"
                      alt="Product"
                  /></a>
                  <p class="row gx-0 align-items-center">
                    KODE PRODUK - NAMA PRODUK 3
                  </p>
                  <pre></pre>
                </div>
              </td>
              <td class="text-center align-middle">
                <div class="count-input">
                  <input
                    class="col-sm-4"
                    id="demoInput"
                    type="number"
                    min="0"
                  />
                </div>
              </td>
              <td class="text-center text-lg text-medium align-middle">
                $200.00
              </td>
              <td class="text-center align-middle">—</td>
              <td class="text-center align-middle">
                <a
                  class="remove-from-cart"
                  href="#"
                  data-toggle="tooltip"
                  title=""
                  data-original-title="Remove item"
                  ><i class="fa fa-trash"></i
                ></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="display : flex" class="text-right">
        <p>Total Harga</p>
      </div>
      <div class="shopping-cart-footer">
        <div class="column"></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column text-center">
          <a
            style="color : red"
            class="btn btn-light"
            href="#"
            data-toast=""
            data-toast-type="success"
            data-toast-position="topRight"
            data-toast-icon="icon-circle-check"
            data-toast-title="Your cart"
            data-toast-message="is updated successfully!"
            >Lanjut Belanja</a
          ><a class="btn btn-danger" href="#">Periksa</a>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>

<script>
function increment() {
  document.getElementById("demoInput").stepUp();
}
function decrement() {
  document.getElementById("demoInput").stepDown();
}
</script>
