const btn_login = document.querySelector(".login_btn");
const btn_cadastro = document.querySelector(".cadastrar_btn");
const modal_login = document.getElementById("modal_login");
const modal_cadastrar = document.getElementById("modal_cadastrar");
const btn_card = document.getElementById("btn-card");
const modal_card = document.getElementById("item-card");
const btn_fechar = document.getElementById("btn_fechar");
const submit_login = document.getElementById("submit_login");

 async function chamarAPI(){
    const EMAIL = document.getElementById("email")
    const PASS = document.getElementById("password")
    const URL = `http://localhost/Ecommerce_SNKRS/app/controller/controller_login.php?email=${encodeURIComponent(EMAIL.value)}&password=${encodeURIComponent(PASS.value)}`;
    const RESPONSE = await fetch(URL);
    const DATA = await RESPONSE.json()
    console.log(DATA)
}

submit_login.addEventListener("click",()=>{
    chamarAPI();
})

btn_login.addEventListener("click", ()=>{
    modal_login.showModal();
})

btn_card.addEventListener("click", ()=>{
    modal_card.showModal();
})

btn_cadastro.addEventListener("click", ()=>{
    modal_cadastrar.showModal();
})

btn_fechar.addEventListener("click", ()=>{
    modal_login.close();
})
