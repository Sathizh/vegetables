@extends('layout.base')
@section('style')
<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/vendors.min.css')}}">
<!-- BEGIN: VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/flag-icon/css/flag-icon.min.css')}}">
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/vertical-modern-menu-template/style.css')}}">



<!-- END: Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/laravel-custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css')}}">
<!-- END: Custom CSS-->
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endsection
@section('container')
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>New Sales </span></h5>
                <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item ">
                        <a href="modern.html">Home</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>Sales Report</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>New Sales</a>
                    </li>
                </ol>
            </div>
            <div class="col s2 m6 l6">

                <a class="btn dropdown-settings   waves-light breadcrumbs-btn right" href="/new_purchse">
                    <i class="material-icons hide-on-med-and-up">add</i>
                    <span class="hide-on-small-onl">New Sales</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col s12 m12 l12">
    <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
            <form>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="date" name="date" type="date">
                        <label for="date">Date</label>
                    </div>
                    <div class="input-field col m6 s12">

                        <select tabindex="-1">
                            <option value="" disabled="" selected="">Choose your profile</option>
                            <option value="1">Manager</option>
                            <option value="2">Developer</option>
                            <option value="3">Business</option>
                        </select>
                        <label>Select Vendors</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m3">
                        <label>Item Name</label>
                        <select tabindex="-1" name="item_name" id="item_name">
                            <option value="" disabled="" selected=""></option>
                            <option value="Pakal Best">Pakal Best</option>
                            <option value="Pakal II">Pakal II</option>
                            <option value="2">Developer</option>
                            <option value="3">Business</option>
                        </select>

                    </div>
                    <div class=" col m1">
                        <label for="grade">Grade</label>
                        <input id="grade" type="number" name="grade" min="0">
                    </div>
                    <div class=" col m1">
                        <label for="kg">Kg/Grade</label>
                        <input id="kgg" type="number" name="kgg" min="0">
                    </div>
                    <div class=" col m1">
                        <label for="kgb">Kg/Bag</label>
                        <input id="kgb" type="number" name="kgb" min="0">
                    </div>
                    <div class=" col m2">
                        <label for="price">Price</label>
                        <input id="price" type="number" name="price" min="0">

                    </div>
                    <div class=" col m2">
                        <label for="total">Total</label>
                        <input id="total" type="number" value="" name="total" min="0">
                    </div>
                    <div class="input-field col m2">
                        <input id="add-row" type="button" class="btn" value="Add" min="0">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div id="responsive-table" class="card card card-default scrollspy">
                            <div class="card-content">
                                <h4 class="card-title right red-text">Previous Balance: ₹ 0000</h4>
                                <div class="row">
                                    <div class="col s12">
                                    </div>
                                    <div class="col s12">
                                        <table class="responsive-table" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Total KG</th>
                                                    <th>Item Price</th>
                                                    <th>Total Price</th>
                                                    <th class="center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="t-body">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <div class="row pt-2">
                                    <div class="col m6 ">
                                        <div class="row pt-2">
                                            <div class="col m5 s8 right-align pt-3">Advance Grade :</div>
                                            <div class="col m2  s4 right-align"><input type="number" id="advance_grade"
                                                    min="0" value="">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col m5 s8 right-align ">Opening Grade :</div>
                                            <div class="col m1 s4 right-align" id="opening_grade">0</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m5 s8 right-align">Purchase Grade :</div>
                                            <input type="hidden" name="purchace_grade" id="purchace_grade_val"
                                                value="0">
                                            <div class="col m1  s4  right-align" id="purchace_grade">0</div>
                                        </div>

                                        <div class="row pt-2">
                                            <div class="col m5 s8 right-align ">Remaining Grade :</div>
                                            <div class="col m1 s4 right-align" id="remaining_grade">0</div>
                                        </div>
                                    </div>
                                    <div class="col m6">
                                        <div class="row ">
                                            <div class="col m9 s8 right-align ">Opening Balance :</div>
                                            <div class="col m3 s4 right-align" id="opening_bal">0</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align">Purchase Price :</div>
                                            <div class="col m3  s4  right-align pp" id="purchase_price">0</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align pt-3">Cash:</div>
                                            <div class="col m3  s4 right-align"><input id="cash" class="right-align"
                                                    type="number" min="0" value=""></div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align">Balance :</div>
                                            <div class="col m3 s4 right-align" id="balance">0</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset('assets/js/plugins.js')}}"></script>
