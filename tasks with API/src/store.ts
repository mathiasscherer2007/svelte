import { writable } from 'svelte/store';

const url = 'http://localhost:8000/';
const result = writable(null);

async function getData() {
	try {
		const response = await fetch(url);
		if (!response.ok) {
			throw new Error(`Response status: ${response.status}`);
		}
		const data = await response.json();
		result.set(data);
	} catch (error) {
		console.error(error.message);
	}
}

getData();

export { result };
