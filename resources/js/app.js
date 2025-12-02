import { createApp } from 'vue'
import router from './router'





import FrontendLayout from './Components/frontEnd/FrontEndLayout.vue'

const app = createApp(FrontendLayout)
app.use(router)
// app.use(pinia)
app.mount('#app')
