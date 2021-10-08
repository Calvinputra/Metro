<template>
  <section>
    <Header />
    <div class="container padding-bottom-3x mb-1">
      <!-- Alert-->

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
              <td class="text-center">
                <div class="count-input">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$43.90</td>
              <td class="text-center text-lg text-medium">$18.00</td>
              <td class="text-center">
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
                  <p>KODE PRODUK - NAMA PRODUK 2</p>
                </div>
                <pre></pre>
              </td>
              <td class="text-center">
                <div class="count-input">
                  <select class="form-control">
                    <option>1</option>
                    <option selected="">2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$24.89</td>
              <td class="text-center">—</td>
              <td class="text-center">
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
                  <p>KODE PRODUK - NAMA PRODUK 3</p>
                  <pre></pre>
                </div>
              </td>
              <td class="text-center">
                <div class="count-input">
                  <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </td>
              <td class="text-center text-lg text-medium">$200.00</td>
              <td class="text-center">—</td>
              <td class="text-center">
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
      <div class="shopping-cart-footer">
        <div class="column"></div>
      </div>
      <div class="shopping-cart-footer">
        <div class="column justify-content-center">
          <a
            class="btn btn-primary"
            href="#"
            data-toast=""
            data-toast-type="success"
            data-toast-position="topRight"
            data-toast-icon="icon-circle-check"
            data-toast-title="Your cart"
            data-toast-message="is updated successfully!"
            >Update Cart</a
          ><a class="btn btn-success" href="#">Checkout</a>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>
