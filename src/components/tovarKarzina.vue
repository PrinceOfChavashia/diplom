<template>
    <div class="tovar_korzina">
        <img :src="img" alt="">
        <div class="tovar_right">
            <div class="tovar_korzina_text">
                <p class="name">{{ name }}</p>
                <p class="weight">Weight: {{ weight }} g. - {{ price }} $</p>
            </div>
            <div class="tovar_korzina_kolvo">
                <button class="kolvo_but" @click="$emit('minus', name)">
                    <svg width="12.000000" height="1.000000" viewBox="0 0 12 1" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs/>
                        <line id="Line 4" x1="0.000000" y1="0.000000" x2="12.000000" y2="0.000000" stroke="#A64574" stroke-opacity="1.000000" stroke-width="1.000000"/>
                    </svg>
                </button>
                <p>{{ sum }}</p>
                <button class="kolvo_but" @click="$emit('plys')">
                    <svg width="12.000000" height="12.000000" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs/>
                        <line id="Line 5" x1="0.000000" y1="6.000000" x2="12.000000" y2="6.000000" stroke="#A64574" stroke-opacity="1.000000" stroke-width="1.000000"/>
                        <line id="Line 6" x1="6.000000" y1="0.000000" x2="6.000000" y2="12.000000" stroke="#A64574" stroke-opacity="1.000000" stroke-width="1.000000"/>
                    </svg>
                </button>
            </div>
            <p class="tovar_price_sum">{{ price*sum }} $</p>
            <button class="clear_tovar" @click="$emit('clear', name)">
                <svg width="12.000000" height="12.000000" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs/>
                    <line id="Line 5" x1="0.000000" y1="6.000000" x2="12.000000" y2="6.000000" stroke="#A64574" stroke-opacity="1.000000" stroke-width="1.000000"/>
                    <line id="Line 6" x1="6.000000" y1="0.000000" x2="6.000000" y2="12.000000" stroke="#A64574" stroke-opacity="1.000000" stroke-width="1.000000"/>
                </svg>
            </button>
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
        sum:
        {
            type: Int32Array,
            default: 1
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
    },
    
}
</script>

<style lang="scss">
    .tovar_korzina{
        display: flex;

        img{
            height: 100px;
            width: 100px;
            object-fit: cover;
            border-radius: 10px;
            margin-right: 11px;
        }
        .tovar_right{
            display: flex;
            justify-content: space-between;
            color: #A64574;
            align-items: center;
            width: 100%;

            .tovar_korzina_text{
                display: flex;
                align-self: flex-start;
                flex-direction: column;
                gap: 14px;

                .name{
                    font-size: 16px;
                }
                .weight{
                    font-size: 12px;
                    color: #C37299;
                }
            }
            .tovar_korzina_kolvo{
                display: flex;
                gap: 10px;
                align-items: center;

                .kolvo_but{
                    width: 18px;
                    height: 18px;
                    border-radius: 50%;
                    border: #A64574 solid 1px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #FFD4E9;
                }
            }
            .tovar_price_sum{
                font-size: 16px;
            }
            .clear_tovar{
                width: 18px;
                height: 18px;
                border-radius: 50%;
                border: #A64574 solid 1px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #FFD4E9;
                transform: rotate(0.125turn);
            }
        }
    }
    @media screen and (max-width: 669px){
        .tovar_right{
            flex-direction: column;

            .tovar_korzina_text.tovar_korzina_text{
                align-self: center;
                display: inline-flex;
                flex-direction: row;
                align-items: center;
            }
        }
    }
</style>