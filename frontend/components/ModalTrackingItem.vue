<template>
  <li class="event" :data-date="date">
    <h4 class="mb-3">{{title}}</h4>
    <p>
      {{description}}
    </p>
  </li>
</template>

<script>
export default {
    props:["date","title","description"]
}
</script>