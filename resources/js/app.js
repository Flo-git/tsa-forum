/**
 * Nous allons d'abord charger toutes les dépendances JavaScript de ce projet qui
 * comprend Vue et d'autres bibliothèques. C'est un excellent point de départ lors de la
 * création d'applications Web robustes et puissantes à l'aide de Vue et Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
* Le bloc de code suivant peut être utilisé pour enregistrer automatiquement votre
* Composants Vue. Il analysera récursivement ce répertoire pour les Vue
* composants Vue et les enregistrera automatiquement avec leur "basename".
*
* Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
/**
 * Ensuite, nous allons créer une nouvelle instance d'application Vue et l'attacher à
 * la page. Ensuite, vous pouvez commencer à ajouter des composants à cette application
 * ou personnaliser l'échafaudage JavaScript pour répondre à vos besoins uniques.
 */

const app = new Vue({
    el: '#app',
});
