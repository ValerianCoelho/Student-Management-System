<script>
    import HorizontalPerformanceCard from '../Components/HorizontalPerformanceCard.svelte'
    import Table from '../Components/Table.svelte';
</script>

<div>
    <div class="title">Attendance</div>
    <HorizontalPerformanceCard
        message1='24 Lectures Attended' 
        message2='6 Lectures Missed'
        completed=90
        completedColor='#9C2EF2'
        remainingColor='rgba(156, 46, 242, 0.20)'
    />
    <div class="attendance-title">Subject-Wise Attendance</div>
    <Table tableData={
        [['Subject', 'Attendance'],
        ['DBMQ', '80%'],
        ['OS', '90%'],
        ['OOPJ', '100%'],
        ['WT', '70%'],
        ['CL', '90%'],
        ['MTR', '80%'],]
    }/>
</div>

<style>

</style>