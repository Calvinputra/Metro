<template>
  <tr>
    <td>
      <div class="product-item text-middle" style="display: flex">
        <div class="form-check mt-auto mb-auto">
          <input
            class="form-check-input"
            type="checkbox"
            id="flexCheckChecked"
            checked
          />
        </div>
        <a class="product-thumb" href="#"
          ><img
            class="mt-4"
            style="border-radius: 5%"
            src="https://via.placeholder.com/220x180/FF0000/000000"
            alt="Product"
        /></a>
        <p class="row gx-0 align-items-center">KODE PRODUK - NAMA PRODUK 1</p>
      </div>
      <pre></pre>
    </td>
    <td class="text-center align-middle">
      <div class="count-input">
        <input class="col-sm-4" id="demoInput" type="number" min="0" />
      </div>
    </td>
    <td class="text-center text-lg text-medium align-middle">$43.90</td>
    <td class="text-center text-lg text-medium align-middle">$18.00</td>
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
</template>