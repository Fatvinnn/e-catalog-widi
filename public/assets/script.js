document.addEventListener('DOMContentLoaded', () => {
    const chatToggle = document.querySelector('.chat-toggle');
    const chatIcons = document.querySelector('.chat-icons');

    if (!chatToggle || !chatIcons) {
        console.error('Chat toggle or icons not found!');
        return;
    }

    chatToggle.addEventListener('click', () => {
        console.log('Chat toggle clicked!');
        chatIcons.classList.toggle('active');
    });
});