<template>
    <div class="container">
        <div class="row">
           <div class="col-sm-12">
                <line-chart
                    :chart-data="data"
                    :height="100"
                    :options="{responsive: true, maintainAspectRatio:true}">
                </line-chart>
               <button @click="update" class="btn btn-primary btn-xs text mt-1 mh-10">Обновить</button>
           </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'

    export default {
        components: {LineChart},

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
                axios.get('/start/random-chart').then((response) => {
                    this.data = response.data;
                });
            }
        }

    }
</script>
