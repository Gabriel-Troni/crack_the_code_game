function validateForm() {
	var usuario = document.getElementsByName('user')[0].value
	var senha = document.getElementsByName('senha')[0].value
	var errorUsuario = document.getElementById('error-usuario')
	var errorSenha = document.getElementById('error-senha')
	var hasError = false

	if (!usuario) {
		errorUsuario.textContent = 'Por favor, preencha o campo de usuário.'
		hasError = true
	} else {
		errorUsuario.textContent = ''
	}

	if (!senha) {
		errorSenha.textContent = 'Por favor, preencha o campo de senha.'
		hasError = true
	} else {
		errorSenha.textContent = ''
	}

	return !hasError
}
