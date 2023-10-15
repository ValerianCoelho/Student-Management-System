<script>
    export let date;
    export let text;
  </script>
  
  <div class="notice-data">
    <div class="date bold">{date}</div>
    <div class="text bold">{text}</div>
  </div>
  
  <style>
    @import '../../styles.css';
    .notice-data {
      background-color: rgba(205, 205, 205, 0.20);
      display: inline-block;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid rgba(0, 0, 0, .2);
      white-space: nowrap;
    }
    .date {
      margin-bottom: 20px;
    }
  </style>