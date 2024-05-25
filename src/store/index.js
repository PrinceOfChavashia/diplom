import { createStore } from 'vuex'



export default createStore({
  state: {
    katalog: [],
    katalog_unsort: [], 
    main: [],
    tagi: [],
    korzina: [],
    orders: [],
    form: {
      name: '',
      email: '',
      telephon: '',
      password: '',
      password_confirm: '',
      sogl: false,
    },
    detailedItem: {
      name: "",
      img: '',
      price: "",
      opi: '',
      weight: '',
      sale: '',
      sum: '',
    },
    user:{},
    not_run_js: 0,
    found: 0,
    katalog_kolvo: 3,
    nav_hint: "",
    search: "",
    sort: "Order: default",
    active_select_type: true,
    active_select_price: true,
    active_select_weight: true,
    active_select_sort: true,
    register: false,
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
