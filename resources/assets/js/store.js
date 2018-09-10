export default {
	state: {
		seach: 'Dominio que deseas buscar',
		domains: []
	},
	getters: {
		domain(state) {
			return state.seach  
		}
	},
  mutations: {},
  actions: {}
}