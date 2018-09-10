<template>
  <div class="container-fluid">
    <h1>Registro de dominios</h1>
    <div class="row justify-content-center">
      <div class="col-md-3">
        
      </div>

      <div class="col-md-9">
        <check-domain></check-domain>          
      </div>
    </div>
  </div>
</template>

<script>
	import CheckDomain from './shared/CheckDomain.vue'

  export default {
  	components: { CheckDomain },
  }
</script>
