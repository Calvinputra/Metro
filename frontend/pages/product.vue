<template>
  <section>
    <Header />

    <nav class="container my-4" aria-label="breadcrumb">
      <ol class="py-1 breadcrumb">
        <li class="my-2 ms-3 breadcrumb-item">
          <a style="text-decoration: none" href="/">Home</a>
        </li>
        <li class="my-2 breadcrumb-item active" aria-current="page">Product</li>
      </ol>
    </nav>

    <Card-Product />
    <Footer />
  </section>
</template>