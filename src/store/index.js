import { createStore } from 'vuex'



export default createStore({
  state: {
    katalog: [],
    main: [],
    nav_hint: "",
  },
  getters: {
    active_green(i){
      switch(i){
        case 1:{
          this.$refs.green_1.classList.add('green')
          return;
        }
      }
    }
  },
  mutations: {
    
  },
  actions: {
  },
  modules: {
  },
  components: {
  }
})  
