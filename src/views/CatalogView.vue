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
        <div class="select">
          <div class="select_type">
            <div class="select_but" @click="active_select_type()">
              <p class="name_select">Chapter</p>
              <svg width="19.000000" height="19.000000" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <clipPath id="clip32_49">
                    <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="white" fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="#FFFFFF" fill-opacity="0" />
                <g clip-path="url(#clip32_49)">
                  <path id="Vector" d="M4.51 6.89C4.2 7.2 4.2 7.7 4.51 8.01L8.39 11.88C9 12.5 10.01 12.5 10.62 11.88L14.5 8.01C14.81 7.7 14.81 7.2 14.5 6.89C14.19 6.58 13.69 6.58 13.38 6.89L10.06 10.2C9.75 10.51 9.25 10.51 8.94 10.2L5.63 6.89C5.32 6.58 4.82 6.58 4.51 6.89Z" fill="#A64574" fill-opacity="1.000000" fill-rule="nonzero" />
                </g>
              </svg>
            </div>
            <div ref="select_type_none" class="select_option select_type_none">
              <p @click="push_tag(1)" ref="select_option_1" class="option">Chewing marmalade</p>
              <p @click="push_tag(2)" ref="select_option_2" class="option">Sour marmalade</p>
              <p @click="push_tag(3)" ref="select_option_3" class="option">Marmalade sets</p>
            </div>
          </div>
          <div class="select_type">
            <div class="select_but" @click="active_select_price()">
              <p class="name_select">Price</p>
              <svg width="19.000000" height="19.000000" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <clipPath id="clip32_49">
                    <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="white" fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="#FFFFFF" fill-opacity="0" />
                <g clip-path="url(#clip32_49)">
                  <path id="Vector" d="M4.51 6.89C4.2 7.2 4.2 7.7 4.51 8.01L8.39 11.88C9 12.5 10.01 12.5 10.62 11.88L14.5 8.01C14.81 7.7 14.81 7.2 14.5 6.89C14.19 6.58 13.69 6.58 13.38 6.89L10.06 10.2C9.75 10.51 9.25 10.51 8.94 10.2L5.63 6.89C5.32 6.58 4.82 6.58 4.51 6.89Z" fill="#A64574" fill-opacity="1.000000" fill-rule="nonzero" />
                </g>
              </svg>
            </div>
            <div ref="select_price_none" class="select_option select_type_none">
              <p @click="push_tag(4)" ref="select_option_4" class="option">x &lt; 5$</p>
              <p @click="push_tag(5)" ref="select_option_5" class="option">x &gt; 5$</p>
              <p @click="push_tag(6)" ref="select_option_6" class="option">x &gt; 50$</p>
            </div>
          </div>
          <div class="select_type">
            <div class="select_but" @click="active_select_weight()">
              <p class="name_select">Weight</p>
              <svg width="19.000000" height="19.000000" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <clipPath id="clip32_49">
                    <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="white" fill-opacity="0" />
                  </clipPath>
                </defs>
                <rect id="arrow-up-svgrepo-com 1" width="18.999998" height="18.999998" transform="translate(19.000000 19.000000) rotate(180.000000)" fill="#FFFFFF" fill-opacity="0" />
                <g clip-path="url(#clip32_49)">
                  <path id="Vector" d="M4.51 6.89C4.2 7.2 4.2 7.7 4.51 8.01L8.39 11.88C9 12.5 10.01 12.5 10.62 11.88L14.5 8.01C14.81 7.7 14.81 7.2 14.5 6.89C14.19 6.58 13.69 6.58 13.38 6.89L10.06 10.2C9.75 10.51 9.25 10.51 8.94 10.2L5.63 6.89C5.32 6.58 4.82 6.58 4.51 6.89Z" fill="#A64574" fill-opacity="1.000000" fill-rule="nonzero" />
                </g>
              </svg>
            </div>
            <div ref="select_weight_none" class="select_option select_type_none">
              <p @click="push_tag(7)" ref="select_option_7" class="option">x &lt; 300g.</p>
              <p @click="push_tag(8)" ref="select_option_8" class="option">x &gt; 300g.</p>
              <p @click="push_tag(9)" ref="select_option_9" class="option">x &gt; 1000g.</p>
            </div>
          </div>
        </div>
        <div class="tagi">
          <tagSelect v-for="i in $store.state.tagi" :key="i"
          :name="i"/>
          <!-- <div class="tag">
            <svg width="8.000000" height="8.000000" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs/>
              <path id="Vector" d="M-0.27 6.53C-0.46 6.73 -0.46 7.06 -0.27 7.26C-0.07 7.45 0.26 7.45 0.46 7.26L-0.27 6.53ZM3.86 3.86C4.05 3.66 4.05 3.33 3.86 3.13C3.66 2.94 3.33 2.94 3.13 3.13L3.86 3.86ZM3.13 3.13C2.94 3.33 2.94 3.66 3.13 3.86C3.33 4.05 3.66 4.05 3.86 3.86L3.13 3.13ZM7.26 0.46C7.45 0.26 7.45 -0.07 7.26 -0.27C7.06 -0.46 6.73 -0.46 6.53 -0.27L7.26 0.46ZM3.86 3.13C3.66 2.94 3.33 2.94 3.13 3.13C2.94 3.33 2.94 3.66 3.13 3.86L3.86 3.13ZM6.53 7.26C6.73 7.45 7.06 7.45 7.26 7.26C7.45 7.06 7.45 6.73 7.26 6.53L6.53 7.26ZM3.13 3.86C3.33 4.05 3.66 4.05 3.86 3.86C4.05 3.66 4.05 3.33 3.86 3.13L3.13 3.86ZM0.46 -0.27C0.26 -0.46 -0.07 -0.46 -0.27 -0.27C-0.46 -0.07 -0.46 0.26 -0.27 0.46L0.46 -0.27ZM0.46 7.26L3.86 3.86L3.13 3.13L-0.27 6.53L0.46 7.26ZM3.86 3.86L7.26 0.46L6.53 -0.27L3.13 3.13L3.86 3.86ZM3.13 3.86L6.53 7.26L7.26 6.53L3.86 3.13L3.13 3.86ZM3.86 3.13L0.46 -0.27L-0.27 0.46L3.13 3.86L3.86 3.13Z" fill="#A64574" fill-opacity="1.000000" fill-rule="nonzero"/>
            </svg>
            <p class="tag_text">Chewing marmalade</p>
          </div> -->
        </div>
      </div>
      <div class="sort_right">
      </div>
    </div>
  </section>
