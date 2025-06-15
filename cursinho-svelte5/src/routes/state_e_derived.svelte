<script lang="ts">
    import Header from "./Header.svelte";
    let name = $state("");
    let fullName = $derived(name + " Xerer")

    let status: 'OPEN' | 'CLOSED' = $state("OPEN");
    function toggle() {
        status = status === 'OPEN' ? 'CLOSED' : 'OPEN';
    }
</script>

<Header {name}/>

<h2>{fullName}</h2>

<input type="text" bind:value={name}/>

<p>The store is now {status}</p>
<button onclick={toggle}>Toggle Status</button>