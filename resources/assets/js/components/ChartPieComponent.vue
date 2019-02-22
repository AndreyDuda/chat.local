<template>
    <div class="container">
        <div class="row">
           <div class="col-sm-12">
                <Pie-chart
                    :chart-data="data"
                    :height="100"
                    :options="{responsive: true, maintainAspectRatio:true}">
                </Pie-chart>
           </div>
        </div>
    </div>
</template>

<script>
    import PieChart from './PieChart.js'

    export default {
        components: {PieChart},

        data: function () {
          return {
              data: [],
          }
        },
        mounted() {
            this.update()
        },
        methods: {
            update: function() {
                axios.get('/start/data-chart').then((response) => {
                    this.data = response.data;
                });
            }
        }

    }
</script>
