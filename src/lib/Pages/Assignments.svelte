<script>
    import HorizontalPerformanceCard from '../Components/HorizontalPerformanceCard.svelte'
    import Notice from '../Components/Notice.svelte'
</script>

<div>
    <div class="title">Assignment Submissions</div>
    <HorizontalPerformanceCard 
        message1='24 Lectures Attended' 
        message2='6 Lectures Missed'
        completed=40
        completedColor='#29D2FF'
        remainingColor='rgba(41, 210, 255, 0.20)'
    />
    <div class="assignments">
        <div class="due">
            <div class="due-title">Due</div>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
        </div>
        <div class="submitted">
            <div class="submitted-title">Submitted</div>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
        </div>
    </div>
</div>

<style>
    .assignments {
        display: flex;
    }
    .due, .submitted {
        display: flex;
        flex-direction: column;
    }
</style>