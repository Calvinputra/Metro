<template>
  <section class="ps-5 bg-light mb-5 mt-4">
    <img class="ps-5" style="width : 300px" src="/img/metro.png" alt="" />
    <p style="max-width: 80%" class="text-center ps-4">
      Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota
      Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530
    </p>
    <div class="d-flex justify-content-center me-5" style="flex-wrap: wrap;">
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
    <div class="d-flex p-2">
      <div class="pe-3 ps-5">
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
    <p class="text-center me-4 pe-3">
      Dapatkan diskon <span class="text-danger">10%</span> dengan mengirim email
      kalian dibawah!
    </p>
    <div id="search" class="nav-item col-sm-8 align-self-start mt-4">
      <div class="d-flex pr-5">
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
    <div class="d-flex justify-content-center me-5" style="flex-wrap: wrap;">
      <a class="text-black p-2" href="">Akun saya</a>
      <p class="p-2">|</p>
      <a class="text-black p-2" href="">Tentang Kami</a>
      <a class="text-black" href="">Kebijakan Privasi</a>
    </div>
  </section>
</template>
