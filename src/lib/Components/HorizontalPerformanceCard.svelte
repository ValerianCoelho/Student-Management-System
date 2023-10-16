<script>
    import DonutChart from "./DonutChart.svelte";
    export let message1;
    export let message2;
    export let completed;
    export let completedColor;
    export let remainingColor;

  </script>
  
  <div class="horizontal-performance-card">
      <div class="donut-chart">
        <DonutChart size={150} {completed} {completedColor} {remainingColor}/>
      </div>
      <div class="performance-data">
        <h5 class="msg-1" style:color={completedColor}>{message1}</h5>
        <h5 class="msg-2">{message2}</h5>
      </div>
  </div>
  
  <style>
    @import '../../styles.css';
    .horizontal-performance-card {
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 10px;
      display: inline-flex;
    }
    .donut-chart {
        padding: 20px;
    }
    .performance-data {
        border-left: 1px solid rgba(0, 0, 0, .2);
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
    }
  </style>