<div class="store">
    <video src="imagens/videos/video1.mp4" autoplay loop></video>

    <div class="bv" data-aos="flip-up" data-aos-duration="1000">
        <span>Bem vindo a nossa loja</span>
    </div>

    <div class="cookies">
        <li data-aos="flip-right">
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi inventore magni perferendis est quibusdam? Nisi eveniet, nobis similique deleniti libero reprehenderit ut eum mollitia laborum neque totam aspernatur. Esse, enim!</p>
            </div>
        </li>
        <li data-aos="flip-right">
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi inventore magni perferendis est quibusdam? Nisi eveniet, nobis similique deleniti libero reprehenderit ut eum mollitia laborum neque totam aspernatur. Esse, enim!</p>
            </div>
        </li>
        <li data-aos="flip-right">
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
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi inventore magni perferendis est quibusdam? Nisi eveniet, nobis similique deleniti libero reprehenderit ut eum mollitia laborum neque totam aspernatur. Esse, enim!</p>
            </div>
        </li>
    </div>
    <div class="rest" data-aos="fade-up">
        <button onclick="zero()"><i class="fa-solid fa-xmark"></i></button>
        <p>Resetar o pedido</p>
    </div>
</div>


<script>
    function showRest() {
        const elements = document.querySelectorAll('.rest');
        elements.forEach(el => {
            el.style.visibility = 'visible';
        });
    }

    function hideRest() {
        const elements = document.querySelectorAll('.rest');
        elements.forEach(el => {
            el.style.visibility = 'hidden';
        });
    }

    function ifall() {
        let BA = parseInt(document.getElementById("BA").innerText);
        let AM = parseInt(document.getElementById("AM").innerText);
        let RV = parseInt(document.getElementById("RV").innerText);
        let totalco = BA + AM + RV;

        if (totalco >= 0) {
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