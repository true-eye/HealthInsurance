

document.getElementById("btn-get-started").addEventListener("click", function(event){
    event.preventDefault()
    document.getElementById("page-1").setAttribute("style", "display: none;");
    document.getElementById("page-2").setAttribute("style", "display: inline;");
});

document.getElementById("btn-page-2").addEventListener("click", function(event){
    event.preventDefault()
    document.getElementById("page-2").setAttribute("style", "display: none;");
    document.getElementById("page-3").setAttribute("style", "display: inline;");
});
document.getElementById("btn-page-3").addEventListener("click", function(event){
    event.preventDefault()
    document.getElementById("page-3").setAttribute("style", "display: none;");
    document.getElementById("page-4").setAttribute("style", "display: inline;");
});

document.getElementById("btn-page-4").addEventListener("click", function(event){
    event.preventDefault()
    document.getElementById("page-4").setAttribute("style", "display: none;");
    document.getElementById("div-caption").setAttribute("style", "display: none;");
    document.getElementById("page-5").setAttribute("style", "display: inline;");
});