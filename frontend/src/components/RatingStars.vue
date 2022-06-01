<template>
  <div class="user__stat">
    <div class="stat"><h3>{{ totalStars }}</h3></div>
    <div class="stars">
      <img src="../assets/images/star.png" alt="" v-for="(star, i) in totalStars" :key="i">
    </div>
  </div>
</template>

<script>
export default {
  name: "RatingStars",
  props: {
    totalStars: {
      type: Number,
      default: 5,
    }
  }
}
</script>

<style scoped>
.user__stat {
  display: flex;
  flex-direction: row;
  margin: 2% 0 2% 5%;
}

.stars {
  display: flex;
  flex-direction: row;
  margin-left: 5%;
  padding-bottom: 1%;
}
</style>