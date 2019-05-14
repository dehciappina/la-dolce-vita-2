const body = document.body;

    // IF MOBILE
if((typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1)) {
} else {
    document.querySelector('#salgados_imgs').innerHTML = '<img src="assets/coxinha.jpg" alt=""><img src="assets/empada.jpg" alt=""><img src="assets/kibe.jpg" alt=""><img src="assets/torta1.jpg" alt=""><img src="assets/coxinha.jpg" alt="">';
    console.log('desktop')
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
