<?php
include "../php/CheckSession.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=ansi_x3.110-1983">
    <title></title>
    <link href="styles/styles.css" rel="stylesheet" />
</head>
<body>
    <div id="DivHeading">Customers and Products</div>
    <div id="DivMenu">
        <input type="button" id="BtnViewCustomers" value="View Customers" />
        &nbsp;&nbsp;
        <input type="button" id="BtnAddCustomer" value="Add Customer" />
        &nbsp;&nbsp;
        <input type="button" id="BtnViewProducts" value="View Products" />
        &nbsp;&nbsp;
        <input type="button" id="BtnAddProducts" value="Add Product" />
    </div>
    <br />
    <div id="DivContainer">
        <div id="DivTitle">View All Customers (Click on a row to edit)</div>
        <div id="DivCustomer" class="contentDiv">
            <table id="TblCustomer" class="tblForm">
                <tr>
                    <td>
                        <p>ID: <input id="TBCID" type="text" readonly="readonly" class="tBShort readonly" /></p>
                    </td>
                    <td colspan="2" class="center">
                        <p>
                            Status:
                            <input id="RBCAT" type="radio" name="RGCStatus" value="T" /><label for="RBCAT" class="lblRadio">Active</label>
                            <input id="RBCAF" type="radio" name="RGCStatus" value="F" /><label for="RBCAF" class="lblRadio">Inactive</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>First Name:<br /><input id="TBFirst" type="text" class="tBLong" /></p>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <p>Last Name:<br /><input id="TBLast" type="text" class="tBLong" /></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="center">
                        <input id="BtnCustomerSubmit" type="button" value="save" />
                        &nbsp;
                        <input id="BtnCustomerReset" type="button" value="clear" />
                        &nbsp;
                        <input id="BtnCustomerExit" type="button" value="close" />
                    </td>
                </tr>
            </table>
            <div id="DivMsgCustomer" class="message center"></div>
        </div>
        <div id="DivCustomerList" class="contentDiv">
        </div>
        <div id="DivProduct" class="contentDiv">
            <table id="TblProducts" class="tblForm">
                <tr>
                    <td>
                        <p>ID: <input id="TBPID" type="text" readonly="readonly" class="tBShort readonly" /></p>
                    </td>
                    <td colspan="2" class="center">
                        <p>
                            Status:
                            <input id="RBPAT" type="radio" name="RGPStatus" value="T" /><label for="RBPAT" class="lblRadio">Active</label>
                            <input id="RBPAF" type="radio" name="RGPStatus" value="F" /><label for="RBPAF" class="lblRadio">Inactive</label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Product Name:<br /><input id="TBPName" type="text" class="tBLong" /></p>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                        <p>Price:<br />$ <input id="TBPrice" type="text" class="tBMedium" /></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="center">
                        <input id="BtnProductSubmit" type="button" value="save" />
                        &nbsp;
                        <input id="BtnProductReset" type="button" value="clear" />
                        &nbsp;
                        <input id="BtnProductExit" type="button" value="close" />
                    </td>
                </tr>
            </table>
            <div id="DivMsgProduct" class="message center"></div>
        </div>
        <div id="DivProductList" class="contentDiv">
        </div>
    </div>
    <script src="scripts/jquery-2.1.3.min.js"></script>
    <script src="scripts/scripts.js"></script>
</body>
</html>