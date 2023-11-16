const letras = ['a', 'A', 'b', 'B', 'c', 'C', 'd', 'D', 'e', 'E', 'f', 'F', 'g', 'G', 'h', 'H', 'i', 'j', 'J', 'k', 'K', 'L', 'm', 'M', 'n', 'N', 'o', 'O', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'u', 'U', 'v', 'V', 'w', 'W', 'x', 'X', 'y', 'Y', 'z', 'Z', '!', "@", '#', '$', '%', '&', '*', '(', ')', '?', '[', ']', 'â', 'ã', 'Â', 'Ã', 'ç', 'Ç', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

function generateCode(size) {
    let code = '';
    for (let i = 0; i < size; i++) {
        code += letras[parseInt(Math.random() * letras.length)];
    }
    return code;
}

console.log(generateCode(8))
