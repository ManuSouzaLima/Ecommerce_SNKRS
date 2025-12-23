const btn_login = document.querySelector(".login_btn");
const btn_cadastro = document.querySelector(".cadastrar_btn");
const modal_login = document.getElementById("modal_login");
const modal_cadastrar = document.getElementById("modal_cadastrar");
const btn_card = document.getElementById("btn-card");
const modal_card = document.getElementById("item-card");
const btn_fechar = document.getElementById("btn_fechar");
const submit_login = document.getElementById("submit_login");
const input_email = document.getElementById("email");
const input_password = document.getElementById("password"); 

 async function chamarAPI(){
    const EMAIL = document.getElementById("email")
    const PASS = document.getElementById("password")
    const URL = `http://localhost/Ecommerce_SNKRS/app/controller/controller_login.php?email=${encodeURIComponent(EMAIL.value)}&password=${encodeURIComponent(PASS.value)}`;
    const RESPONSE = await fetch(URL);
    const DATA = await RESPONSE.json()
    const STATUS_USER = DATA[0].user;
    return(STATUS_USER)
}



submit_login.addEventListener("click", async()=>{
    const response_api = await chamarAPI();

    if(response_api == "false"){
        const alert_message = document.getElementById("alert_message");
        const message = document.createElement('p');
        alert_message.innerHTML = "";
        
        message.textContent = "Login ou senha invalidos";
        message.classList.add("text_error");
        alert_message.appendChild(message);

        input_email.classList.add("input_error");
        input_password.classList.add("input_error");
    }
    else{
        alert("deu bom")
    }
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
