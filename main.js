const body = document.body


document.onreadystatechange = function () {
    if (document.readyState == "complete") {

        body.style.transition = 'opacity 1s cubic-bezier(0, 0, 0.2, 1)';
        body.style.opacity = 1;
        setTimeout(() => {
            body.style.transition = 'unset';
        }, 1000);
    }
}
