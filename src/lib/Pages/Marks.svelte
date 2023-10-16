<script>
    import Table from "../Components/Table.svelte"
</script>

<div class="marks">
    <div class="title header-text bolder">Marks Database</div>
    <Table tableData={[
    ['Subject', 'IT1', 'IT2', 'IT3', 'Final', 'Grade'],
    ['DBMQ', 20, 22, 23, 24, 'A'],
    ['OS', 18, 21, 20, 23, 'B'],
    ['OOPJ', 22, 24, 23, 25, 'A'],
    ['WT', 16, 19, 18, 20, 'C'],
    ['CL', 15, 18, 17, 19, 'C'],
    ['MTR', 19, 21, 20, 22, 'B']
]}/>

</div>

<style>
    @import '../../styles.css';
    .title {
        margin-bottom: 30px;
    }
    .marks {
        padding: 30px;
        width: 50%;
    }
</style>