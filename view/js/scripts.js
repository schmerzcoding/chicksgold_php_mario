/*!
 * Start Bootstrap - Full Width Pics v5.0.5 (https://startbootstrap.com/template/full-width-pics)
 * Copyright 2013-2022 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-full-width-pics/blob/master/LICENSE)
 */
// This file is intentionally blank
// Use this file to add JavaScript to your project
var container = document.getElementById('container');

var ver_tabla_cuentas = document.getElementById("accounts_btn");
var ver_tabla_ordenes = document.getElementById("orders_btn");
var ver_inicio = document.getElementById("index_btn");

var tabla_cuentas = document.getElementById("tabla_cuentas");
var tabla_ordenes = document.getElementById("tabla_ordenes");

var add_account = document.getElementById("add_account");
var save_account = document.getElementById("save");

var index_mirror = document.getElementById("index_mirror");

var modify = document.getElementById("btn_modify");

var b_category = document.getElementById("category_buy");
var b_description = document.getElementById("description_buy");
var b_price = document.getElementById("price_buy");
var payment_method = document.getElementById("payment_method");
var id_buy = document.getElementById("id_buy");

var btn_purchase = document.getElementById("btn_purchase");

var filter_1 = document.getElementById("filter_1");
var filter_status = document.getElementById("filter_status");
var filter_price = document.getElementById("filter_price");

var filter_2 = document.getElementById("filter_2");
var filter_total = document.getElementById("filter_total");

index_mirror.onclick = function() {

    ver_inicio.click();
}

function cargar_cuentas() {
    $.ajax({
            type: "POST",
            url: "controller/ajax_controller.php"

        })
        .done(function(result) {
            //  console.log(result);
            document.getElementById('account_list').innerHTML = result;
        });
}

ver_inicio.onclick = function() {
    tabla_ordenes.style.display = 'none';
    tabla_cuentas.style.display = 'none';
    $("#container").hide().fadeIn(1000);
}

ver_tabla_cuentas.onclick = function() {
    container.style.display = 'none';
    tabla_ordenes.style.display = 'none';
    filter_by_text();
    $("#tabla_cuentas").hide().fadeIn(1000);

}

function cargar_ordenes() {
    $.ajax({
            type: "POST",
            url: "controller/ajax_controller_2.php"

        })
        .done(function(result) {
            //  console.log(result);
            document.getElementById('order_list').innerHTML = result;
        });
}


ver_tabla_ordenes.onclick = function() {
    container.style.display = 'none';
    tabla_cuentas.style.display = 'none';
    cargar_ordenes();
    $("#tabla_ordenes").hide().fadeIn(1000);

}

add_account.onclick = function() {
    $("#new_account").modal().show();
}
save_account.onclick = function() {
    if (title_new.value == "" || category_new.value == "" || price_new.value == "" || description_new.value == "" || status_new.value == "empty") {
        swal({
            type: "error",
            title: "Error",
            text: "Please fill every field",
            showConfirmButton: true
        })
    } else {

        var data = new Object();
        data['title'] = title_new.value;
        data['description'] = description_new.value;
        data['category'] = category_new.value;
        data['price'] = price_new.value;
        data['status'] = status_new.value;



        $.ajax({
            type: "POST",
            url: "controller/new_account.php",
            data: { "data": data }
        }).done(function(result) {
            if (result) {
                swal({
                    type: "success",
                    title: "Excellent!",
                    text: "The new account has been saved successfully.",
                    timer: 3000,
                    showConfirmButton: false
                });

                $("#add_account").modal("hide");
                filter_by_text();
            }
        })
        $('#new_account').modal("hide");
    }

}

function modify_account(info_account) {
    title_edit.value = info_account['title'];
    description_edit.value = info_account['description'];
    price_edit.value = info_account['price'];
    status_edit.value = info_account['status'];
    category_edit.value = info_account['category'];
    id_edit.value = info_account['id'];

    $("#modify_account").modal().show();
}

