const body = document.body
ScrollReveal().reveal('.scroll_reveal');
ScrollReveal().reveal('.scroll_reveal li');

document.onreadystatechange = function () {
    if (document.readyState == "complete") {

        setTimeout(() => {
            body.style.transition = 'opacity 1s cubic-bezier(0, 0, 0.2, 1)';
            body.style.opacity = 1;
            // body.style.transition = 'unset';
        }, 1000);

        // loadjscssfile("fold.css", "css")
        
    }

    function loadjscssfile(filename, filetype){
        if (filetype=="js"){ //if filename is a external JavaScript file
            var fileref=document.createElement('script')
            fileref.setAttribute("type","text/javascript")
            fileref.setAttribute("src", filename)
        }
        else if (filetype=="css"){ //if filename is an external CSS file
            var fileref=document.createElement("link")
            fileref.setAttribute("rel", "stylesheet")
            fileref.setAttribute("type", "text/css")
            fileref.setAttribute("href", filename)
        }
        if (typeof fileref!="undefined") {
            document.getElementsByTagName("head")[0].appendChild(fileref)
        }
    }
    
    
}
