<template>
    <div class="card">
        <img class="last" :src="img" alt="" @click="$emit('ShowDetailed', {name, opi, price, sale, img, weight})">
        <div class="card_small">
            <div class="card_text" @click="$emit('ShowDetailed', {name, opi, price, sale, img, weight})">
                <p class="card_name">{{name}}</p>
                <p class="card_price">{{price}} $ / {{weight}} g.</p>
            </div>
            <button class="buttonDef">To the catalog</button>
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
    .card_but{
        margin-top: 10px;
        margin-left: 20px;
    }
    .buttonDef{
        margin-top: 10px;
        font-family: Varela Round;
        background: #A64574;
        color: #FFD4E9;
        padding: 5px 15px;
        border-radius: 20px;
    } 
</style>