'use strict';

var deleteProduct = function(id, pName) {

    $.ajax({
        url: "/products/delete",
        method: "POST",
        data: {
            "id": id
        }
    }).done(function() {
        updateProductTable();
        toastr.success(`Product\ "${pName}\" removed`);
    });
}

var updateProductTable = function() {
    $.ajax({
        url: "/products/renderProductTable",
        method: "GET",
        dataType: "html"
    }).done(function(msg) {
        var tableElem = document.getElementById('productsTable');
        tableElem.innerHTML = msg;
    });
}