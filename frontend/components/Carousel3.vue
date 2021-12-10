  <template>
  <mdb-carousel :items="9" multi indicators controlls slide :interval="8000">
    <template #[i+1] v-for="(img, i) in basic">
      <mdb-card :key="i">
        <mdb-card-image :src="img" alt="Card image cap"></mdb-card-image>
        <mdb-card-body>
          <mdb-card-title>{{ i + 1 }}</mdb-card-title>
          <mdb-card-text
            >Some quick example text to build on the card title and make up the
            bulk of the card's content.</mdb-card-text
          >
          <mdb-btn color="primary" size="md">Button</mdb-btn>
        </mdb-card-body>
      </mdb-card>
    </template>
  </mdb-carousel>
</template>

<script>
import { mdbCarousel } from "mdbvue";
export default {
  name: "CarouselPage",
  components: {
    mdbCarousel,
  },
  data() {
    return {
      items: [
        {
          img: true,
          src: "https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg",
        },
        {
          img: true,
          src: "https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg",
        },
        {
          img: true,
          src: "https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg",
        },
      ],
    };
  },
};
</script>