<script>
  import Lecture from "./lib/Lecture.svelte";
  import Notice from "./lib/Notice.svelte";
  import PerformanceCard from "./lib/PerformanceCard.svelte";
</script>

<main>
  <Lecture fromTime='9:00' toTime='10:00' subjectName='Database Management and Query Processing' className='LHM2'/>
  <PerformanceCard/>
  <Notice date='15th August 2023' text='Celebration of Independence Day'/>
</main>

<style>
  :global(*) {  
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
</style>