<script src="{{ asset('assets/js/search.js')}}"></script>
<script src="{{ asset('assets/js/custom/custom-script.js')}}"></script>
<script src="{{ asset('assets/js/scripts/customizer.js')}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->

<script>
    $(document).ready(function(){


        //set current date begin
        var today = new Date();
        $("#date").val(today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2))
        var temp=1
        //set current date end

        // total calculation begin
        $("#item_name").change(function (e) {
            var item_name=$("#item_name").val()
            var condiition=item_name.includes("II")
                temp=1
            if(condiition)
                temp*=20
            else
                temp*=25
        });
        $("#grade,#kgg,#kgb,#price").keyup(function (e) {
            var grade=0,kgg=0,kgb=0
            var price =1

            grade=$("#grade").val()
            if($("#kgg").val()=="")
                kgg=0
            else
                kgg=parseInt($("#kgg").val())
            if($("#kgb").val()==""){
                kgb=0}
            else
                kgb=parseInt($("#kgb").val())
            price=$("#price").val()
            var total=((grade*temp)+kgg+kgb)*price
            $("#total").val(total)
        });
        // total calculation end

        // adding record
        $("#add-row").click(function(){

        // purchase grade
        purchace_grade=parseInt($('#purchace_grade').text())
        var hidden_grade=0
        if($("#grade").val()=="")
            grade=0
        else
            grade=parseInt($("#grade").val())
            hidden_grade+=grade
        purchace_grade=purchace_grade+parseInt(grade);
        if($("#kgg").val() > 0)
        {
            purchace_grade=purchace_grade+parseInt(1)
            hidden_grade+=parseInt(1)
        }
        $("#purchace_grade").text(purchace_grade)
        $("#purchace_grade_val").val(purchace_grade)
            calc()

            // purchase price
            $('#purchase_price').text(parseInt($('#purchase_price').text())+parseInt($('#total').val()))
            cash_calc()



        var name = $("#item_name").val();
        var price = $("#price").val();
        var total = $("#total").val();
        var markup = "<tr><td>"+ name +"</td><td>"+total/price+"</td><td>₹ "+price+"</td><td>₹ "+total+"</td><td class='center'><a href='#' class='red-text'  onclick='fun(this,"+hidden_grade+","+total+")' ><i class='material-icons'>delete</i></a></td></tr>";
        $("table tbody").append(markup);
        });
        $("#advance_grade").keyup(function (e) {
            calc()
        });
        $("#cash").keyup(function (e) {
            cash_calc()
        });

});
function fun(e,x,t){
    $('#purchase_price').text(parseInt($('#purchase_price').text())-parseInt(t))
    var purchase_grade=parseInt($('#purchace_grade').text())-x
    console.log(x,purchase_grade);
    $('#purchace_grade').text(purchase_grade)
    calc()
    $(e).parent().parent().remove();
}
function calc(){
    // remaining grade
    var advance_grade
    var opening_grade=parseInt($('#opening_grade').text())

    if($('#advance_grade').val()=="")
        advance_grade=0
    else
        advance_grade=parseInt($('#advance_grade').val())
    var purchase_grade=parseInt($('#purchace_grade').text())
    var remaing_grade=parseInt((opening_grade+advance_grade)-purchase_grade)
    $("#remaining_grade").text(remaing_grade)
}
function cash_calc(){
    var cash
    var opening_bal=parseInt($('#opening_bal').text())

    if($('#cash').val()=="")
        cash=0
    else
        cash=parseInt($('#cash').val())
    var purchase_price=parseInt($('.pp').text())
    var balance=parseInt((opening_bal+purchase_price)-cash)
    $("#balance").text(balance)
}
</script>
@endsection
