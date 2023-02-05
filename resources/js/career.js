

window.addEventListener('swal:success', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        showCancelButton: false,
        confirmButtonText: 'Okay, got it!'
    })
})

window.livewire.on('create', () => {
    $('#addNewCareer').modal('hide');
})

window.livewire.on('update', () => {
    $('#editModal').modal('hide');
})
window.addEventListener('swal:confirm', event => {
    swal.fire({
        title: event.detail.title,
        text: event.detail.text,
        icon: event.detail.type,
        showCancelButton: true,
        cancelButtonClass: 'cancel-btn',
        confirmButtonText: 'Yes, Delete it!'

    }) .then((result) => {
        if (result.isConfirmed) {
            window.livewire.emit('delete', event.detail.id);
            swal.fire({
                title: 'Success',
                text: 'Career objective deleted successfully',
                icon: 'success',
            })
        }
    });
});
