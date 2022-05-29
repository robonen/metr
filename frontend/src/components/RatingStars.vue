<template>
  <div class="user__stat">
    <div class="stat"><h3>5</h3></div>
    <div class="stars">
      <img src="../assets/images/star.png" alt="">
      <img src="../assets/images/star.png" alt="">
      <img src="../assets/images/star.png" alt="">
      <img src="../assets/images/star.png" alt="">
      <img src="../assets/images/star.png" alt="">
    </div>
  </div>
</template>

<script>
export default {
  name: "RatingStars"
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