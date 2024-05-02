
function desabledSelect(checkboxId, selectId) {
    var checkbox = document.getElementById(checkboxId);
    var select = document.getElementById(selectId);

    if (checkbox && select) {
        // Define a função a ser executada quando o estado do checkbox mudar
        function updateSelectState() {
            select.disabled = checkbox.checked;
        }

        // Atualiza o estado inicial do select com base no estado inicial do checkbox
        updateSelectState();

        // Adiciona um ouvinte de evento ao checkbox para atualizar o estado do select
        checkbox.addEventListener('change', updateSelectState);
    } else {
        console.error('Elementos não encontrados com IDs fornecidos:', checkboxId, selectId);
    }
}

// function mostrarSenha() {
//     var senha = document.getElementById('senha')
//     var iconeSenha = document.getElementById('icone-senha')

//     if (senha.type === 'password') {
//         senha.setAttribute('type', 'text')
//         iconeSenha.classList.replace('bi-eye-fill','bi-eye-slash-fill')
//     } else {
//         senha.setAttribute('type', 'password')
//         iconeSenha.classList.replace('bi-eye-fill','bi-eye-fill')
//     }
// }

