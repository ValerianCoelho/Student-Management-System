<script>
  import HorizontalPerformanceCard from "./lib/HorizontalPerformanceCard.svelte";
  import Lecture from "./lib/Lecture.svelte";
  import Notice from "./lib/Notice.svelte";
  import PerformanceCard from "./lib/PerformanceCard.svelte";
  import Table from "./lib/Table.svelte";
</script>

<main>
  <!-- <Lecture fromTime='9:00' toTime='10:00' subjectName='Database Management and Query Processing' className='LHM2'/>
  <PerformanceCard/>
  <HorizontalPerformanceCard completedColor='#0075FF' remainingColor='#d9e3f8' message1='24 Lectures Attended' message2='6 Lectures Missed'/>
  <Notice date='15th August 2023' text='Celebration of Independence Day'/> -->
  <Table tableData={[
    ['Subject', 'Attendance', 'Status'],
    ['DBMQ', '80%', 'Passed'],
    ['OS', '90%', 'Passed'],
    ['OOPJ', '100%', 'Passed'],
    ['Math', '75%', 'Failed'],
    ['History', '88%', 'Passed'],
    ['English', '95%', 'Passed']
]}/>

</main>

<style>
  :global(*) {  
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;
  }
</style>