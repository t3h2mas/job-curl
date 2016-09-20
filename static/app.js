window.onload = function() {
    // this assumes a valid link
    var links = document.querySelectorAll('.resume_url .value'), i;
    for (i=0; i<links.length; i++) {
        links[i].innerHTML = links[i].innerHTML.link(links[i].innerHTML);
    }
};