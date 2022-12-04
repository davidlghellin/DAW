function fntDeTiendas(id) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            swal("eliminado registro", {
                icon: "success",
            });
        } else {
            swal("se ha cancelado");
        }
    });
}