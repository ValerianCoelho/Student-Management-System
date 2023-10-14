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
    }
    
    .header {
        font-weight: bold;
        background-color: rgba(0, 70, 207, 0.10);
        padding: 8px;
    }

    .data {
        border-top: 1px solid #ccc;
        padding: 8px;
    }
</style>
