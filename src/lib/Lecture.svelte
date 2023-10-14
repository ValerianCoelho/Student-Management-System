<script>
    export let fromTime;
    export let toTime;
    export let subjectName;
    export let className;
</script>

<div class="lecture-data">
    <div class="lecture-time">{fromTime} a.m - {toTime} a.m</div>
    <div class="subject-name">{subjectName}</div>
    <div class="class-name">{className}</div>
</div>

<style>
    .lecture-data {
        background-color: #e6edfb;
        display: inline-block;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, .2);
        font-weight: 600;
    }
    .lecture-time {
        margin-bottom: 20px;
    }
</style>