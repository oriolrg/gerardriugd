<template>
    <div class="carousel-container">
      <div v-if="images.length > 0" class="carousel">
        <img :src="images[currentImageIndex]" alt="Projecte" class="carousel-image" />
      </div>
      <div class="carousel-buttons">
        <button @click="prevImage">Anterior</button>
        <button @click="nextImage">Següent</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: ['images'],
    data() {
      return {
        currentImageIndex: 0,
      };
    },
    methods: {
      prevImage() {
        if (this.currentImageIndex === 0) {
          this.currentImageIndex = this.images.length - 1;
        } else {
          this.currentImageIndex--;
        }
      },
      nextImage() {
        if (this.currentImageIndex === this.images.length - 1) {
          this.currentImageIndex = 0;
        } else {
          this.currentImageIndex++;
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .carousel-container {
    position: relative;
    width: 100%;
    max-width: 800px;
    margin: auto;
  }
  
  .carousel {
    width: 100%;
    text-align: center;
  }
  
  .carousel-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
  }
  
  .carousel-buttons {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
  }
  
  .carousel-buttons button {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
  }
  
  .carousel-buttons button:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  </style>
  