import '../css/app.css'; 
import './bootstrap';

import { createApp } from 'vue';

// Components
import AppNav from './components/AppNav.vue';
import HeroSection from './components/HeroSection.vue';
import FormacionSection from './components/FormacionSection.vue';
import TechIcon from './components/TechIcon.vue';
import ProyectosSection from './components/ProyectosSection.vue';
import ProjectCard from './components/ProjectCard.vue';
import SocialLinks from './components/SocialLinks.vue';
import ContactoSection from './components/ContactoSection.vue';
import ContactForm from './components/ContactForm.vue';
import FooterSection from './components/FooterSection.vue';

const app = createApp({});


app.component('app-nav', AppNav);
app.component('hero-section', HeroSection);
app.component('formacion-section', FormacionSection);
app.component('tech-icon', TechIcon);
app.component('proyectos-section', ProyectosSection);
app.component('project-card', ProjectCard);
app.component('social-links', SocialLinks);
app.component('contacto-section', ContactoSection);
app.component('contact-form', ContactForm);
app.component('footer-section', FooterSection);
app.mount('#app');