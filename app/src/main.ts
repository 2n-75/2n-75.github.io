require('@/assets/style/main.scss');

import Vue from 'vue'
import App from './App.vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faHeart, faLaptopCode} from '@fortawesome/free-solid-svg-icons'
import { faFacebookSquare, faYoutube, faGithub } from '@fortawesome/free-brands-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faFacebookSquare, faYoutube, faGithub, faHeart, faLaptopCode)
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')
