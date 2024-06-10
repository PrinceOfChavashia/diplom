<template>
    <div class="order_tovar small" v-for="i in arr" :key="i">
        <img class="order_tovar_img" :src="i.img" alt="">
        <div class="order_tovar_small">
            <p class="order_card_name">{{ i.name }}</p>
            <p class="order_card_sum">Quantity: <span class="card_sum_span">{{ i.sum }}</span></p>
            <p class="order_card_price">{{ i.price*i.sum }} $ <span>/ {{ i.weight*i.sum }} g.</span></p>
        </div>
    </div>
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
        padding: 15px 0px;
        gap: 10px;

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
    .small{
        //display: none;
        border: none;
        border-bottom: #A64574 solid 3px;
        .order_tovar_small{
            justify-content: space-between;
            display: flex;
            flex-direction: row;
            flex-grow: 1;
        }
    }
    .small:first-child{
            padding-top: 0;
        }
        .small:last-child{
            border: none;
            padding-bottom: 0;
        }
    @media screen and (max-width: 1046px){
        .small{
            display: flex;
            align-items: stretch ;

            .order_tovar_small{
                justify-content: space-between;
                display: flex;
                flex-direction: column;
                align-items: center;
                flex-grow: 1;
            }
        }
        .small{
            border-bottom: #A64574 solid 3px;
        }
        .small:first-child{
            padding-top: 0;
        }
        .small:last-child{
            border: none;
            padding-bottom: 0;
        }
    }
    @media screen and (max-width: 750px){
        .small{
            .order_tovar_small{
                flex-direction: row;
            }
        }
    }
    @media screen and (max-width: 640px){
        .small{
            .order_tovar_small{
                flex-direction: column;
            }
        }
    }
</style>