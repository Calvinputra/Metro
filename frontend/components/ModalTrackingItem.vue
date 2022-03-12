<template>
  <li class="event" :data-date="time">
    <h4 class="mb-3">{{title}}</h4>
    <p>
      {{description}}
    </p>
  </li>
</template>

<script>
export default {
    props:["time","title","description"]
}
</script>