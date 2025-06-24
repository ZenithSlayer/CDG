<form action="https://script.google.com/macros/s/AKfycbwK5xzdCQqwEuCjNGlKzgoJG7E-Z4trIKDPcQV6ec4B7MQBjesaaCbqjOP8hnf03k_r1g/exec" method="post" name="formContato">
    <input type="text" name="nome" placeholder="Nome*" required>
    <input type="number" name="numero" placeholder="Telefone">
    <input type="email" name="email" placeholder="Email*" required>
    <textarea name="messagem" rows="7" placeholder="Sua mensagem*" required></textarea>
    <input type="submit" value="Enviar a mensagem" id="submit">
</form>

<script>
    document.querySelectorAll('a.NavLink').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    const scriptURL = 'https://script.google.com/macros/s/AKfycbwK5xzdCQqwEuCjNGlKzgoJG7E-Z4trIKDPcQV6ec4B7MQBjesaaCbqjOP8hnf03k_r1g/exec'

    const form = document.forms['formContato']

    form.addEventListener('submit', e => {

        e.preventDefault()

        fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
            .then(response => alert("Sua mensaguem foi enviada com sucesso"))
            .then(() => {
                window.location.reload();
            })
            .catch(error => console.error('Error!', error.message))
    })
</script>