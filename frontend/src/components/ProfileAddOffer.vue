<template>
  <div class="about__user">
    <div class="about__title"><h2>{{ editable ? 'Изменить' : 'Добавить' }} объявление</h2></div>
    <div class="about__images">
      <div class="image__load" v-for="(img, i) in 3" :key="i">
        <input type="file" @change="previewFiles">
        <img src="@/assets/images/image_load.png" alt="">
        <div class="about__load">
          <img src="@/assets/images/upload_log.svg" alt="">
        </div>
        <div class="about__delete">
          <img src="@/assets/images/delete_log.svg" alt="">
        </div>
      </div>
    </div>
<!--    <div class="about__delete">-->
<!--      <img src="@/assets/images/delete_log.svg" alt="">-->
<!--    </div>-->
    <div class="about__describtions">
      <div class="descriptions__name">
        <h4>Название для объявления:</h4>
        <input type="text" size="40" v-model.trim="offer.name">
      </div>
      <div class="descriptions__name">
        <h4>Тип:</h4>
        <select v-model="offer.type">
          <option value="Flat" selected>Квартира</option>
          <option value="House">Дома</option>
          <option value="Land">Участок</option>
        </select>
      </div>
      <div class="descriptions__address">
        <h4>Адрес:</h4>
        <input type="text" size="40" v-model.trim="offer.location">
      </div>
      <div class="descriptions__price">
        <h4>Цена:</h4>
        <input type="text" size="40" v-model.number="offer.price">
      </div>
      <div class="descriptions__flats">
        <h4>Кол-во комнат:</h4>
        <select v-model="offer.rooms">
          <option value="Studio" selected>Студия</option>
          <option value="Room1">1 комната</option>
          <option value="Room2">2 комнаты</option>
          <option value="Room3More">3 комнаты и более</option>
        </select>
      </div>
      <div class="descriptions__square">
        <h4>Площадь:</h4>
        <input type="text" size="40" v-model.number="offer.space">
      </div>
      <div class="descriptions__text">
        <h4>Описание:</h4>
        <input type="text" size="40" v-model.trim="offer.description">
      </div>
    </div>
    <button @click="action">Отправить</button>
  </div>
</template>

<script>
import offerService from "@/services/offer";

export default {
  name: "ProfileAbout",
  emits: ['updated'],
  props: {
    editData: {
      type: Object,
      default: null,
    },
    editable: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return this.initialState()
  },
  methods: {
    async action() {
      const data = { ...this.offer };

      data.user_id = this.$store.getters.user.id;

      if (!this.editable)
        offerService
            .add(data)
            .then(() =>  this.reset())
            .catch(() => alert('Ошибка создания объявления!'));
      else
        offerService
            .update(this.editData.id, data)
            .then(() =>  this.$emit('updated'))
            .catch(() => alert('Ошибка изменения объявления!'));
    },
    initialState() {
      const ed = this.editData;

      return {
        offer: {
          name: ed ? ed.name : '',
          type: ed ? ed.type : 'Flat',
          location: ed ? ed.location : '',
          price: ed ? ed.price : '',
          rooms: ed ? ed.rooms : 1,
          space: ed ? ed.space : '',
          description: ed ? ed.description : '',
          is_group: 1,
        },
        files: [],
      }
    },
    reset() {
      Object.assign(this.$data, this.initialState());
    },
    previewFiles(event) {
      this.files.push(event.target.files[0]);
    },
  },
  watch: {
    editData() {
      this.reset();
    }
  }
}
</script>

<style scoped>

.about__load{
  position: absolute;
  width: 100%;
  margin-left: 40%;
}

.about__images {
  width: 105%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-top: 1%;
}

.image__load {
  display: flex;
  position: relative;
  align-items: center;
}

.image__load > input[type="file"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  z-index: 10;
  height: 100%;
  width: 100%;
}

.image__load > img{
  width: 296px;
  height: 204px;
  display: flex;
  flex-direction: row;
  margin-top: 3%;
}

.about__delete{
  position: absolute;
  top: 2%;
  right: 2%;
}

.about__delete > img{
  height: 10px;
  width: 10px;
}

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

.about__images > img {
  width: 296px;
  height: 204px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin-top: 1%;
  position: relative;
}

.about__describtions {
  margin-top: 2%;
}

.descriptions {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.descriptions__name {
  display: flex;
  flex-direction: row;
  margin-top: 1%;
}

.descriptions__address {
  display: flex;
  flex-direction: row;
  margin-top: 1%;
}

.descriptions__price {
  display: flex;
  flex-direction: row;
  margin-top: 1%;
}

.descriptions__flats {
  display: flex;
  flex-direction: row;
  margin-top: 1%;
}

.descriptions__square {
  display: flex;
  flex-direction: row;
  margin-top: 1%;
}

.descriptions__text {
  display: flex;
  flex-direction: column;
  margin-top: 1%;
}

.about__describtions input {
  background-color: rgb(201, 233, 252);
  border-radius: 5px;
  border-color: white;
  box-shadow: none;
  border: 1px solid rgb(83, 110, 136);
}

.about__describtions h4 {
  margin-right: 3%;
}

.descriptions__text input {
  width: 100%;
  height: 100px;
}
</style>