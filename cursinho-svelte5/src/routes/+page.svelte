<!-- JS -->
<script>
	import Header from './Header.svelte';

	let formState = $state({
		name: "",
		birthday: "",
		step: 0,
		error: ""
	});
</script>

<!-- HTML -->
<main>
	<p>Step: {formState.step}</p>
</main>


<!-- CSS -->