<template>
  <section class="bg-light mt-4 text-center">
    <img style="width : 300px" src="/img/metro.png" alt="" />
    <div class="text-center ms-4 me-4" style="">
      <p style="" class="">
        Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota
        Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530
      </p>
    </div>
    <div class="d-flex justify-content-center mt-3" style="flex-wrap: wrap;">
      <a class="text-danger p-2" href="">Kategori1</a>
      <p class="text-danger p-2">|</p>
      <a class="text-danger p-2" href="">Kategori2</a>
      <p class="text-danger p-2">|</p>
      <a class="text-danger p-2" href="">Kategori3</a>
      <a class="text-danger p-2" href="">Kategori4</a>
      <p class="text-danger p-2">|</p>
      <a class="text-danger p-2" href="">Kategori5</a>
    </div>
    <div></div>
    <div class="d-flex p-2 justify-content-center">
      <div class="pe-3 ps-3">
        <img
          style="width: 40px;background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
      <div class="pe-3">
        <img
          style="width: 40px;background-color: #f3f3f3; box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
          src="/img/tokopedia.png"
          alt=""
        />
      </div>
    </div>
    <p class="text-center pe-3 ps-3">
      Dapatkan diskon <span class="text-danger">10%</span> dengan mengirim email
      kalian dibawah!
    </p>
    <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
      <div class="d-flex">
        <input
          class="form-control pe-2 me-1"
          style="border-radius: 10px 10px 10px 10px;"
          type="search"
          placeholder="Email"
          aria-label="Search"
          name="s"
          v-model="query"
        />
        <button
          class="rounded"
          style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important"
        >
          <p class="text-danger">Kirim</p>
        </button>
      </div>
    </div>
    <div class="d-flex justify-content-center mb-5" style="flex-wrap: wrap;">
      <a class="text-black p-2" href="">Akun saya</a>
      <p class="p-2">|</p>
      <a class="text-black p-2" href="">Tentang Kami</a>
      <p class="p-2">|</p>
      <a class="text-black p-2" href="">Kebijakan Privasi</a>
    </div>
  </section>
</template>
