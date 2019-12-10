<template>
    <card>
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th v-if="card.rowLabels.length" class="p-5"></th>
                <th :class="index === card.columns.length - 1 ? 'text-right': 'text-left'"
                    class="p-5"
                    v-for="(header,index) in card.columns"
                    :key="header.key">
                    {{ header.title }}
                </th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(item,index) in card.data" :key="index">
                <td v-if="card.rowLabels.length" class="font-bold p-5">
                    {{ card.rowLabels[index] }}
                </td>
                <td :class="keyIndex === headerKeyList.length - 1 ? 'text-right': 'text-left'"
                    class="p-5"
                    v-for="(key,keyIndex) in headerKeyList" :key="key">
                    {{ item[key] }}
                </td>
            </tr>
            </tbody>
        </table>
    </card>
</template>

<script>
    export default {
        props: [
            'card'

            // The following props are only available on resource detail cards...
            // 'resource',
            // 'resourceId',
            // 'resourceName',
        ],

        mounted() {
            //
        },
        computed: {
            headerKeyList() {
                return this.card.columns.map(item => item.key)
            }
        }
    }
</script>

<style lang="scss" scoped>

    .table-auto {
        table-layout: auto;
    }

    .p-5 {
        padding: 1.25rem;
    }

    tbody tr:nth-child(odd) {
        background: #F6F8FB;
    }

</style>