</template>

<script>
  import tagSelect from "../components/tagSelect.vue";
  export default {
    components: {
      tagSelect,
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
      },
      active_select_type(){
        if(this.$store.state.active_select_type){
          this.$refs.select_type_none.classList.remove('select_type_none');
          console.log("remove");
        }
        else{
          this.$refs.select_type_none.classList.add('select_type_none');
          console.log("add");
        }
        this.$store.state.active_select_type = !this.$store.state.active_select_type;
      },
      active_select_price(){
        if(this.$store.state.active_select_price){
          this.$refs.select_price_none.classList.remove('select_type_none');
          console.log("remove");
        }
        else{
          this.$refs.select_price_none.classList.add('select_type_none');
          console.log("add");
        }
        this.$store.state.active_select_price = !this.$store.state.active_select_price;
      },
      active_select_weight(){
        if(this.$store.state.active_select_weight){
          this.$refs.select_weight_none.classList.remove('select_type_none');
          console.log("remove");
        }
        else{
          this.$refs.select_weight_none.classList.add('select_type_none');
          console.log("add");
        }
        this.$store.state.active_select_weight = !this.$store.state.active_select_weight;
      },
      push_tag(i){
        switch(i){
          case 1:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_1.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_1.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 2:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_2.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_2.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 3:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_3.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_3.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 4:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_4.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_4.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 5:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_5.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_5.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 6:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_6.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_6.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 7:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_7.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_7.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 8:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_8.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_8.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
            }
            return;
          }
          case 9:{
            let tag = this.$store.state.tagi.indexOf(this.$refs.select_option_9.textContent);
            if(tag == -1){
              this.$store.state.tagi.push(this.$refs.select_option_9.textContent);
            }
            else{
              this.$store.state.tagi.splice(tag, 1);
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

    .select{
      display: flex;
      gap: 20px;
      .select_type{
        .select_but{
          display: flex;
          align-items: center;
          font-size: 16px;
          color: #A64574;
        }
        .select_type_none{
          display: none;
        }
      }
    }

    .select_option{
      background-color: #FFD4E9;
      color: #A64574;
      display: inline-flex;
      flex-direction: column;
      padding: 5px 0;
      box-shadow: 0px 0px 15px 3px rgba(166, 69, 116, 0.25);
      position: absolute;

      .option{
        padding: 5px 5px;
      }

      .option:hover{
        background-color: #edb8d2;
        opacity: 0.8;
      }
    }
    .tagi{
      display: flex;
      gap: 10px;

      .tag{
        display: flex;
        align-items: center;
        gap: 5px;
        background-color: #d794b4;
        color:#A64574;
        padding: 4px 9px;
        border-radius: 15px;
      }
      .tag:hover{
        background-color: #edb8d2;
        color:#A64574;
        opacity: 0.7;
      }
    }
  }  
</style>