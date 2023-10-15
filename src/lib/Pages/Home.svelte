<script>
  import PerformanceCard from "../Components/PerformanceCard.svelte";
  import Lecture from "../Components/Lecture.svelte";
  import Notice from "../Components/Notice.svelte"

    let name = 'Anthony'
</script>

<div class="home">
    <div class="title header-text bolder">Welcome, {name}</div>
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
    <div class="timetable-section">
        <div class="timetable-title header-text bold">Timetable</div>
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
    <div class="notices-section">
        <div class="notice-title header-text bold">Notices</div>
        <div class="notices">
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
            <Notice date='15th August 2023' text='Celebration of Independence Day'/>
        </div>
    </div>
</div>

<style>
    @import '../../styles.css';

    .home {
        padding: 30px;
    }
    .performance-cards {
        margin: 40px 0;
        display: flex;
        gap: 30px;
    }
    .timetable-title, .notice-title {
        margin: 20px 0;
    }
    .lectures, .notices {
        display: flex;
        gap: 20px;
    }
</style>