<script lang="ts">
	import favicon from '$lib/assets/favicon.svg';

	let { children } = $props();
</script>

<svelte:head>
	<link rel="icon" href={favicon} />
</svelte:head>

<nav>
	<a href="./about">
		<div class="navigation-container">bruh</div>
	</a>
</nav>

{@render children?.()}
