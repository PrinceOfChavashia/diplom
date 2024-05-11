import { createStore } from 'vuex'



export default createStore({
  state: {
    katalog: [],
    main: [],
    tagi: [],
    not_run_js: 0,
    found: 0,
    nav_hint: "",
    search: "",
    active_select_type: true,
    active_select_price: true,
    active_select_weight: true,
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
