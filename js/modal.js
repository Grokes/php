const modalElement = document.getElementById('loginForm')

const openBtn = document.getElementById('btn')

const closeBtn = document.getElementById('close_btn')

openBtn.addEventListener('click', () => {
	modalElement.showModal()
})

closeBtn.addEventListener('click', () => {
	modalElement.close()
})