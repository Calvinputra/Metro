<template>
  <hr
    :style="
      'opacity: 1; border: 20px; color: #841c26; width: ' +
      progress +
      '%; height: 5px'
    "
  />
</template>

<script>
export default {
  props: ["progress"],
};
</script>
