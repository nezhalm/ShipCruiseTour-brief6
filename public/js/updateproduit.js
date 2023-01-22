
let libelle = document.getElementById('libelle_produit')
let quantite = document.getElementById('quantite_produit')
let price = document.getElementById('price_produit')
let image = document.getElementById('img_produit')

let libelle_error = document.getElementById('libelle_error')
let quantite_error = document.getElementById('quantite_error')
let price_error = document.getElementById('price_error')
let image_error = document.getElementById('img_error')

let form = document.getElementById('form')

// const number = /^\d+.?\d*$/
form.addEventListener('submit' , e => {
    e.preventDefault()
    if(validatelibelle(libelle ,libelle_error)  &&  validatequantite(quantite , quantite_error) &&  validateprice(price ,price_error) &&  validateprice(image ,image_error)  ) {
      form.submit()

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

