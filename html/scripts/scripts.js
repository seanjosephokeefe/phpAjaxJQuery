//scripts.js

var customers = new Array();
var products = new Array();

//objects

function Customer(id, first, last, active) {
    this.id = id;
    this.first = first;
    this.last = last;
    this.active = active;
}

function Product(id, name, price, active) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.active = active;
}

//AJAX Methods

function GetCustomers() {
    $.ajax({
        url: "../php/SelectCustomers.php",
        type: "POST",
        dataType: "json",
        success: GetCustomers_success,
        error: GetCustomers_failure,
    });
}

function GetCustomers_success(result, textStatus, jqXHR) {
    customers = result;
    var table = "<table class='tblForm'>";
    table += "<tr>";
    table += "<th>id</th><th>&nbsp;&nbsp;&nbsp;&nbsp;</th><th>first name</th><th>&nbsp;&nbsp;</th><th>last name</th><th>&nbsp;&nbsp;</th><th>active</th>";
    table += "</tr>";
    for (i = 0; i < customers.length; i++) {
        table += "<tr onclick='GetCustomerByID(" + customers[i].id + ");' class='line'>";
        table += "<td class='center'>" + customers[i].id + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='center'>" + customers[i].first + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='center'>" + customers[i].last + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='center'>" + customers[i].active + "</td>";
        table += "</tr>";
    }
    table += "</table>";
    $("#DivCustomerList").html(table);
}

function GetCustomers_failure(xhr, status, errorThrown, result) {
    alert(xhr.responseText);
}

function GetCustomerByID(custID) {
    $.ajax({
        url: "../php/SelectCustomers.php",
        type: "POST",
        dataType: "json",
        data: { id: custID },
        success: GetCustomerByID_success,
        error: GetCustomerByID_failure,
    });
}

function GetCustomerByID_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivCustomer").show();
    ClearFields()
    SetDivTitle("Edit Customer");
    $("#TBCID").val(result[0].id);
    $("#TBFirst").val(result[0].first);
    $("#TBLast").val(result[0].last);
    if (result[0].active == 'T')
        $('input:radio[id=RBCAT]').prop('checked', true);
    else
        $('input:radio[id=RBCAF]').prop('checked', true);
}

function GetCustomerByID_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function AddCustomer(custFirst, custLast, custActive) {
    $.ajax({
        url: "../php/InsertCustomer.php",
        data: { first: custFirst, last: custLast, active: custActive },
        type: "POST",
        dataType: "json",
        success: AddCustomer_success,
        error: AddCustomer_failure,
    });
}

function AddCustomer_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivCustomerList").show();
    SetDivTitle("View All Customers");
    GetCustomers();
}

function AddCustomer_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function EditCustomer(custID, custFirst, custLast, custActive) {
    $.ajax({
        url: "../php/UpdateCustomer.php",
        data: { id: custID, first: custFirst, last: custLast, active: custActive },
        type: "POST",
        dataType: "json",
        success: EditCustomer_success,
        error: EditCustomer_failure,
    });
}

function EditCustomer_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivCustomerList").show();
    SetDivTitle("View All Customers");
    GetCustomers();
}

function EditCustomer_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function GetProducts() {
    $.ajax({
        url: "../php/SelectProducts.php",
        type: "POST",
        dataType: "json",
        success: GetProducts_success,
        error: GetProducts_failure,
    });
}

function GetProducts_success(result, textStatus, jqXHR) {
    products = result;
    var table = "<table class='tblForm'>";
    table += "<tr>";
    table += "<th>id</th><th>&nbsp;&nbsp;</th><th>name</th><th>&nbsp;&nbsp;</th><th>price</th><th>&nbsp;&nbsp;</th><th>active</th>";
    table += "</tr>";
    for (i = 0; i < products.length; i++) {
        table += "<tr onclick='GetProductByID(" + products[i].id + ");' class='line'>";
        table += "<td class='center'>" + products[i].id + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='left'>" + products[i].name + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='right'>$ " + products[i].price + "</td><td>&nbsp;&nbsp;</td>";
        table += "<td class='center'>" + products[i].active + "</td>";
        table += "</tr>";
    }
    table += "</table>";
    $("#DivProductList").html(table);
}

function GetProducts_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function GetProductByID(prodID) {
    $.ajax({
        url: "../php/SelectProducts.php",
        type: "POST",
        dataType: "json",
        data: { id: prodID },
        success: GetProductByID_success,
        error: GetProductByID_failure,
    });
}

function GetProductByID_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivProduct").show();
    ClearFields()
    SetDivTitle("Edit Product");
    $("#TBPID").val(result[0].id);
    $("#TBPName").val(result[0].name);
    $("#TBPrice").val(result[0].price);
    if (result[0].active == 'T')
        $('input:radio[id=RBPAT]').prop('checked', true);
    else
        $('input:radio[id=RBPAF]').prop('checked', true);
}

function GetProductByID_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function AddProduct(prodName, prodPrice, prodActive) {
    $.ajax({
        url: "../php/InsertProduct.php",
        data: { name: prodName, price: prodPrice, active: prodActive },
        type: "POST",
        dataType: "json",
        success: AddProduct_success,
        error: AddProduct_failure,
    });
}

