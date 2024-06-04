var contorno_lupa = document.getElementsByClassName("contorno-lupa")[0]
contorno_lupa.addEventListener("mouseenter", function(){
    this.classList.add("shadow")
})
contorno_lupa.addEventListener("mouseleave", function(){
    this.classList.remove("shadow")
})

var aco = document.getElementsByClassName("aco")[0]
aco.addEventListener("mouseenter", function(){
    aco.classList.add("alteratedBackground")
});

aco.addEventListener("mouseleave", function(){
    aco.classList.remove("alteratedBackground")
});

var exp = document.getElementsByClassName("exp")[0]
exp.addEventListener("mouseenter", function(){
    exp.classList.add("alteratedBackground")
});
exp.addEventListener("mouseleave", function(){
    exp.classList.remove("alteratedBackground")
});

function abrirModal()
{
    const modal = document.getElementById("ijanela-modal");
    modal.classList.add("abrir");

    modal.addEventListener("click", (e) => {
        if(e.target.id == "janela-modal" || e.target.id == "fechar")
        {
            modal.classList.remove("abrir");
            localStorage.fechamoldal = "ijanela-modal";
        }
    });
}

function mouseOverIcon()
{

}

const box = document.getElementById("profileBox");
const bt = document.getElementById("botao");
var inserido = false;

function openBox()
{
    switch (inserido) {
        case false:
            box.classList.add("exibir");
            inserido = true;
            break;
        case true:
            box.classList.remove("exibir");
            inserido = false;
        default:
            break;
    }
}
