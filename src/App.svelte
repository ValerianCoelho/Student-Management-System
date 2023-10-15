<script>
  import { onMount } from 'svelte';

  // Import your components
  import Home from "./lib/Pages/Home.svelte";
  import Marks from "./lib/Pages/Marks.svelte";
  import Attendance from "./lib/Pages/Attendance.svelte";
  import Assignments from "./lib/Pages/Assignments.svelte";
  import Timetable from "./lib/Pages/Timetable.svelte";

  let currentTab = 'Home'; // Default tab

  // Function to change the active tab
  function changeTab(tabName) {
    currentTab = tabName;
  }

  onMount(() => {
    // Initialize with the default tab
    changeTab(currentTab);
  });
</script>

<div class="side-panel">
  <!-- Create tab buttons -->
  <button on:click={() => changeTab('Home')}>Home</button>
  <button on:click={() => changeTab('Marks')}>Marks</button>
  <button on:click={() => changeTab('Attendance')}>Attendance</button>
  <button on:click={() => changeTab('Assignments')}>Assignments</button>
  <button on:click={() => changeTab('Timetable')}>Timetable</button>
</div>

<main>
  {#if currentTab === 'Home'}
    <Home />
  {/if}
  {#if currentTab === 'Marks'}
    <Marks />
  {/if}
  {#if currentTab === 'Attendance'}
    <Attendance />
  {/if}
  {#if currentTab === 'Assignments'}
    <Assignments />
  {/if}
  {#if currentTab === 'Timetable'}
    <Timetable />
  {/if}
</main>

<style>
  .side-panel {
    width: 200px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
    border: 1px solid rgba(0, 0, 0, .2);
  }

  .side-panel button {
    padding: 10px;
    border: none;
    text-align: center;
    background-color: white;
  }

  .side-panel button:hover {
    font-weight: 600;
  }

  main {
    margin-left: 200px; /* Adjust for the side panel width */
  }
</style>
