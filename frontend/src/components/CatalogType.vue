<template>
  <div class="prm__flat">
<!--    <div class="prm__flat__block"><a href=""><h4>Квартира</h4></a>-->
<!--      <div class="prm__img">-->
<!--        <img src="@/assets/images/galka.png" alt="">-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="prm__flat__block"><a href=""><h4>Дом, дача</h4></a>-->
<!--      <div class="prm__img">-->
<!--        <img src="@/assets/images/galka.png" alt="">-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="prm__flat__block"><a href=""><h4>Участок</h4></a>-->
<!--      <div class="prm__img">-->
<!--        <img src="@/assets/images/galka.png" alt="">-->
<!--      </div>-->
<!--    </div>-->
  </div>
</template>

<script>
export default {
  name: "CatalogType"
}
</script>

<style scoped>
  .prm__flat__block {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    transition: color .2s linear;
    border-radius: 5px;
  }

  .prm__flat__block:hover {
    background-color: #779fbd;
  }

  .prm__flat__block:hover .prm__img{
    opacity: 1;
  }

  .prm__flat {
    /*display: flex;*/
    /*flex-direction: column;*/
    /*position: absolute;*/
    /*width: 130px;*/
    /*height: 110px;*/
    /*z-index: 2;*/
    /*margin-top: 10%;*/
    /*margin-top: 305px;*/
    /*margin-left: 190px;*/
    /*background-color: rgba(26, 137, 201, 1);*/
    /*border-radius: 5px;*/
    /*padding: 1px 1px 0 2px;*/
  }

  .prm__img {
    width: 5%;
    height: 5%;
    margin-right: 10%;
    opacity: 0;
  }

  .prm__flat a {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    color: white;
    margin-right: 10%;
  }
</style>