function AddProduct_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivProductList").show();
    SetDivTitle("View All Products");
    GetProducts();
}

function AddProduct_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

function EditProduct(prodID, prodName, prodPrice, prodActive) {
    $.ajax({
        url: "../php/UpdateProduct.php",
        data: { id: prodID, name: prodName, price: prodPrice, active: prodActive },
        type: "POST",
        dataType: "json",
        success: EditProduct_success,
        error: EditProduct_failure,
    });
}

function EditProduct_success(result, textStatus, jqXHR) {
    $(".contentDiv").hide();
    $("#DivProductList").show();
    SetDivTitle("View All Products");
    GetProducts();
}

function EditProduct_failure(xhr, status, errorThrown) {
    alert(xhr.responseText);
}

//Functions
function ClearErrors() {
    $(".message").hide();
    $("input[type='text']").css({ "background-color": "white" });
    $("input[type='radio']").css({ "background-color": "white" });
    $(".readonly").css({ "background-color": "lightgray" });
    $(".lblRadio").css({ "background-color": "aliceblue" });
}

function ValidateCustomer() {
    ClearErrors();
    var isValid = true;
    if ($("#TBFirst").val().length == 0) {
        isValid = false;
        $("#TBFirst").css({ "background-color": "lightpink" });
    }
    if ($("#TBLast").val().length == 0) {
        isValid = false;
        $("#TBLast").css({ "background-color": "lightpink" });
    }
    if (!$("input[name='RGCStatus']:checked").val()) {
        isValid = false;
        $("input[name='RGCStatus']").css({ "background-color": "lightpink" });
        $(".lblRadio").css({ "background-color": "lightpink" });
    }
    return isValid;
}

function ClearFields() {
    ClearErrors();
    $("input[type='text']").val("");
    $("input[type='radio']").prop('checked', false);
}

function ValidateProduct() {
    ClearErrors();
    var isValid = true;
    if ($("#TBPName").val().length == 0) {
        isValid = false;
        $("#TBPName").css({ "background-color": "lightpink" });
    }
    if ($("#TBPrice").val().length == 0) {
        isValid = false;
        $("#TBPrice").css({ "background-color": "lightpink" });
    }
    if (!$("input[name='RGPStatus']:checked").val()) {
        isValid = false;
        $("input[name='RGPStatus']").css({ "background-color": "lightpink" });
        $(".lblRadio").css({ "background-color": "lightpink" });
    }
    return isValid;
}

function SetDivTitle(which) {
    $("#DivTitle").html(which)
}

$(document).ready(function () {

    $("#DivCustomerList").show();
    GetCustomers();

    $("#BtnCustomerSubmit").click(function () {
        if (ValidateCustomer()) {
            if ($("#TBCID").val().length == 0) {
                //Add new customer
                AddCustomer($("#TBFirst").val(), $("#TBLast").val(), $("input:radio[name=RGCStatus]:checked").val())
            } else {
                //Update customer
                EditCustomer($("#TBCID").val(), $("#TBFirst").val(), $("#TBLast").val(), $("input:radio[name=RGCStatus]:checked").val())
            }
        }
    });
    $("#BtnCustomerReset").click(function () {
        ClearErrors();
        $("input[type='radio']").prop('checked', false);
        $("#TBFirst").val("");
        $("#TBLast").val("");
    });
    $("#BtnProductSubmit").click(function () {
        if (ValidateProduct()) {
            if ($("#TBPID").val().length == 0) {
                //Add new product
                AddProduct($("#TBPName").val(), $("#TBPrice").val(), $("input:radio[name=RGPStatus]:checked").val())
            } else {
                //Update product
                EditProduct($("#TBPID").val(), $("#TBPName").val(), $("#TBPrice").val(), $("input:radio[name=RGPStatus]:checked").val())
            }
        }
    });
    $("#BtnProductReset").click(function () {
        ClearErrors();
        $("input[type='radio']").prop('checked', false);
        $("#TBPName").val("");
        $("#TBPrice").val("");
    });
    $("#BtnViewCustomers").click(function () {
        ClearFields()
        $(".contentDiv").hide();
        $("#DivCustomerList").show();
        SetDivTitle("View All Customers (Click on a row to edit)");
        GetCustomers();
    });
    $("#BtnCustomerExit").click(function () {
        ClearFields();
        $(".contentDiv").hide();
        $("#DivCustomerList").show();
        SetDivTitle("View All Customers (Click on a row to edit)");
        GetCustomers();
    });
    $("#BtnAddCustomer").click(function () {
        ClearFields();
        $(".contentDiv").hide();
        $("#DivCustomer").show();
        SetDivTitle("Add Customer");
    });
    $("#BtnViewProducts").click(function () {
        ClearFields();
        $(".contentDiv").hide();
        $("#DivProductList").show();
        SetDivTitle("View All Products (Click on a row to edit)");
        GetProducts();
    });
    $("#BtnProductExit").click(function () {
        ClearFields();
        $(".contentDiv").hide();
        $("#DivProductList").show();
        SetDivTitle("View All Products (Click on a row to edit)");
        GetProducts();
    });
    $("#BtnAddProducts").click(function () {
        ClearFields();
        $(".contentDiv").hide();
        $("#DivProduct").show();
        SetDivTitle("Add Product");
    });
});