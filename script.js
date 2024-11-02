// Código JavaScript para agregar funcionalidad
document.querySelectorAll('.item button').forEach(button => {
    button.addEventListener('click', () => {
        const comment = button.previousElementSibling.value;
        if (comment) {
            alert(`Comentario enviado: ${comment}`);
            button.previousElementSibling.value = ''; // Limpiar textarea
        } else {
            alert('Por favor, escribe un comentario antes de enviar.');
        }
    });
});
