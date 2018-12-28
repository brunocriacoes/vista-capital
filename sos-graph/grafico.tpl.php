<div style="width: 500px;">
  <canvas id="myChart" width="400" height="400"></canvas>
</div>
<script type="text/javascript" src="{{lib}}"></script>
<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [ "{{linha0}}" ],
          datasets: [
            {
              
              label: '{{cota}}',
              data: [ {{linha1}} ],
              backgroundColor: [
                  '#5c4937'
              ],
              borderColor: [
                '#5c4937'
              ],
              borderWidth: 3,
              fill: false,
              pointRadius: 0,

          },{
              label: '{{acumuado}}',
              data: [ {{linha2}} ],
              backgroundColor: [
                  '#b29762'
              ],
              borderColor: [
                '#b29762'
              ],
              fill: false,
              borderWidth: 3,
              pointRadius: 0,
          }
        ]},
      options: {
        legend: {
            position: "bottom"
        },
        title:{
            display:true,
            text:'',
            fontSize: 20,
            position: 'top',
            fontColor: '#000',
            padding: 20
        },
        scales: {
    xAxes: [{
                gridLines: {
                    display:false
                }
            }],   
    }
      }
  });
</script>