<script>
    export let tableData;
</script>

<table class="table">
    {#each tableData as row, rowIndex}
        <tr>
            {#each row as cell}
                {#if rowIndex == 0}
                    <th class="header">{cell}</th>
                {:else}
                    <td class="data">{cell}</td>
                {/if}
            {/each}
        </tr>
    {/each}
</table>

<style>
    .table {
        border-collapse: collapse;
        outline: 1px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
        text-align: left;
        font-size: 13px;
        padding-left: 30px;
        line-height: 25px;
    }
    
    .header {
        font-weight: 900;
        color: gray;
        background-color: rgba(0, 70, 207, 0.10);
        padding: 8px;
        padding-left: 20px;
    }

    .data {
        border-top: 1px solid #ccc;
        padding: 8px;
        font-weight: 700;
        padding-left: 20px;
    }
</style>
