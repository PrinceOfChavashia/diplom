<template>
  <ul id="carousel">
<li class="carousel-img">
    <div></div>
    <img class="defaultImg" src="http://www.menucool.com/slider/prod/image-slider-5.jpg " style="display: inline-block;">
    <img class="largeImg" src="5/design-engine.jpg" style="display: none;">
   <div class="carousel-title">Design & Engineering</div>
</li>
<li class="carousel-img">
    <div></div>
    <img class="defaultImg" src="http://www.menucool.com/slider/prod/image-slider-5.jpg " style="display: inline-block;">
    <img class="largeImg" src="http://www.menucool.com/slider/prod/image-slider-5.jpgg" style="display: none;">
   <div class="carousel-title">Design & Engineering</div>
</li>
</ul>
</template>
<style lang="scss">
#carousel {
    bottom: 0;
    color: #FFFFFF;
    left: 12.2%;
    list-style: none outside none;
    margin: 0 auto;
    max-width: 980px;
    overflow: auto;
    position: absolute;

}

#carousel li {
   float: left;
   height: 223px;
   line-height: 1.7em;
   position: relative;
}

#carousel li img {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    vertical-align: bottom;
    position: absolute;
    //bottom: 0;
}
</style>