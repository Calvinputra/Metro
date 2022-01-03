<template>
  <section class="mb-5">
    <Header />
    <Breadcrumb :links="breadcrumb" />
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <AccountMenu :name="'register'" />
          </div>
          <div
            class="
              col-sm-9
              offset-md-1
              align-self-start
              mt-2
              row
              justify-content-between
            "
          >
            <div class="col-sm-12">
              <label class="mb-0"
                ><h2 class="font-weight-bold">
                  Ingin mengubah kata sandi?<span style="color: red">*</span>
                </h2></label
              >
            </div>
            <div class="mb-4">
              <hr
                style="height: 10%; width: 100%; border-width: 0; color: red"
                class="col-sm-12 mb-0 mt-0"
              />
              <p class="mb-">
                Pastikan Kata Sandi Lama dan Kata Sandi Baru berbeda.
              </p>
            </div>

            <div>
              <div class="row justify-content-start">
                <form>
                  <div class="register-form-title">
                    Masukan Kata Sandi
                  </div>
                  <b-alert
                    v-model="showDismissibleAlert"
                    variant="danger"
                    dismissible
                  >
                    <ul
                      style="color: black; padding: 0"
                      v-for="(error, key) in errors"
                      :key="key"
                    >
                      <li v-for="(e, key) in error" :key="key">{{ e }}</li>
                    </ul>
                  </b-alert>
                  <div class="form-group col-sm-11">
                    <label for="Password"
                      >Kata Sandi Lama<span style="color: red">*</span>:</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="Password"
                      v-model="password"
                    />
                  </div>
                  <div class="form-group col-sm-11">
                    <label for="password"
                      >Kata Sandi Baru<span style="color: red">*</span>:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      placeholder="New Password"
                      v-model="password"
                    />
                  </div>

                  <div class="form-group col-sm-11">
                    <label for="password_confirmation"
                      >Konfirmasi Kata Sandi Baru<span style="color: red"
                        >*</span
                      >:</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="password_confirmation"
                      name="password_confirmation"
                      placeholder="Password"
                      v-model="password_confirmation"
                    />
                  </div>

                  <p style="color: red">
                    Wajib diisi*
                  </p>
                  <br />
                  <div class="text-center">
                    <button
                      @click.prevent="doRegister"
                      type="submit"
                      class="
                        btn
                        text-danger
                        btn-light btn-sm
                        rounded
                        p-2
                      "
                      style="box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25) !important;"
                    >
                      Perbarui Kata Sandi
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <Footer2mobile />
    </section>

    <Footer />
    <client-only>
      <!-- include VueJS first -->
      <script src="https://unpkg.com/vue@latest"></script>

      <!-- use the latest vue-select release -->
      <script src="https://unpkg.com/vue-select@latest"></script>
      <link
        rel="stylesheet"
        href="https://unpkg.com/vue-select@latest/dist/vue-select.css"
      />

      <!-- or point to a specific vue-select release -->
      <script src="https://unpkg.com/vue-select@3.0.0"></script>
      <link
        rel="stylesheet"
        href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css"
      />
    </client-only>
  </section>
</template>
<!-- @extends('beautymail::templates.sunny')

@section('content')

@include ('beautymail::templates.sunny.heading' , [
'heading' =>'Verify your email to finish signing up for Metro Jaya',
'level' => 'h1',
])

@include('beautymail::templates.sunny.contentStart')
<div style="background-color: #841C26; color:white; padding: 5%;">
    <p class="text-white">
        Hello Jason Renata,
    </p>
    <p>Thank you for choosing Metro Jaya!<br>One more step to shop with us, please confirm
        your email by clicking on the button below</p>

</div>
@include('beautymail::templates.sunny.contentEnd')
<div style="background-color: #841C26;">

    @include('beautymail::templates.sunny.button', [
    'title' => 'Verify email',
    'link' => $url
    ])
</div>

@stop -->
