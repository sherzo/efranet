<template>
	<section>
		<div class="row">
			<div class="col-md-12">
				<div class="container-group">
					<div class="container-group-bg">
						<div class="container-group-search">
							<div class="input-group">
								<input type="text" class="form-control form-control-lg" placeholder="Ingresa tu nombre de dominio aquí" v-model="domain">
								<div class="input-group-append">
									<button @click="search" class="btn btn-primary btn-lg">Buscar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="content">

			<div class="row" v-if="result">
				<div class="col-md-12 center-align">
					<span v-if="available" class="text-success text-lg">
						¡Felicidades! <strong>{{ showDomain }}</strong> se encuentra disponible
					</span>
					
					<span v-else class="text-danger text-lg">
						{{ showDomain }} no esta disponible
					</span>
				</div>

				<div class="col-md-12 center-align pt-2" v-if="available">
					<span class="text-lg">$18.00 USD</span> 
					<button class="btn btn-primary btn-sm" @click="process"> Procesar</button>
				</div>
			</div>

			<div class="row" v-if="result && suggestions.length > 0">
				<div class="col-md-12">
					<hr>
					<p class="text-lg">Dominios sugeridos</p>
					<div class="row" v-for="(suggestion, i) in suggestions" :key="i" v-if="i < 3">
						<div class="col-md-10"> {{ suggestion }} </div>
						
						<div class="col-md-2">
							<input type="checkbox" :value="i" id="checkboxFiveInput" name="" />	
						</div>
						<hr>
					</div>
					
					<div class="row">
						<div class="col-md-12 center-align">
							<button type="submit" class="btn btn-primary btn-xs center-align">Procesar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<style lang="scss">
	.content {
		margin-top: 1rem;
		padding: 2rem;
		background: white; 
		border-radius: .7rem;
	}

	.container-group {
		border-radius: 10px;
		background: #3b6c8c !important;
	}

	.container-group-bg {
		padding: 4rem 6rem;
		background-repeat: no-repeat;
		background-position: 110% -5px;
		background-image: url('http://127.0.0.1:8000/img/globe.png')
	}

	.container-group-search {
		border-radius: .6rem;
		background: #ffffff;
		padding: .8rem;
	}

	.container-com {
		border-radius: .6rem;
		background-color: #f8f8f8;
	}
</style>

<script>
	export default {
		name: 'check-domain',
		data() {
			return {
				domain: '',
				showDomain: '',
				result: false,
				available: false,
				err: '',
				suggestions: []
			}
		},
		computed: {  
			welcome() {
				return this.$store.getters.domain
			}
		},
		methods: {
			suggestion (i) {
				this.domain = this.domain + this.tlds[i]
				this.err = true
				this.search()
			},
			process () {
				let domain = this.showDomain
				this.$router.push({name: 'purchase', params: { domain }})
			},
			search () {
				let form = {
					search: this.domain
				}
				this.$Progress.start()
				axios.post('check-domain', form)
					.then(res => {
						if(!res.data.available) {
							this.$Progress.fail()
						}else {
							this.$Progress.finish()
						}

						this.showDomain = res.data.isDomain ? 
							this.domain : 
							this.domain + '.com'

						this.suggestions = res.data.suggestions
						this.available = res.data.available
						this.result = true

					})
					.catch(err => {
						if(err.response.status === 422) {
							this.err = err.response.data.error
						}

						console.log(err)
					})
			}
		}
	}
</script>