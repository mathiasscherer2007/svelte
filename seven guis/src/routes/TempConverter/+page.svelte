<!-- JS -->
<script>

class Temperature {
    #valueC = $state(0);
    #valueF = $state(0);
    #valueK = $state(0);

    get valueC() {
        return this.#valueC;
    }
    set valueC(c) {
        this.#valueC = c;
        this.#valueF = c * (9/5) + 32;
        this.#valueK = c + 273.15;
    }

    get valueF() {
        return this.#valueF;
    }
    set valueF(f) {
        this.#valueF = f;
        this.#valueC = (f - 32) * (5/9);
        this.#valueK = (f - 32) * (5/9) + 273.15;
    }

    get valueK() {
        return this.#valueK;
    }
    set valueK(k) {
        this.#valueK = k;
        this.#valueC = k - 273.15;
        this.#valueF = (k - 273.15) * (9/5) + 32;
    }
}

const temp = new Temperature();

</script>

<!-- HTML -->
<title>Temperature Converter</title>

<div class="container">
        <div class="center">
        <section>
            <label>Celsius (°C)
                <input type="number" id="Celcius" bind:value={temp.valueC}>
            </label>
        </section>
        <p>=</p>
        <section>
            <label>Fahrenheit (°F)
                <input type="number" id="Fahrenheit" bind:value={temp.valueF}>
            </label>
        </section>
        <p>=</p>
        <section>
            <label>Kelvin (K)
                <input type="number" id="Kelvin" bind:value={temp.valueK}>
            </label>
        </section>
    </div>
</div>

<!-- CSS -->
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: white;
    }

    .container{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .center {
        background-color: rgb(28, 24, 24);
        border: 1px solid orangered;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(255, 68, 0, 0.5);
    }

    p {
        width: 100%;
        text-align: center;
        margin: 10px 0px;
    }

    label {
        color: orangered;
    }

    input {
        color: black;
        padding: 1px;
        width: 100%;
    }
</style>