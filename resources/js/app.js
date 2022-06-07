import './bootstrap';

const pseudo = document.getElementById('pseudo');
const message = document.getElementById('message');
const submit = document.getElementById('submit');
const chatDiv = document.getElementById('chat');

submit.addEventListener('click', () => {
    axios.post('/chat', {
        pseudo :pseudo.value,
        message: message.value,
    });
});

window.Echo.channel('chat')
.listen('.chat-message' , (event) =>{
    chatDiv.innerHTML += `<div class="other break-all mt-2  ml-5 rounded-bl-none float-none bg-gray-300 mr-auto rounded-2xl p-2">
    ${event.message} par <em>${event.pseudo}</em
</div>`
})