modify.onclick = function() {
    if (title_edit.value == "" || category_edit.value == "" || price_edit.value == "" || description_edit.value == "" || status_edit.value == "empty") {
        swal({
            type: "error",
            title: "Error",
            text: "Please fill every field",
            showConfirmButton: true
        })
    } else {

        var data = new Object();
        data['title'] = title_edit.value;
        data['description'] = description_edit.value;
        data['category'] = category_edit.value;
        data['price'] = price_edit.value;
        data['status'] = status_edit.value;
        data['id'] = id_edit.value;



        $.ajax({
            type: "POST",
            url: "controller/modify_account.php",
            data: { "data": data }
        }).done(function(result) {
            console.log(result);
            if (result) {
                swal({
                    type: "success",
                    title: "Excellent!",
                    text: "The account has been modified successfully.",
                    timer: 3000,
                    showConfirmButton: false
                });

                $("#modify_account").modal("hide");
                filter_by_text();
            }
        })
    }
}

function delete_account(id) {
    swal({
        type: "warning",
        title: "Warning",
        text: "You are about to delete this account and all it's information",
        showCancelButton: true,
        cancelButtonText: "Cancel",
        confirmButtonText: "Confirm"
    }, function(isConfirm) {
        if (isConfirm) {
            $.ajax({
                type: "POST",
                url: "controller/delete_account.php",
                data: { "id": id }
            }).done(function(result) {
                console.log(result);
                if (result == 1) {
                    swal({
                        type: "success",
                        title: "Success",
                        text: "The account was deleted successfully",
                        timer: 3000,
                        showConfirmButton: false
                    });
                    filter_by_text();
                } else {
                    console.log(result);
                }
            })
        }
    })
}

function purchase_account(account_info) {

    b_category.innerHTML = account_info['category'];
    b_price.innerHTML = total_buy.innerHTML = account_info['price'];
    b_description.innerHTML = account_info['description'];
    payment_method.value = '';
    id_buy.value = account_info['id'];


    $("#purchase_account").modal().show();
}
btn_purchase.onclick = function() {
    if (payment_method.value == "") {
        swal({
            type: "error",
            title: "Error",
            text: "Specify the Payment Method",
            timer: 3000,
            showConfirmButton: false
        });
    } else {

        var info = new Object();
        info['id'] = id_buy.value;
        info['price'] = parseInt(total_buy.innerHTML);
        info['payment_method'] = payment_method.value;


        $.ajax({
            type: "POST",
            url: "controller/purchase_account.php",
            data: { "data": info }
        }).done(function(result) {
            console.log(result);
            if (result) {
                swal({
                    type: "success",
                    title: "Congratulations",
                    text: "The order was processed, Thank you for the purchase",
                    timer: 3000,
                    showConfirmButton: false
                });

                $("#purchase_account").modal("hide");

                cargar_ordenes();
                $("#tabla_ordenes").hide().fadeIn(2000);
                $("#purchase_account").modal("hide");
                tabla_cuentas.style.display = 'none';
            }
        })
    }
}

filter_1.onkeyup = function() {
    filter_by_text();
}

filter_status.onchange = function() {
    filter_by_text()
}

filter_price.onchange = function() {
    filter_by_text()
}


function filter_by_text() {
    var data = new Object();
    data['status'] = filter_status.value;
    data['price'] = filter_price.value;
    data['text'] = filter_1.value;

    $.ajax({
        type: "POST",
        url: "controller/filter_applier.php",
        data: { "data": data }
    }).done(function(result) {
        document.getElementById("account_list").innerHTML = result;
    })
}

filter_2.onkeyup = function() {
    filter_by_text_2();
}

filter_total.onchange = function() {
    filter_by_text_2();
}

function filter_by_text_2() {
    var data = new Object();
    data['total'] = filter_total.value;
    data['text'] = filter_2.value;

    $.ajax({
        type: "POST",
        url: "controller/filter_applier_2.php",
        data: { "data": data }
    }).done(function(result) {
        document.getElementById("order_list").innerHTML = result;
    })
}