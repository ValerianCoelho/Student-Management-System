<script>
  import PerformanceCard from "../Components/PerformanceCard.svelte";
  import Lecture from "../Components/Lecture.svelte";
  import Notice from "../Components/Notice.svelte"

    let name = 'Anthony'
</script>

<div>
    <div class="title">Welcome, {name}</div>
    <div class="performance-cards">
        <PerformanceCard
            title="Marks"
            subTitle="Internal Test 1"
            completed={50}
            completedColor="var(--donut-completed-color-1)"
            remainingColor="var(--donut-remaining-color-1)"
        />
        <PerformanceCard
            title="Attendance"
            subTitle="Semester 5"
            completed={90}
            completedColor="var(--donut-completed-color-2)"
            remainingColor="var(--donut-remaining-color-2)"
        />
        <PerformanceCard
            title="Marks"
            subTitle="Submitted"
            completed={80}
            completedColor="var(--donut-completed-color-3)"
            remainingColor="var(--donut-remaining-color-3)"
        />
    </div>
    <div class="timetable">
        <div class="timetable-title">Timetable</div>
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
        <div class="notice-title">Notices</div>
        <div class="Notices">
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
        </div>
    </div>
</div>

<style>
    @import '../../styles.css';
</style>