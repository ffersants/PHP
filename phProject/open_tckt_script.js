
    title = document.getElementsByName("titulo");
    description = document.getElementsByName("descricao");
    nodeListBtn = document.querySelectorAll("button");
   
    
    for( btn of nodeListBtn ){
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            description[0].value === "" || title[0].value === "" ? emptyInput() : ticketOpened();
        })
    }
    
function ticketOpened(){
    
    Swal.fire({
        icon: 'success',
        title: 'Concluído',
        text: 'Chamado aberto com sucesso e encaminhado para a equipe responsável pelo atendimento. Em breve entraremos em contato.',
        confirmButtonExit: 'Feito'
    })  
    //ou o usuário clica em ok, enviando o formulário
    okBtn = document.getElementsByClassName("swal2-confirm swal2-styled");
    okBtn[0].addEventListener("click", () => {
        document.getElementById("ma-form").submit()
    })
    //ou ele o pop up é fechado e o formulário é enviado após 15 segundos
    setTimeout( () => {
            document.getElementById("ma-form").submit()
        }, 15000
    )
    
}

function emptyInput(){
    Swal.fire({
        icon: 'error',
        title: "Campos vazios",
        text: 'Favor preencher todos os campos do formulário.',
        confirmButtonExit: 'Ok'
    })
}