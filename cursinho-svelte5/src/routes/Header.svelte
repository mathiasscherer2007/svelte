<script>
    let { name = null } = $props();
</script>

<div>
    <h1>
        {name ? name : "User"}'s Form
    </h1>
</div>
