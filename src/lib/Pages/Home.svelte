<script>
  import PerformanceCard from "../Components/PerformanceCard.svelte";
  import Lecture from "../Components/Lecture.svelte";
  import Notice from "../Components/Notice.svelte"

    let name = 'Anthony'
</script>

<div>
    <div class="title">Welcome, {name}</div>
    <div class="performance-cards">
        <PerformanceCard/>
        <PerformanceCard/>
        <PerformanceCard/>
    </div>
    <div class="timetable">
        <div class="title">Timetable</div>
        <div class="lectures">
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
            <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
        </div>
    </div>
    <div class="notices">
        <div class="title">Notices</div>
        <div class="Notices">
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
        </div>
    </div>
</div>

<style>

</style>