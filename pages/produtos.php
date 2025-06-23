<div class="store">
    <video src="imagens/videos/video1.mp4" autoplay loop></video>

    <div class="bv" data-aos="flip-up" data-aos-duration="1000">
        <span>Bem vindo a nossa loja</span>
    </div>

    <div class="cookies">
        <li data-aos="fade-up">
            <div class="cookietext">
                <img class="cookie" src="imagens\cookies\cookie-amen.png">
                <p class="title">Amendoado</p>
                <div class="buttons">
                    <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('AM')"></i>
                    <h1 id="AM">0</h1>
                    <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('AM')"></i>
                </div>
            </div>
            <div class="text">
                <p>Um cookie dourado e crocante nas bordas, com o centro macio e levemente amanteigado. Generosos pedaços de amêndoas torradas conferem uma textura marcante e um sabor levemente tostado, complementado por notas sutis de baunilha e caramelo. Ideal para quem busca um toque sofisticado no clássico cookie.</p>
            </div>
        </li>
        <li data-aos="fade-up">
            <div class="cookietext">
                <img class="cookie" src="imagens\cookies\cookie-baunilha.png">
                <p class="title">Baunilha</p>
                <div class="buttons">
                    <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('BA')"></i>
                    <h1 id="BA">0</h1>
                    <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('BA')"></i>
                </div>
            </div>
            <div class="text">
                <p>Delicado e reconfortante, esse cookie é feito com extrato puro de baunilha e uma massa amanteigada que derrete na boca. Sua textura é equilibrada: crocante por fora, macio por dentro. Perfeito para acompanhar um café ou chá, trazendo aquele sabor clássico e acolhedor da infância.</p>
            </div>
        </li>
        <li data-aos="fade-up">
            <div class="cookietext">
                <img class="cookie" src="imagens\cookies\cookie-redvel.png">
                <p class="title">Red Velvet</p>
                <div class="buttons">
                    <i id="pmbutton" class='fas fa-minus fa-2xl' onclick="minus1('RV')"></i>
                    <h1 id="RV">0</h1>
                    <i id="pmbutton" class="fa-solid fa-plus fa-2xl" onclick="plus1('RV')"></i>
                </div>
            </div>
            <div class="text">
                <p>Com sua cor vibrante e irresistível, o cookie red velvet combina a leve acidez do cacau com um toque sutil de baunilha. A massa é macia e úmida, com pedaços de chocolate branco que derretem a cada mordida. Um cookie que é tão bonito quanto delicioso, ideal para momentos especiais.</p>
            </div>
        </li>
    </div>
    <div class="buy" data-aos="fade-up" ata-aos-anchor-placement="top-bottom" style="opacity: 0;">
        <div class="comp">
            <button onclick="venda()"><i class="fa-solid fa-xmark"></i></button>
            <p>finalizar o pedido</p>
        </div>
        <div class="rest">
            <button onclick="zero()"><i class="fa-solid fa-xmark"></i></button>
            <p>Resetar o pedido</p>
        </div>
    </div>
</div>


<script>
    function showRest() {
        const elements = document.querySelectorAll('.buy', );
        elements.forEach(el => {
            el.style.opacity = '1';
        });
    }

    function hideRest() {
        const elements = document.querySelectorAll('.buy');
        elements.forEach(el => {
            el.style.opacity = '0';
        });
    }

    function ifall() {
        let BA = parseInt(document.getElementById("BA").innerText);
        let AM = parseInt(document.getElementById("AM").innerText);
        let RV = parseInt(document.getElementById("RV").innerText);
        let totalco = BA + AM + RV;

        if (totalco <= 0) {
            hideRest()
        }
    }

    function plus1(id) {
        const element = document.getElementById(id);
        const current = parseInt(element.innerText, 10) || 0;
        element.innerText = current + 1;
        showRest()
    }

    function minus1(id) {
        const element = document.getElementById(id);
        if (element.innerText <= 1) {
            element.innerText = 0
            ifall()
        } else {
            element.innerText = element.innerText - 1;
        }
    }

    function zero() {
        BA.innerText = 0
        AM.innerText = 0
        RV.innerText = 0
        hideRest()
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
            mensagem += BA + "%20Cookies%20de%20baunilha%0a";
        }
        if (AM > 0) {
            mensagem += AM + "%20Cookies%20Amendoados%0a";
        }
        if (RV > 0) {
            mensagem += RV + "%20Cookies%20de%20Red%20Velvet";
        }

        if (totalco > 0) {
            window.open(mensagem)
        } else {
            console.log('asdfa')
        }
    }
</script>