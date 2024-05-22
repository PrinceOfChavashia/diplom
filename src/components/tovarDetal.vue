<template>
    <div class="detal_tovar">
        <img :src="img" alt="noimg">
        <div class="detal_tovar_infa">
            <h6 class="detal_tovar_name">{{ name }}</h6>
            <p class="detal_tovar_price">{{ price }}</p>
            <button class="detal_tovar_buy">Add to Basket</button>
            <p class="detal_tovar_opi">{{ opi }}</p>
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
        price:
        {
            type: Int32Array,
            default: 0
        },
        opi:
        {
            type: String,
            default: "NONE"
        },
        img:
        {
            type: Image,
            default: "NO IMG ;*"
        },
    },
}
</script>