// forms
const modalElementLogin = document.getElementById('loginForm')
const modalElementReg = document.getElementById('registerForm')
// buttons
const openBtn = document.getElementById('login')
const logBtn = document.getElementById('logButton')
const regBtn = document.getElementById('regButton')

const closeBtnLog = document.getElementById('close_btnLog')
const closeBtnReg = document.getElementById('close_btnReg')

openBtn.addEventListener('click', () => {
	modalElementLogin.showModal()
})

closeBtnLog.addEventListener('click', () => {
	modalElementLogin.close()
})
closeBtnReg.addEventListener('click', () => {
	modalElementReg.close()
})

regBtn.addEventListener('click', () => {
	modalElementLogin.close()
	modalElementReg.showModal()
})

logBtn.addEventListener('click', () => {
	modalElementLogin.showModal()
	modalElementReg.close()
})
