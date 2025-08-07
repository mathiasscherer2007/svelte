<!-- JS -->
<script>
	// Componentes começam com letra maiúscula
	// Páginas começam com um +

	let { name, fake_name = null } = $props();
</script>

<!-- HTML -->
<h1>Hello {name}</h1>

<!-- CSS -->
<style>
	h1 {
		color: red;
	}

	*::before {
		content: '> ';
	}
</style>
