<script>
    let completed = '10%';
</script>

<div class="donut-chart">
    <div class="outer">
        <div class="inner"></div>
    </div>
</div>

<style>
    .outer {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background: conic-gradient(#0075FF 90%, #d9e3f8 90%);
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