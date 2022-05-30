<template>
  <div class="about__user">
    <div class="about__title">
      <h2>Мои объявления</h2>
    </div>
    <div class="my__offer">
      <div class="about__images" @click="activeId = i" v-for="(img, i) in offers" :key="i">
        <div class="image__load">
          <img src="@/assets/images/image_load.png" alt="">
        </div>
      </div>
      <profile-add-offer v-if="activeId !== null" :edit-data="offers[activeId]" editable @updated="loadOffers"></profile-add-offer>
<!--      <div v-if="activeId !== null" class="about_describtions">-->
<!--        <div class="about_inside">-->
<!--          <h2>{{ offers[activeId].name }}</h2>-->
<!--          <a href="#">-->
<!--            <img src="@/assets/images/redact.svg" alt="">-->
<!--          </a-->
<!--        </div>-->
<!--        <h3>{{ offers[activeId].location }}</h3>-->
<!--      </div>-->
    </div>
  </div>
</template>

<script>
import offerService from "@/services/offer";
import ProfileAddOffer from "@/components/ProfileAddOffer.vue";

export default {
  name: "ProfileAbout",
  components: {ProfileAddOffer},
  data() {
    return {
      activeId: null,
      offers: [],
    };
  },
  methods: {
    async loadOffers() {
      const offers = await offerService.allUserOffers();
      this.offers = offers.data.data;
    }
  },
  async mounted() {
    await this.loadOffers();
  }
}
</script>

<style scoped>
.about__user {
  width: 888px;
}

.my__offer{
  flex-direction: row;
  display: flex;
  column-gap: 1em;

  flex-wrap: wrap;
}

.about__images {
  display: flex;
  justify-content: space-between;
  margin-top: 1%;
}

.image__load {
  display: flex;
  flex-direction: row;
  position: relative;
  align-items: center;
}
.image__load > img{
  width: 296px;
  height: 204px;
  display: flex;
  flex-direction: row;
  margin-top: 3%;
}

.about_describtions {
  margin-top: 5%;
}

.about_inside{
  display: flex;
  flex-direction: row;
}


</style>