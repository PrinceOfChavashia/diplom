<template>
    <div class="card" v-if="not == 0">
        <img class="last" :src="img" alt="" @click="$emit('ShowDetailed', {name, opi, price, sale, img, weight, country})">
        <div class="card_small">
            <div class="card_text" @click="$emit('ShowDetailed', {name, opi, price, sale, img, weight, country})">
                <p class="card_name">{{name}}</p>
                <p class="card_price">{{price}} $<span class="card_weight">/ {{weight}} g.</span></p>
                <p class="card_country">Manufacturer: {{country}}</p>
            </div>
            <button class="buttonDef">More details</button>
        </div>
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
        opi:
        {
            type: String,
            default: "NONE"
        },
        price:
        {
            type: Int32Array,
            default: 0
        },
        sale:
        {
            type: String,
            default: ""
        },
        img:
        {
            type: Image,
            default: "NO IMG ;*"
        },
        weight:{
            type: Int32Array,
            default: 0
        },
        country:{
            type: String,
            default: ""
        },
        not:{
            type: Int32Array,
            default: 0
        },
        but:{
            type: String,
            default: "Buy"
        },
    },
    
}
</script>

<style >
    .card{
        width: 387px;
        width: clamp(24.714rem, 23.72rem + 3.71vw, 27.643rem);
    }
    .card img{
        object-fit: cover;
        width: clamp(24.714rem, 23.72rem + 3.71vw, 27.643rem);
        height: 473px;
    }
    .card_text{
        padding: 12px 7px 0 0;
        color: #A64574;
        font-size: 24px;
    }
    .card_price{
        color: #A64574;
        font-size: 16px;
        margin-top: 8px;
    }
    .card_weight{
        opacity: 0.7;
    }
    .card_country{
        margin-top: 12px;
        font-size: 14px;
        color: #A64574;
    }
    /* .card_but{
        margin-top: 10px;
        margin-left: 20px;
    } */
    .buttonDef{
        margin-top: 10px;
        font-family: Varela Round;
        background: #A64574;
        color: #fff;
        padding: 5px 15px;
        border-radius: 20px;
    } 
    @media screen and (max-width: 1436px){
        .card{
            width: 330px;
        }
        .card img{
            width: 330px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 1220px){
        .card{
            width: 430px;
        }
        .card img{
            width: 430px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 1046px){
        .card{
            width: 380px;
        }
        .card img{
            width: 380px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 916px){
        .card{
            width: 330px;
        }
        .card img{
            width: 330px;
            height: 400px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 788px){
        .card{
            width: 300px;
        }
        .card img{
            width: 300px;
            height: 400px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 710px){
        .card{
            width: 250px;
        }
        .card img{
            width: 250px;
            height: 300px;
            background-color: #A64574;
        }
    }
    @media screen and (max-width: 581px){
        .card{
            width: 100%;
        }
        .card img{
            width: 100%;
            height: 300px;
            background-color: #A64574;
        }
    }
</style>