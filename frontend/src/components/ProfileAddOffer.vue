<template>
  <div class="about__user">
    <div class="about__title"><h2>Добавить обьявление</h2></div>
    <div class="about__images">
      <img src="@/assets/images/metr.svg" alt="">
      <img src="@/assets/images/metr.svg" alt="">
      <img src="@/assets/images/metr.svg" alt="">
    </div>
    <div class="about_describtions">
      <h3>Однушка на Елизаровых, 44</h3>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProfileAbout"
}
</script>

<style scoped>
.about__user {
  display: flex;
  flex-direction: column;
}

.about__images {
  width: 105%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-top: 1%;
}

.about_describtions {
  margin-top: 5%;
}
</style>