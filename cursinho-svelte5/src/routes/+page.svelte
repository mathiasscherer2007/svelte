<script lang="ts">
    import Header from "./Header.svelte";

    let formState = $state({
        name: "",
        birthday: "",
        step: 0,
        error: ""
    });
</script>

<main>
    <p>Step: {formState.step}</p>
    {#if formState.error}
        <p class="error">{formState.error}</p>
    {/if}
    {#if formState.step === 0}
        <div>
            <label for="name">Your name</label>
            <input type="text" id="name" bind:value={formState.name}>
        </div>
        <button onclick={() => {
            if (formState.name !== "") {
                formState.step += 1;
                formState.error = "";
            } else {
                formState.error = "Your name is empty. Write something, please.";
            }
        }}>Next</button>
    
    {:else if formState.step === 1}
        <div>
            <label for="bday">Your birthday</label>
            <input type="date" id="bday" bind:value={formState.birthday}>
        </div>
        <button onclick={() => {
            if (formState.birthday !== "") {
                formState.step += 1;
                formState.error = "";
            } else {
                formState.error = "Your birthday is empty. Write something, please.";
            }
        }}>Next</button>

    {/if}
</main>