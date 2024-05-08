<template>
  <section class="top_catalog">
    <div class="nav_hint">
      <a class="nav_hint_left">Home</a>
      <svg width="12.000000" height="13.000000" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs/>
        <path id="Polygon 1" d="M10 3.4L4 -0.07C2 -1.22 -0.5 0.22 -0.5 2.53L-0.5 9.46C-0.5 11.77 2 13.21 4 12.06L10 8.59C12 7.44 12 4.55 10 3.4Z" fill="#A64574" fill-opacity="0.700000" fill-rule="evenodd"/>
      </svg>
      <a class="nav_hint_right">Marmalade catalog</a>
    </div>
    <h2 class="title">MARMALADE CATALOG</h2>
    <div class="fil_type">
      <button ref="green_1" @click="active_green(1)">All</button>
      <button ref="green_2" @click="active_green(2)">Chewing marmalade</button>
      <button ref="green_3" @click="active_green(3)">Sour marmalade</button>
      <button ref="green_4" @click="active_green(4)">Marmalade sets</button>
    </div>
    <div class="sort">
      <div class="sort_left">
        <!-- <dropdown-menu
          v-model="show"
          :right="right"
          :hover="hover"
          :interactive="interactive"
        >
          <button class="btn btn-primary dropdown-toggle">
            Chapter
          </button>
          <div slot="dropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </dropdown-menu> -->
      </div>
      <div class="sort_right">
аа
      </div>
    </div>
  </section>
</template>

<script>
  //import DropdownMenu from '@innologica/vue-dropdown-menu'
  export default {
    components: {
      // DropdownMenu,
    },
    data() {
      return {
      }
    },

    methods: {
      active_green(i){
        switch(i){
          case 1:{
            this.$refs.green_1.classList.add('green');
            this.$refs.green_2.classList.remove('green')
            this.$refs.green_3.classList.remove('green')
            this.$refs.green_4.classList.remove('green')
            return;
          }
          case 2:{
            if(this.$refs.green_2.classList.contains('green')){
              this.$refs.green_1.classList.add('green');
              this.$refs.green_2.classList.remove('green');
            }
            else{
              this.$refs.green_1.classList.remove('green');
              this.$refs.green_2.classList.add('green')
              this.$refs.green_3.classList.remove('green')
              this.$refs.green_4.classList.remove('green')
            }
            return;
          }
          case 3:{
            if(this.$refs.green_3.classList.contains('green')){
              this.$refs.green_1.classList.add('green');
              this.$refs.green_3.classList.remove('green');
            }
            else{
              this.$refs.green_1.classList.remove('green');
              this.$refs.green_2.classList.remove('green')
              this.$refs.green_3.classList.add('green')
              this.$refs.green_4.classList.remove('green')
            }
            return;
          }
          case 4:{
            if(this.$refs.green_4.classList.contains('green')){
              this.$refs.green_1.classList.add('green');
              this.$refs.green_4.classList.remove('green');
            }
            else{
              this.$refs.green_1.classList.remove('green');
              this.$refs.green_2.classList.remove('green')
              this.$refs.green_3.classList.remove('green')
              this.$refs.green_4.classList.add('green')
            }
            return;
          }
        }
      }
    },
  }
</script>

<style lang="scss">
  .top_catalog{
    width: clamp(24.714rem, 4.013rem + 77.285vw, 85.714rem);
    margin: auto;
    font-size: 16px;

    .nav_hint{
      display: flex;
      gap: 5px;

      
      .nav_hint_left{
        color: #A64574B3;
        opacity: 0.7;
      }
      .nav_hint_right{
        color: #A64574B3;
      }
    }

    .fil_type{
      margin: auto;
      display: flex;
      justify-content: center;
      gap: 30px;

      button{
        color: #A64574;
        background-color: #fff;
        font-size: 20px;
        
      }

      button.green{
        color: #81A645;
      }
    }
  }
  
</style>