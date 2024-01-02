import { createApp } from 'vue'
import './assets/style.css'
import App from './App.vue'
import Home from './components/Home.vue'

const app = createApp(App)
app.component('home', Home)
app.mount('#app')
