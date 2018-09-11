<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-3">
          
      </div>

      <div class="col-md-9">
        <h1>Registro de dominios</h1>
        <hr>
        <p>Encuentra un dominio, introduzca un nombre o palabras clave para comprobar la disponibilidad.</p>

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
