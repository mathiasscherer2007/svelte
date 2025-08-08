<!-- JS -->
<script>

class Flight{
    #ctype = $state();
    #startDate = $state();
    #returnDate = $state();

    get ctype(){
        return this.#ctype;
    }
    set ctype(t){
        this.#ctype = t;

        if (this.#ctype === "1") {
            document.getElementById("return")?.toggleAttribute("disabled", true)
            document.getElementById("enviar")?.toggleAttribute("disabled", false)
        } else {
            document.getElementById("return")?.toggleAttribute("disabled", false)
        }
    }

    get startDate(){
        return this.#startDate;
    }
    set startDate(e){
        this.#startDate = e;
        this.checkDate();
    }

    get returnDate(){
        return this.#returnDate;
    }
    set returnDate(d){
        this.#returnDate = d;
        this.checkDate();
    }

    checkDate() {
        if (this.#startDate > this.#returnDate) {
            document.getElementById("enviar")?.toggleAttribute("disabled", true)
        } else {
            document.getElementById("enviar")?.toggleAttribute("disabled", false)
        }
    }

}

let flight = new Flight();
$inspect(flight.startDate)
$inspect(flight.returnDate)

</script>

<!-- HTML -->
<title>Flight Booker</title>

<div class="container">
    <div class="center">
        <select bind:value={flight.ctype}>
            <option value="1" selected>one-way flight</option>
            <option value="2">return flight</option>
        </select>
        <input type="date" id="start" bind:value={flight.startDate}>
        <input type="date" id="return" bind:value={flight.returnDate}>
        <button id="enviar"><strong>Book</strong></button>
    </div>
</div>

<!-- CSS -->
<style>

</style>