<script>
  import DonutChart from "./DonutChart.svelte";
</script>

<div class="performance-card">
  <h2 class="title">Marks</h2>
  <h5 class="sub-title">Internal Test 1</h5>
  <DonutChart completed=50 completedColor='#0075FF' remainingColor='#d9e3f8'/>
</div>

<style>
  .performance-card {
    border: 1px solid rgba(0, 0, 0, .2);
    display: inline-block;
    padding: 20px;
    border-radius: 10px;
  }
  .sub-title {
    color: gray;
    margin-bottom: 20px;
  }
</style>