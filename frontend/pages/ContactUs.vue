<template>
  <section>
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <div class="d-flex" style="justify-content : space-evenly">
        <div style="col-sm">
          <img src="/img/metro.png" alt="" />
        </div>
        <div class="mr-5 col-sm-5">
          <form class="mr-5">
            <div class="col-sm-12">
              <label class="mb-0 mt-5"
                ><h2 class="font-weight-bold">
                  Formulir umpan balik
                </h2></label
              >
              <hr
                style="height:3px; border-width:0; color:red"
                class="col-sm-12"
              />
            </div>
            <div class="form-group mt-2">
              <label for="first_name"
                >Nama Depan<span style="color: red">*</span>:</label
              >
              <input
                type="text"
                class="form-control col-sm-12"
                id="first_name"
                name="first_name"
                placeholder="Nama Depan"
              />
            </div>
            <div class="form-group">
              <label for="last_name"
                >Nama Belakang<span style="color: red">*</span>:</label
              >
              <input
                type="text"
                class="form-control"
                id="last_name"
                name="last_name"
                placeholder="Nama Belakang"
              />
            </div>
            <div class="form-group">
              <label for="email">Email<span style="color: red">*</span>:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Email"
              />
            </div>
            <div class="form-group">
              <label for="last_name"
                >Nomor Telepon<span style="color: red">*</span>:</label
              >
              <input
                type="text"
                class="form-control"
                id="last_name"
                name="last_name"
                placeholder="Nomor Telepon"
              />
            </div>
            <div class="form-group">
              <label for="address"
                >Tuliskan Pesan<span style="color: red">*</span>:</label
              >
              <textarea
                class="form-control"
                id="address"
                name="address"
                rows="3"
              ></textarea>
            </div>
          </form>
          <p style="color : red">
            <span style="color: red">*</span>Wajib diisi
          </p>
          <br />
          <button
            type="submit"
            class="  btn
                  text-danger
                  btn-light
                  btn-sm
                  shadow
                  rounded
                  col-sm-4
                  ms-5"
          >
            Buat Akun
          </button>
        </div>
      </div>
      <Footer />
    </section>
  </section>
</template>
