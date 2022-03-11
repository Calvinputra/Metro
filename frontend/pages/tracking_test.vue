<template>
  <div class="">
    <b-modal id="modal-1" title="Lacak" ok-only>
      <div class="row" style="font-size: 14px">
        <div class="col-md-12">
          <div id="content">
            <ul class="timeline-1 text-black">
              <li class="event" data-date="12:30 - 1:00pm">
                <h4 class="mb-3">Registration</h4>
                <p>
                  Get here on time, it's first come first serve. Be late, get
                  turned away.
                </p>
              </li>
              <li class="event" data-date="2:30 - 4:00pm">
                <h4 class="mb-3">Opening Ceremony</h4>
                <p>
                  Get ready for an exciting event, this will kick off in amazing
                  fashion with MOP &amp; Busta Rhymes as an opening show.
                </p>
              </li>
              <li class="event" data-date="5:00 - 8:00pm">
                <h4 class="mb-3">Main Event</h4>
                <p>
                  This is where it all goes down. You will compete head to head
                  with your friends and rivals. Get ready!
                </p>
              </li>
              <li class="event" data-date="8:30 - 9:30pm">
                <h4 class="mb-3">Closing Ceremony</h4>
                <p class="mb-0">
                  See how is the victor and who are the losers. The big stage is
                  where the winners bask in their own glory.
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </b-modal>
    <div>
      <b-button v-b-modal.modal-1>Launch demo modal</b-button>
    </div>
  </div>
</template>

<style>
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
