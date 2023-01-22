let libelle = document.getElementById('libelle_produit')
let quantite = document.getElementById('quantite_produit')
let price = document.getElementById('price_produit')
let image = document.getElementById('img_produit')

let libelle_error = document.getElementById('libelle_produit_error')
let quantite_error = document.getElementById('quantite_produit_error')
let price_error = document.getElementById('price_produit_error')
let image_error = document.getElementById('img_produit_error')

let libelle2 = document.getElementById('libelle_produit2')
let quantite2 = document.getElementById('quantite_produit2')
let price2 = document.getElementById('price_produit2')
let image2 = document.getElementById('img_produit2')

let libelle_error2 = document.getElementById('libelle_produit_error2')
let quantite_error2 = document.getElementById('quantite_produit_error2')
let price_error2 = document.getElementById('price_produit_error2')
let image_error2 = document.getElementById('img_produit_error2')
let form = document.getElementById('form')
let form2 = document.getElementById('form2')

// const number = /^\d+.?\d*$/
form.addEventListener('submit' , e => {
    e.preventDefault()
    if(validatelibelle(libelle ,libelle_error)  &&  validatequantite(quantite , quantite_error) &&  validateprice(price ,price_error) && validateimage(image , image_error)) {
       
        form.submit()

    } 
})

form2.addEventListener('submit' , e => {
    e.preventDefault()
    if(validatelibelle(libelle2 ,libelle_error2)  &&  validatequantite(quantite2 , quantite_error2) &&  validateprice(price2 ,price_error2) && validateimage(image2 , image_error2)) {
        console.log("TEST fFFFF")
        form2.submit()

    } 
})

function validatelibelle(libelle ,libelle_error) {
    if(libelle.value=== '') {
        libelle_error.innerHTML = 'libelle must be filled in'
       libelle.classList.add('error')
      libelle.classList.remove('success')
      return false;
    } else {
        libelle_error.innerHTML = ''
        libelle.classList.add('success')
        libelle.classList.remove('error')
        return true;
    }
}

function validatequantite(quantite , quantite_error) {
    if(quantite.value === '') {
        quantite_error.innerHTML = 'quantite must be filled in'
        quantite.classList.add('error')
        quantite.classList.remove('success')
        return false;
    } else {
        quantite_error.innerHTML = ''
        quantite.classList.add('success')
        quantite.classList.remove('error')
        return true;

    }
}

function validateimage(image , image_error) {
    if(image.value === '') {
        image_error.innerHTML = 'image must be filled in'
        image.classList.add('error')
        image.classList.remove('success')
        return false;
    } else {
        image_error.innerHTML = ''
        image.classList.add('success')
        image.classList.remove('error')
        return true;

    }
}


function validateprice(price, price_error) {
    if(price.value === '') {
        price_error.innerHTML = 'price must be filled in'
        price.classList.add('error')
        price.classList.remove('success')
        return false;
    } else {
        price_error.innerHTML = ''
        price.classList.add('success')
        price.classList.remove('error')
        return true;

    }
}

//::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
function validatelibelle(libelle2 ,libelle_error2) {
    if(libelle2.value=== '') {
        libelle_error2.innerHTML = 'libelle must be filled in'
       libelle2.classList.add('error')
      libelle2.classList.remove('success')
      return false;
    } else {
        libelle_error2.innerHTML = ''
        libelle2.classList.add('success')
        libelle2.classList.remove('error')
        return true;
    }
}

function validatequantite(quantite2 , quantite_error2) {
    if(quantite2.value === '') {
        quantite_error2.innerHTML = 'quantite must be filled in'
        quantite2.classList.add('error')
        quantite2.classList.remove('success')
        return false;
    } else {
        quantite_error2.innerHTML = ''
        quantite2.classList.add('success')
        quantite2.classList.remove('error')
        return true;

    }
}

function validateimage(image2 , image_error2) {
    if(image2.value === '') {
        image_error2.innerHTML = 'image must be filled in'
        image2.classList.add('error')
        image2.classList.remove('success')
        return false;
    } else {
        image_error2.innerHTML = ''
        image2.classList.add('success')
        image2.classList.remove('error')
        return true;

    }
}


function validateprice(price, price_error) {
    if(price.value === '') {
        price_error.innerHTML = 'price must be filled in'
        price.classList.add('error')
        price.classList.remove('success')
        return false;
    } else {
        price_error.innerHTML = ''
        price.classList.add('success')
        price.classList.remove('error')
        return true;

    }
}2




// ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
//      add more products
let btn = document.getElementById('btn')
if(form.validatelibelle(libelle2 ,libelle_error2)  &&  form.validatequantite(quantite2 , quantite_error2) &&  form.validateprice(price2 ,price_error2) && form.validateimage(image2 , image_error2)) {
    btn.addEventListener("click", affiche);

function affiche() {
  form2.style.display = 'block'
}
 
}



