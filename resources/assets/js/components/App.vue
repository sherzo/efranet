<template>
  <div>
  	<e-header></e-header>
    
    <main class="mt-4">
      <router-view></router-view>	
    </main>

    <e-footer></e-footer>
    <vue-progress-bar></vue-progress-bar>
  </div>
</template>

<script>
	import EHeader from './layout/Header.vue'
	import EFooter from './layout/Footer.vue'

  export default {
    components: { EHeader, EFooter },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>
