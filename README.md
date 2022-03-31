# Metr Frontend

<p align="center">
  <a href="">
    <img alt="Logo" src="public/logo.svg" width="300" title="Logo">
   </a>
</p>

<p align="center">
  <a href="https://github.com/chemodan-tours/landing/actions">
    <img src="https://github.com/chemodan-tours/landing/actions/workflows/release.yml/badge.svg" title="Release status">
  </a>
  <a href="https://github.com/chemodan-tours/landing/actions">
    <img src="https://github.com/chemodan-tours/landing/actions/workflows/test.yml/badge.svg" title="Lint status">
  </a>
</p>

## Git Flow ⚠

Продакшен ветка - `master`

Ветка для разработки - `dev-x.x.x`

### Порядок работы с репозиторием
- Создать ветку с версией dev-x.x.x
- После окончания работы над версией и успешным прохождением тестов выполнить слияние с master веткой
- Для создания нового релиза перейти в раздел Releases, заполнить описание версии и добавить тег
- После успешного релиза нужно проверить корректность

## Установка проекта

```bash
git clone https://github.com/robonen/metr-frontend.git
cd frontend
npm install
```

### Запуск в режиме разработки

```bash
npm run serve
```

### Компиляция продакшен сборки

```bash
npm run build
```

## Правила структурирования проекта

### Компоненты (`src/components`)

```
AppButton.vue
AppPopup.vue
AppToastNotification.vue
BaseButton.vue
BasePopup.vue
ClientForm.vue
ClientList.vue
SearchWidget.vue
SearchWidgetInput.vue
SearchWidgetList.vue
```

1. Каждый компонент должен быть определен в отдельном файле
2. Имена файлов компонентов должны быть в PascalCase
3. Все базовые компоненты должны начинаться с одного префикса
4. Имена компонентов всегда должны быть многословными, чтобы не конфликтовать с существующими или будущими элементами HTML
5. Сильно связанные дочерние компоненты должны иметь префикс с именем их родительского компонента

### Страницы (`src/views`)

```
UsersIndex.vue
UsersCreate.vue
UsersShow.vue
UsersEdit.vue
SignIn.vue
Settings.vue
```

1. Каждая страница должна быть определена в отдельном файле
2. Имена файлов компонентов должны быть в PascalCase
3. Все страницы, относящиеся к одной сущности должны начинаться с одного префикса
4. Страницы, на сколько это возможно, строятся из компонентов, чтобы избежать дублирование кода

### Стили

1. Глобальные переменные, модули, миксины выносятся в папку `/assets/scss` и подключаются в `vue.config.js`

```javascript
// vue.config.js

module.exports = {
  css: {
    loaderOptions: {
      scss: {
        prependData: `@import "~@/assets/scss/variables.scss";`,
      },
    },
  },
};
```

```html
<template>
  <router-view />
</template>

<style lang="scss">
  .some-class {
    background-color: $main-color;
  }
</style>
```

2. Стили модуля задаются в файле модуля

```html
<template>
  <div class="hello">
    <h1>Hello, World!</h1>
  </div>
</template>

<style lang="scss">
  .hello {
    text-transform: uppercase;
  }
</style>
```