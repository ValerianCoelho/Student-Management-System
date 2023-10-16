<script>
    import HorizontalPerformanceCard from '../Components/HorizontalPerformanceCard.svelte'
    import Notice from '../Components/Notice.svelte'
</script>

<div class="assignments-page">
    <div class="title header-text bolder">Assignment Submissions</div>
    <HorizontalPerformanceCard 
        message1='10 Assignments Submitted' 
        message2='6 Left to Submit'
        completed=40
        completedColor='#29D2FF'
        remainingColor='rgba(41, 210, 255, 0.20)'
    />
    <div class="assignments">
        <div class="due">
            <div class="due-title bolder" style:color="var(--primary-color)">Due</div>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 3'/>
        </div>
        <div class="submitted bolder">
            <div class="submitted-title">Submitted</div>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
            <Notice date='19th November 2023' text='Operation Systems Assignment 2'/>
        </div>
    </div>
</div>

<style>
    @import '../../styles.css';
    .assignments-page {
        padding: 30px;
    }
    .title {
        margin-bottom: 30px;
    }
    .assignments {
        display: flex;
        margin-top: 50px;
        display: flex;
        gap: 20px;
    }
    .due, .submitted {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
    }
</style>