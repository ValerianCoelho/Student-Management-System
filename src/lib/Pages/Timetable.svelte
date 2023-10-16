<script>
  import Lecture from "../Components/Lecture.svelte";


</script>

<div class="timetable">
    <div class="title header-text bolder">Timetable</div>
    <div class="sub-title caption-text bold gray-color">Timetable</div>
    <div class="lectures">
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Database Management and Query Processing' className='LHM2'/>
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Operating Systems' className='LHM2'/>
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Cyber Law and Intellectual Property' className='LHM2'/>
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Open Elective' className='LHM2'/>
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Database Management and Query Processing Lab' className='LHM2'/>
      <Lecture fromTime='9:00' toTime='10:00' subjectName='Artificial Intelligence' className='LHM2'/>
    </div>
</div>

<style>
  @import '../../styles.css';
  .timetable {
    padding: 30px;
  }
  .sub-title {
    margin-bottom: 30px;
  }
  .lectures {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }
</style>