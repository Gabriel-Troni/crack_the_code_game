const letras = ['a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'j', 'J', 'k', 'K', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '!', '#', '$', '%', '*', '?', 'ç', 'Ç', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

document.addEventListener("DOMContentLoaded", function () {
    var comandoInput = document.getElementById("comando");
    var codigos = {};

    for (let j = 1; j <= 11; j++) {
        let elemento = document.getElementById(`cod${j}`);
        if (elemento) {
            codigos[j] = elemento;
        }
    }

    comandoInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            var valorDigitado = comandoInput.value.trim();

            if (valorDigitado !== '') {

                // percorrer 
                for (let j = 1; j < 11; j++) {
                    var codigo = codigos[j].textContent.trim();

                    if (valorDigitado === codigo) {

                        pontos += codigo.length * 2;
                        // Pega o código de cima e passa para baixo
                        for (let k = j; k <= 10; k++) {
                            var codigoAcima = codigos[k + 1].textContent.trim();
                            codigos[k].innerText = codigoAcima || '';

                            if (!codigoAcima) {
                                codigos[k].innerText = '';
                                i = k;
                                break;
                            }
                        }

                        document.body.classList.add('shake-animation');
                        document.querySelector('.points-display').innerHTML = pontos;
                        setTimeout(function () {
                            document.body.classList.remove('shake-animation');
                        }, 1000);

                        comandoInput.value = '';
                        return;

                    }
                }

            }
        }
    });
});

function generateCode(size) {
    let code = '';
    for (let a = 0; a < size; a++) {
        code += letras[parseInt(Math.random() * letras.length)];
    }
    return code;
}


let pontos = 0;
let i = 1;

const saveMatch = (points)=>{

    if(points != null){

        let sendData = new FormData

        sendData.append('points', points);

        fetch('./src/save_match.php', {
            method: "POST", 
            body: sendData, 
        }).then((res)=>{}
        ).then((res)=> {window.location.reload()});
    }
}
function populateDiv() {
    if (i <= 11) {
        if (i == 11) {
            alert(`Game Over, você fez ${pontos}`);
            saveMatch(pontos);
            
        }
        let div = document.getElementById(`cod${i}`);
        if (div.innerHTML.trim() === '') {
            let code = generateCode(Math.floor((Math.random() * (4 + 1)) + 8));
            div.innerHTML = code;
        }
        i++;

        setTimeout(populateDiv, Math.floor((Math.random() * 1000) + 5000));

    }
}
populateDiv();