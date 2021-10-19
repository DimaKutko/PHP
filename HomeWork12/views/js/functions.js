'use strict';

var deleteProduct = function(id, pName) {

    $.ajax({
        url: "/products/delete",
        method: "POST",
        data: { id: id },
        dataType: "html"
    }).done(function(msg) {
        toastr.success(`Product\ "${pName}\" removed`);
        var tableElem = document.getElementById('productsTable');
        tableElem.innerHTML = msg;
    });
}