<template>
    <div class="order_tovar" v-for="i in arr" :key="i">
        <img class="order_tovar_img" :src="i.img" alt="">
        <p class="order_card_name">{{ i.name }}</p>
        <p class="order_card_sum">Quantity: <span class="card_sum_span">{{ i.sum }}</span></p>
        <p class="order_card_price">{{ i.price*i.sum }} $ <span>/ {{ i.weight*i.sum }} g.</span></p>
    </div>
    <!-- <div class="tovar_small" v-for="i in arr" :key="i">
        <img class="tovar_img" :src="i.img" alt="">
        <div class="tovar_small_flex">
            <p class="card_name_small">{{ i.name }}</p>
            <p class="card_sum">Quantity: <span class="card_sum_span">{{ i.sum }}</span></p>
            <p class="card_price_nnn"><span class="card_sum_span">{{ i.price*i.sum }}</span > $ / <span class="card_sum_span">{{ i.weight*i.sum }}</span> g.</p>
        </div>
    </div> -->
</template>

<script>


export default {
    props:
    {
        arr:
        {
            type: Array,
        },
    },
}
</script>

<style lang="scss">
    .order_tovar{
        display: flex;
        justify-content: space-between;
        color: #A64574;
        font-size: 20px;
        align-items: center;
        border-bottom: #A64574 solid 3px;
        padding: 15px 0px;

        .order_tovar_img{
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
        }
        .order_card_price span{
            color: #C27F9F;
        }
    }
    .order_tovar:first-child{
        padding-top: 0;
    }
    .order_tovar:last-child{
        border: none;
        padding-bottom: 0;
    }
</style>