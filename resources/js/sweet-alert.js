document.addEventListener("DOMContentLoaded", ()=>{
    document.querySelectorAll(".delete-autor").forEach(button => {
        button.addEventListener("click",loadConfirmacionEliminarAutor)
    });
    document.querySelectorAll(".delete-libro").forEach(button => {
        button.addEventListener("click",loadConfirmacionEliminarLibro)
    });
    
    function loadConfirmacionEliminarAutor(e){
        e.preventDefault();
        let url = e.currentTarget.href;
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Si elimina es este autor también se eliminaran todos sus libros del sistema',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, estoy seguro',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }

    function loadConfirmacionEliminarLibro(e){
        e.preventDefault();
        let url = e.currentTarget.href;
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción no se puede deshacer',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, estoy seguro',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
})