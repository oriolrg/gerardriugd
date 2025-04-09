<template>
    <div id="home">
      <div v-for="projecte in projectes" :key="projecte.id" class="projecte-item">
        <a @click.prevent="openCarousel(projecte.id)" class="projecteportada">
          <img class="imageGrid responsiveImage" :src="'/public/profile_images/' + projecte.imatge" :alt="projecte.nomFotos" :title="projecte.titol" />
        </a>
      </div>
  
      <div v-if="currentProject" class="modal fade" id="carouselModal" tabindex="-1" role="dialog" aria-labelledby="carouselModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <carousel :images="currentProject.images" />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Carousel from './Carousel.vue'; // El component que acabes de crear
  
  export default {
    components: {
      Carousel,
    },
    data() {
      return {
        projectes: @json($projectes),  // Afegeix les dades de projectes a la vista
        currentProject: null,
      };
    },
    methods: {
      openCarousel(id) {
        // Obtenim les dades del projecte seleccionat
        this.currentProject = this.projectes.find(projecte => projecte.id === id);
      }
    },
  };
  </script>