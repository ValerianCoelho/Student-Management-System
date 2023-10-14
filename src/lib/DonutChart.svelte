<script>
  export let completed;
  export let completedColor;
  export let remainingColor;
</script>

<div class="donut-chart" style:background="conic-gradient({completedColor} {completed}%, {remainingColor} {completed}%)" style:border-radius="50%">
  <div class="outer">
    <div class="inner"></div>
  </div>
</div>

<style>
  .outer {
    width: 200px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .inner {
    width: 60%;
    height: 60%;
    background-color: white;
    border-radius: 50%;
  }
</style>