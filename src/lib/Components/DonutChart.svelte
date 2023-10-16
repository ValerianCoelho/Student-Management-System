<script>
  export let size;
  export let completed;
  export let completedColor;
  export let remainingColor;
</script>

<div class="donut-chart">
  <div class="outer"  style:width="{size}px" style:height="{size}px" style:background="conic-gradient({completedColor} {completed}%, {remainingColor} {completed}%)" style:border-radius="50%">
    <div class="inner">
      <div class="percentage-text">{completed}%</div>
    </div>
  </div>
</div>

<style>
  .outer {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }
  .inner {
    width: 60%;
    height: 60%;
    background-color: white;
    border-radius: 50%;
  }
  .percentage-text {
    position: absolute;
    top: -2%;
    right: 8%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid rgb(209, 209, 209);
    display: inline;
    font-weight: 900;
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
    backdrop-filter: blur(10px); /* Blur effect */
    font-size: .7em;
}

</style>