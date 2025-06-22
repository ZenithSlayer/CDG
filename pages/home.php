<div class="store">
    <div class="cookies">
        <li>
            <img class="cookie" src="imagens\cookies\cookie-baunilha.png">
            <p class="title">Baunilha</p>
            <div class="buttons">
                <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('BA')"></i>
                <h1 id="BA">0</h1>
                <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('BA')"></i>
            </div>
            <button type="button" onclick="zero('BA')">aaaaaaa</button>

        </li>
        <li>
            <img class="cookie" src="imagens\cookies\cookie-amen.png">
            <p class="title">Amendoçado</p>
            <div class="buttons">
                <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('AM')" style="display: hidden;"></i>
                <h1 id="AM">0</h1>
                <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('AM')"></i>
            </div>
            <button type="button" onclick="zero('AM')">aaaaaaa</button>

        </li>
        <li>
            <img class="cookie" src="imagens\cookies\cookie-redvel.png">
            <p class="title">Red Velvet</p>
            <div class="buttons">
                <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('RV'),showitem('RV')"></i>
                <h1 id="RV">0</h1>
                <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('RV'),showitem('RV')"></i>
            </div>
            <button id="RVrebu" type="button" onclick="zero('RV'),showitem('RV')">
                <i class="fa-solid fa-xmark fa-xl"></i>
                <p>Resetar</p>
            </button>
        </li>
    </div>
</div>

<input class="button" type="button" id="button" onclick="venda()" value="aaaaaaaa">

<script>
    function showitem(id) {
        const element = document.getElementById(id);
        const rebuid = id + "rebu";
        const rebuElement = document.getElementById(rebuid);

        if (parseInt(element.innerText) === 0) {
            rebuElement.style.display = "none";
        } else {
            rebuElement.style.display = "flex";
        }
    }

    function plus1(id) {
        const element = document.getElementById(id);
        const current = parseInt(element.innerText, 10) || 0;
        element.innerText = current + 1;
    }

    function minus1(id) {
        const element = document.getElementById(id);
        if (element.innerText < 1) {
            element.innerText = 0
        } else {
            element.innerText = element.innerText - 1;
        }
    }

    function zero(id) {
        const element = document.getElementById(id);
        element.innerText = 0
    }

    function venda() {
        let BA = parseInt(document.getElementById("BA").innerText);
        let AM = parseInt(document.getElementById("AM").innerText);
        let RV = parseInt(document.getElementById("RV").innerText);
        let mensagem = "https://wa.me/" + 44984146362 + "?text=Bom%20dia,%20Desejo%20colocar%20um%20pedido%20de%0a";

        let totalco = BA + AM + RV;
        if (totalco % 2 === 0) {
            let totalpc = totalco * 6;
        } else {
            totalpc = (totalco * 6) + 2;
        }


        if (BA > 0) {
            mensagem += BA + "%0aCookies%0ade%0abaunilha%20";
        }
        if (AM > 0) {
            mensagem += AM + "%0aCookies%0aAmendoçados%20";
        }
        if (RV > 0) {
            mensagem += RV + "%0aCookies%0ade%0aRed%0aVelvet";
        }

        window.open(mensagem)
    }
</script>