const btn_login = document.querySelector(".login_btn")
const btn_cadastro = document.querySelector(".cadastrar_btn")
const modal_login = document.getElementById("modal_login")
const modal_cadastrar = document.getElementById("modal_cadastrar")
const btn_card = document.getElementById("btn-card")
const modal_card = document.getElementById("item-card")

btn_login.addEventListener("click", ()=>{
    modal_login.showModal();
})

btn_card.addEventListener("click", ()=>{
    modal_card.showModal();
})

btn_cadastro.addEventListener("click", ()=>{
    modal_cadastrar.showModal();
})

   