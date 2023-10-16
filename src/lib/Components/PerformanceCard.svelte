<script>
  import DonutChart from "./DonutChart.svelte";
  export let completed;
  export let completedColor;
  export let remainingColor;
  export let title;
  export let subTitle;
</script>

<div class="performance-card border-color">
  <h2 class="title">{title}</h2>
  <h5 class="sub-title gray-color">{subTitle}</h5>
  <DonutChart size={120} {completed} {completedColor} {remainingColor}/>
</div>

<style>
  @import '../../styles.css';
  .performance-card {
    display: inline-block;
    padding: 20px;
    border-radius: 10px;
  }
  .sub-title {
    margin-bottom: 20px;
    font-size: 12px;
  }
  :global(*) {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
</style>