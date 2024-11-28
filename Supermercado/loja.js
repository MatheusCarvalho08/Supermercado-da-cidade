if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
}

var totalAmount = "0,00"

function ready() {

    const botaoTabela = document.getElementsByClassName("botao-tabela")
    console.log(botaoTabela)
    for (var i = 0; i < botaoTabela.length; i++) {
        botaoTabela[i].addEventListener("click", removeProduct)
    }

    const quantityInputs = document.getElementsByClassName("botao-quantidade")
    for (var i = 0; i < quantityInputs.length; i++) {
        quantityInputs[i].addEventListener("change", updateTotal)
    }


    const addToCartButtons = document.getElementsByClassName("produto-botao")
    for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", addProductToCart)
    }

    const purchaseButton = document.getElementsByClassName("botao-compra")[0]
    purchaseButton.addEventListener("click", makePurchase)
}

function makePurchase() {
    if (totalAmount == "0,00") {
        alert("Seu carrinho está vazio!")
    } else {
        alert(`
        
        Obrigado pela sua compra!
        Valor do pedido: R$${totalAmount}
        Volte sempre!!

        `)
    }

    document.querySelector(".tabela tbody").innerHTML = ""
    updateTotal()

}

function checkIfInputIsNull(event) {
    if (event.target.value == "0") {
    event.target.parentElement.parentElement.remove()
    }

    updateTotal()
}

function addProductToCart(event) {
    const button = event.target
    const productInfos = button.parentElement.parentElement
    const productImage = productInfos.getElementsByClassName("produto-imagem")[0].src
    const productTitle = productInfos.getElementsByClassName("produto-titulo")[0].innerText
    const productPrice = productInfos.getElementsByClassName("produtoo-preco")[0].innerText

    const productName = document.getElementsByClassName("produto-texto-carrinho")
    for (var i = 0; i < productName.length; i++) {
        if(productName[i].innerText == productTitle) {
           productName[i].parentElement.parentElement.getElementsByClassName("botao-quantidade")[0].value++
        return
        }
    }

  let newCartProduct = document.createElement("tr")
  newCartProduct.classList.add("cart-product")

  newCartProduct.innerHTML = 
  `
  <td>
  <img src="${productImage}" alt="${productTitle}" width="100px"></td>
  <td>${productTitle}</td>
  <td>
        <span class="produto-quantidade">${productPrice}</span>
  </td>
  <td>
          <input class="botao-quantidade" type="number" value="1" min="0">
          <button class="botao-tabela" type="button">Remover</button>
  </td>
  `

  const tableBody = document.querySelector(".tabela tbody")
  tableBody.append(newCartProduct)

  updateTotal()
  console.log(newCartProduct)
  newCartProduct.getElementsByClassName("botao-quantidade")[0].addEventListener("change", checkIfInputIsNull)
  newCartProduct.getElementsByClassName("botao-tabela")[0].addEventListener("click", removeProduct)
}

function removeProduct(event){
    event.target.parentElement.parentElement.remove()
    updateTotal()
}

function updateTotal() {
    totalAmount = 0
const cartProducts = document.getElementsByClassName("cart-product")
for (var i = 0; i < cartProducts.length; i++) {
    //console.log(cartProducts[i])
    const productPrice = cartProducts[i].getElementsByClassName("produto-quantidade")[0].innerText.replace("R$", "").replace(",", ".")
    const productQuantity = cartProducts[i].getElementsByClassName("botao-quantidade")[0].value
    
    totalAmount += productPrice * productQuantity

}

totalAmount = totalAmount.toFixed(2)
totalAmount = totalAmount.replace(".", ",")
document.querySelector(".cart-total-conteiner span").innerText = "R$" + totalAmount
}

