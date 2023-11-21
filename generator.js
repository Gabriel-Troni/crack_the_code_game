const letras = ['a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'j', 'J', 'k', 'K', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '!', '#', '$', '%', '*', '?', 'ç', 'Ç', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

//pega o input
document.addEventListener("DOMContentLoaded", function () {
    var comandoInput = document.getElementById("comando");
    var codigos = {};
    if (i == 12) {
        alert("GAME OVER")
    }

    for (let j = 1; j <= 10; j++) {
        codigos[j] = document.getElementById(`cod${j}`);
    }
    comandoInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            var valorDigitado = comandoInput.value;

            for (let j = 1; j <= 10; j++) {

                var codigo = codigos[j].textContent.trim();
                if (valorDigitado === codigo) {
                    pontos += codigo.length * 2;
                    for (let k = j; k <= 10; k++) {
                        var codigoAcima = codigos[k + 1].textContent.trim();
                        codigos[k].innerText = codigoAcima || '';

                        if (!codigoAcima) {
                            break;
                        }
                    }

                    i = j;
                    document.body.classList.add('shake-animation');
                    document.querySelector('.points-display').innerHTML = pontos;
                    
                    comandoInput.value = '';
                }
                // reseta a animação para ela aparecer mais vezes
                setTimeout(function () {
                    document.body.classList.remove('shake-animation');
                }, 1000)
            }
        }
    });
});

/* VERSÃO MENOS OPTIMIZADA
document.addEventListener("DOMContentLoaded", function () {
    var comandoInput = document.getElementById("comando");
    comandoInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            var valorDigitado = comandoInput.value;
            for (let j = 1; j <= i; j++) {
                var codigo = document.getElementById(`cod${j}`).innerHTML;
                if (valorDigitado === codigo) {
                    alert("boa")
                    // se digitar o valor igual, todos os códigos acima vão para baixo, como uma pilha
                    for (let k = j; k <= 10; k++) {
                        var codigoAcima = document.getElementById(`cod${k + 1}`).textContent.trim();
                        if (codigoAcima === '') {
                            document.getElementById(`cod${k}`).innerText = ''; //se não tiver nada na div acima, só esvazia a div e sai do loop
                            break;
                        } else {
                            document.getElementById(`cod${k}`).innerText = codigoAcima;
                        }
                    }
                    //reseta para que o as divs sejam populadas desde o inicio
                    i = 1;
                }
            }
        }
    });
});*/

function generateCode(size) {
    let code = '';
    for (let i = 0; i < size; i++) {
        code += letras[parseInt(Math.random() * letras.length)];
    }
    return code;
}
let pontos = 0;
let i = 1;
function populateDiv() {
    if (i <= 11) {
        if (i == 11) {
            alert(`Game Over, você fez ${pontos}`);
            window.location.reload();
            return
        }
        let div = document.getElementById(`cod${i}`);
        if (div.innerHTML.trim() === '') {
            let code = generateCode(Math.floor((Math.random() * (4 + 1)) + 8));
            div.innerHTML = code;
        }
        i++;
        setTimeout(populateDiv, Math.floor((Math.random() * 1000) + 3000));

    }
}

populateDiv();
