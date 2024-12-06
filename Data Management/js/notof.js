function show_add() {Command: 
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"


    }
    toastr["success"]("تم الاضافه ", "add_user")

    
}
function confirm_delete(id) {
    if (confirm('Are you sure you want to delete this user?')) {
        window.location.href = 'index.php?action=del&id=' + id;
    }
}
function edit(id) {
        window.location.href = 'edit.php?action=edit&id=' + id;
    }




function show_del() {Command: 
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": false,
      "progressBar": false,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"


    }
    toastr["error"]("تم delete ", "delete_user")

    
}