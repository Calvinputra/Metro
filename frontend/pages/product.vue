<template>
  <section>
    <Header />

    <nav class="container my-4" aria-label="breadcrumb">
      <ol class="py-1 breadcrumb">
        <li class="my-2 ms-3 breadcrumb-item opacity-50">
          <a style="text-decoration: none; color: black" href="/">Beranda</a>
        </li>
        <li
          class="my-2 breadcrumb-item active opacity-50"
          style="color: black"
          aria-current="page"
        >
          Product
        </li>
      </ol>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <Kategory />
        </div>
        <div class="col-sm-10 align-self-start">
          <h1>Kategory</h1>
          <div class="col-sm-10 align-self-end">
            <Card-Product />
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </section>
</template>