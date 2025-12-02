import { createRouter, createWebHistory } from 'vue-router'

import Home from '../Components/frontEnd/pages/Home.vue'
import About from '../Components/frontEnd/pages/About.vue'
import Doctor from '../Components/frontEnd/pages/doctor/DoctorList.vue'
import DoctorProfile from '../Components/frontEnd/pages/doctor/DoctorProfile.vue'
import Appointment from '../Components/frontEnd/pages/Appointment.vue'
import Blog from '../Components/frontEnd/pages/blog/Blog.vue'
import BlogDetails from '../Components/frontEnd/pages/blog/BlogDetails.vue'
import Contact from '../Components/frontEnd/pages/Contact.vue'

const routes = [
    { path: '/', component: Home },

    { path: '/about', component: About },

    { path: '/doctor-list', component: Doctor },
    { path: '/doctor-profile', component: DoctorProfile },

    { path: '/appointment', component: Appointment },

    { path: '/blog', component: Blog },
    { path: '/blog-details', component: BlogDetails },

    { path: '/contact', component: Contact },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
