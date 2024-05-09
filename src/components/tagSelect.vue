<template>
    <div class="tag">
        <svg width="8.000000" height="8.000000" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs/>
          <path id="Vector" d="M-0.27 6.53C-0.46 6.73 -0.46 7.06 -0.27 7.26C-0.07 7.45 0.26 7.45 0.46 7.26L-0.27 6.53ZM3.86 3.86C4.05 3.66 4.05 3.33 3.86 3.13C3.66 2.94 3.33 2.94 3.13 3.13L3.86 3.86ZM3.13 3.13C2.94 3.33 2.94 3.66 3.13 3.86C3.33 4.05 3.66 4.05 3.86 3.86L3.13 3.13ZM7.26 0.46C7.45 0.26 7.45 -0.07 7.26 -0.27C7.06 -0.46 6.73 -0.46 6.53 -0.27L7.26 0.46ZM3.86 3.13C3.66 2.94 3.33 2.94 3.13 3.13C2.94 3.33 2.94 3.66 3.13 3.86L3.86 3.13ZM6.53 7.26C6.73 7.45 7.06 7.45 7.26 7.26C7.45 7.06 7.45 6.73 7.26 6.53L6.53 7.26ZM3.13 3.86C3.33 4.05 3.66 4.05 3.86 3.86C4.05 3.66 4.05 3.33 3.86 3.13L3.13 3.86ZM0.46 -0.27C0.26 -0.46 -0.07 -0.46 -0.27 -0.27C-0.46 -0.07 -0.46 0.26 -0.27 0.46L0.46 -0.27ZM0.46 7.26L3.86 3.86L3.13 3.13L-0.27 6.53L0.46 7.26ZM3.86 3.86L7.26 0.46L6.53 -0.27L3.13 3.13L3.86 3.86ZM3.13 3.86L6.53 7.26L7.26 6.53L3.86 3.13L3.13 3.86ZM3.86 3.13L0.46 -0.27L-0.27 0.46L3.13 3.86L3.86 3.13Z" fill="#A64574" fill-opacity="1.000000" fill-rule="nonzero"/>
        </svg>
        <p class="tag_text">{{name}}</p>
    </div>
</template>

<script>
export default {
    props:
    {
        name:
        {
            type: String,
            default: "NONE"
        },
    },
    
}
</script>

<style lang="scss">
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
</style>