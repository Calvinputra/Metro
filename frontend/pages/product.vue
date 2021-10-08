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

    <Card-Product />
    <Footer />
  </section>
</template>