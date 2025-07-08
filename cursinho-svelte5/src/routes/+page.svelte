<!-- JS -->
<script>
	import Header from './Header.svelte';

	let name = $state('xerer');
	let flag = false;

	let fullName = $derived('Sr. ' + name);
</script>

<!-- HTML -->
<Header {name} />

<input type="text" bind:value={name} />

<button
	type="button"
	onclick={() => {
		if (flag === false) {
			name = name.toUpperCase();
			flag = true;
		} else {
			name = name.toLowerCase();
			flag = false;
		}
	}}>Click me!</button
>

<p>{fullName}</p>

<!-- CSS -->
<style>
</style>
