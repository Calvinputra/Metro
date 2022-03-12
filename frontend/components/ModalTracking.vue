<template>
  <b-modal id="modal-tracking" title="Lacak" ok-only>
    <div class="row" style="font-size: 14px" v-if="data.length > 0">
      <div class="col-md-12">
        <div id="content">
          <ul class="timeline-1 text-black">
            <ModalTrackingItem
              v-for="manifest in data"
              :key="manifest.manifest_code"
              :time="manifest.manifest_time"
              :title="manifest.manifest_description"
              :description="
                manifest.manifest_date_view + ' - ' + manifest.city_name
              "
            />
          </ul>
        </div>
      </div>
    </div>
    <div v-else>
      <LoadingSpinner />
    </div>
  </b-modal>
</template>

<style scoped>
.timeline-1 {
  border-left: 3px solid #c63442;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
  background: rgba(255, 0, 0, 0.06);
  margin: 0 auto;
  padding: 20px 60px 60px 60px !important;
  list-style: none;
  max-width: 70%;
  margin-left: 25%;
}

@media (max-width: 767px) {
  .timeline-1 {
    max-width: 98%;
    margin: 0 auto;
    padding: 25px;
  }
}

.timeline-1 .event {
  border-bottom: 1px dashed #000;
  padding-bottom: 25px;
  margin-bottom: 25px;
  position: relative;
}

@media (max-width: 767px) {
  .timeline-1 .event {
    padding-top: 30px;
  }
}

.timeline-1 .event:last-of-type {
  padding-bottom: 0;
  margin-bottom: 0;
  border: none;
}

.timeline-1 .event:before,
.timeline-1 .event:after {
  position: absolute;
  display: block;
  top: 0;
}

.timeline-1 .event:before {
  left: -207px;
  content: attr(data-date);
  text-align: right;
  font-weight: 100;
  font-size: 0.9em;
  min-width: 120px;
}

@media (max-width: 767px) {
  .timeline-1 .event:before {
    left: 0px;
    text-align: left;
  }
}

.timeline-1 .event:after {
  -webkit-box-shadow: 0 0 0 3px #c63442;
  box-shadow: 0 0 0 3px #c63442;
  left: -66px;
  background: #fff;
  border-radius: 50%;
  height: 9px;
  width: 9px;
  content: "";
  top: 5px;
}

@media (max-width: 767px) {
  .timeline-1 .event:after {
    left: -66px;
  }
}
</style>
<script>
export default {
  props: ["data"],
  data() {
    return {};
  },
};
</script>