require('./bootstrap');

import { createApp } from "vue";
import PatientsGrid from './components/PatientsGrid'

const app = createApp({})
app.component('patients-grid', PatientsGrid);
app.mount('#app')
