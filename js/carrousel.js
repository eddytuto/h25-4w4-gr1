(function(){
    console.log ("carrousel.js")
    let hero__radio__input = document.querySelectorAll(".hero__radio__input")
    let hero__carrousel = document.querySelectorAll(".hero__carrousel")
    console.log("hero__radio__input.length = ", hero__radio__input.length)

    hero__radio__input.forEach(elm=> {
        console.log("elm.id_carrousel = ", elm.dataset.id_carrousel)
        elm.addEventListener('mousedown',function(){
            console.log(elm.dataset.id_carrousel)
            elm.classList.add('hero__carrousel--active')
        })
    })


function parcourir_carrousel(){
    hero__carrousel.forEach(img=> {
        img.classList.remove('hero__carrousel--active')
    })
}

})()