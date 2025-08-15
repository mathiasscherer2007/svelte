<script lang="ts">
	import type { Task } from '../types';
	import { slide } from 'svelte/transition';

	let {
		tasks,
		toggleDone,
		removeTask
	}: {
		tasks: Task[];
		toggleDone: (task: Task) => void;
		removeTask: (id: string) => void;
	} = $props();
</script>

<section>
	{#each tasks as task}
		<article class="task-container" transition:slide>
			<label>
				<input type="checkbox" checked={task.done} onchange={() => toggleDone(task)} />
				<span class:done={task.done}>{task.title}</span>
			</label>
			<button onclick={() => removeTask(task.id)} class="outline">Remove</button>
		</article>
	{/each}
</section>

<style>
	.task-container {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.done {
		text-decoration: line-through;
	}
</style>
