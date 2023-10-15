<script>
  export let fromTime;
  export let toTime;
  export let subjectName;
  export let className;
</script>

<div class="lecture-data bold">
  <div class="lecture-time" style:color="var(--primary-color)">{fromTime} a.m - {toTime} a.m</div>
  <div class="subject-name">{subjectName}</div>
  <div class="class-name gray-color">{className}</div>
</div>

<style>
  @import '../../styles.css';
  .lecture-data {
    background-color: #e6edfb;
    display: inline-block;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid rgba(0, 0, 0, .2);
    white-space: nowrap;
  }
  .lecture-time {
    margin-bottom: 20px;
  }
  .subject-name {
    margin-bottom: 5px;
  }
  .class-name {
    font-size: 14px;
  }
</style>