import { createStore } from 'vuex'



export default createStore({
  state: {
    katalog: [],
    main: [],
    tagi: [],
    nav_hint: "",
    active_select_type: false,
    active_select_price: false,
    active_select_weight: false,
  },
  getters: {
    // active_green(i){
    //   switch(i){
    //     case 1:{
    //       this.$refs.green_1.classList.add('green')
    //       return;
    //     }
    //   }
    // }
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
