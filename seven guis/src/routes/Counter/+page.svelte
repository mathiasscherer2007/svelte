<!-- JS -->
<script>
    let num = $state(0);

    function onclick(){
        num++;
    }
</script>

<!-- HTML -->
<title>Counter</title>

<div>
    <h1>{num}</h1>
    <button {onclick}>Count</button>
</div>

<!-- CSS -->
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    div{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        width: 100vw;
        height: 100vh;
    }

    button{
        padding: 5px;
        transition: box-shadow 0.5s ease-in-out;
    }

    button:hover{
        box-shadow: 0 0 5px #FF3E00;
    }

</style>