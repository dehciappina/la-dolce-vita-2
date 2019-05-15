const body = document.body;

    // IF DESKTOP
if (window.matchMedia("(min-width: 130vh)").matches) {
    document.querySelector('#empada_img').style.backgroundImage = "url('assets/empada.jpg')";
    document.querySelector('#kibe_img').style.backgroundImage = "url('assets/kibe.jpg')";
    document.querySelector('#torta1_img').style.backgroundImage = "url('assets/torta1.jpg')";
    document.querySelector('#coxinha2_img').style.backgroundImage = "url('assets/coxinha.jpg')";

    document.querySelector('#brigadeiro_img').style.backgroundImage = "url('assets/brigadeiro.jpg')";
    document.querySelector('#estrela_img').style.backgroundImage = "url('assets/estrela.jpg')";
    document.querySelector('#brigadeiro2_img').style.backgroundImage = "url('assets/brigadeiro.jpg')";
    document.querySelector('#brigadeiro3_img').style.backgroundImage = "url('assets/brigadeiro.jpg')";
    document.querySelector('#brigadeiro4_img').style.backgroundImage = "url('assets/brigadeiro.jpg')";
} else {
}

document.onreadystatechange = function () {
    if (document.readyState == "complete") {
        body.style.transition = 'opacity 1s cubic-bezier(0, 0, 0.2, 1)';
        body.style.opacity = 1;
        setTimeout(() => {
            body.style.transition = 'unset';
        }, 1000);
    }
}
