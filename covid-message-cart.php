<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Emotiongift Cart page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=360, initial-scale=1">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">

	<link rel="stylesheet" href="main.css">
	<script>
		if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
			var tendigitrandom = Math.floor(1000000000 + Math.random() * 9000000000);
			document.getElementById("tenrandom").innerHTML=tendigitrandom;
		}
	</script>
	<style>
	.cart__item{
		padding:0px;
	}
	</style>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="width:300px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="" href="#">  <img src="img/logo2.png"></a>
       
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"> 
		
		</li>
		<li>	</li>
		
		
        <li>
			 <a href="#" class="dropdown-toggle"  onclick="cartToggle();"> <span class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="caret"></span></a>
			 
		</li>
		<li>	</li>
      </ul>
	  
      <ul class="nav navbar-nav navbar-right">
	    
        <li class="dropdown">
         
              
          </ul>
        </li>
		
      </ul>
	  <div id="total-cart-value">
		 
        
		</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<main class="main-container">
     <div class="shopping-cart" >
	
	 
	 </div>
		<section class="section">
		 <div class="row">
		 <div style="height:50px;"></div>
		 </div>
		 <div class="row remotdeliveryblock">
		 <label>Choose if your delivery address is with not near to city main area</label>
		 <div class="product__name">Remote Delivey</div>
			<input id="check_3512" type="checkbox" name="addonId" value="3512"  data-action="ADD_TO_CART" class="check_add"/>
              
			 <img src="img/remote_delivery.png" width="20" height="20" class="product__image" style="float:left;" title="Rosy" alt="Rosy" data-piio-id="27"></a>
            
	 <div class=""> 
	  	  <div class="price-cart">
           <div class="product__price">
                270.00               
		</div>
      
	  </div>
	  </div>
	   
</div> 
		 <div  class="row">
		 <div class="col-md-8">
			  <div class="shippinginformation">
	<form class="needs-validation"  method="post" action="PaytmKit/pgRedirect.php"  role="form" data-toggle="validator" novalidate>
  <div class="form-row">
           <div class="form-group col-md-4">
 
	<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
	<input type="hidden"  id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST<? echo  rand(10000,99999999); ?>">
	<input type="hidden"  id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
	<input type="hidden"  id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
	<input type="hidden"  title="TXN_AMOUNT" id="txn_amount" tabindex="10" type="text" name="TXN_AMOUNT" value="1">
	<input type="hidden" name="cartvalues" id="cartvalues" value="">
      <label for="validationCustom01">Sender Full Name</label>
      <input type="text" name="sname" class="form-control" id="validationCustom01" placeholder="eg Ram Sharma" value="" required="required" data-error="Please enter your full name.">
       <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-4 mb-3">
      <label for="validationCustom02">Sender Mobile Number
	  </label>
      <input type="text" name="smobile" class="form-control" id="validationCustom02" placeholder="eg 999099909" value="" required="required" data-error="Please enter your Mobile number.">
       <div class="help-block with-errors"></div>
    </div>
	<div class="form-group col-md-4 mb-3">
      <label for="validationCustom02">Sender Email
	  </label>
      <input type="email"  name="semail" class="form-control" id="validationCustom02" placeholder="email" value=""  required="required" data-error="Please enter valid email.">
       <div class="help-block with-errors"></div>
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-4 mb-3">
	
	<label for="validationCustom01">Receiver Full Name</label>
      <input type="text"  name="rname"  class="form-control" id="validationCustom01" placeholder="eg Ram Sharma" value=""  required="required" data-error="Please enter Receiver Full Name.">
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-4 mb-3">
      <label for="validationCustom02">Receiver Mobile Number
	  </label>
      <input type="text"  name="rmobile" class="form-control" id="validationCustom02" placeholder="eg 999099909" value=""  required="required" data-error="Please enter Receiver Mobile number.">
        <div class="help-block with-errors"></div>
    </div>
	<div class="form-group col-md-4 mb-3">
      <label for="validationCustom02">Date of Delivery
	  </label>
      <input type="date"  name="deliverydate" class="form-control" id="validationCustom02"   value=""  data-error="Please enter Date pf delivery.">
       <div class="help-block with-errors"></div>
    </div>
    
  </div>
  <div class="form-row">
 
    <div class="form-group col-md-4 mb-3">
      <label for="validationCustom03">Shipping City</label>
      <input type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required="required" data-error="Please enter city.">
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group  col-md-6 mb-3">
      <label for="validationCustom03">Shipping Address</label>
      <input type="text"  name="address"  class="form-control" id="validationCustom03" placeholder="Address" required="required" data-error="Please enter Shipping address.">
	   <div class="help-block with-errors"></div>
      
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text"  name="state"  class="form-control" id="validationCustom04" placeholder="State" required="required" data-error="Please enter Receiver Mobile number.">
       <div class="help-block with-errors"></div>
    </div>
    <div class="form-group col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text"   name="zip"  class="form-control" id="validationCustom05" placeholder="Zip" required="required" data-error="Please enter  zip.">
        <div class="help-block with-errors"></div>
    </div>
  </div>
  
   <div class="form-row">
 
    <div class="form-group col-md-6 mb-3">
      <label for="validationCustom03">Message on Gift</label>
      <input type="text"   name="message" class="form-control" id="validationCustom03" placeholder="Messages on gift" required="required" data-error="Please enter Messages on gift">
        <div class="help-block with-errors"></div>
    </div>
    
  </div>
  <div class="row">
	<h1> Due to covid-19 Please call before order. </h1>
  </div>
   <!--
   need to uncomment after lockdown
   <div class="row">
   <div class="form-group col-md-6 mb-3">
    <label for="validationCustom03">Pay with Indian Credit Card </label>
  <button class="buttonpay" type="submit">Pay with Indian Credit Card

  
  </button></div>
  <div class="form-group col-md-2 mb-3">
		OR
  </div>
  <div class="form-group col-md-4 mb-3">
   <label for="validationCustom03">Pay with international Cards - Paypal</label>
   <button class="buttonpay" id="checkout1" data-action="CHECKOUT1">Pay</button>
    
  </div>
  </div>-->

 
</div>
</div>
<div class="col-md-4">

<div class="row">			
			 <h2>Cart</h2>
			 
		    <div class="cart"></div>
			 
			 <div class="products" style="display:none;">
			 
			</div>
			</div>
			</div>
<div id="myButton"></div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
 
			let cart2 = (JSON.parse(localStorage.getItem('cart')) || []);
			document.getElementById('cartvalues').value = localStorage.getItem('cart');
			const productcartDOM = document.querySelector('.products');
			if (cart2.length > 0) {
			  cart2.forEach(cartItemP => {
				const product = cartItemP;
				insertItemToDOMBelowProduct(product);
				
			  });
			}
			
		document.getElementById("check_3512").addEventListener("click", getCartVal);

function getCartVal() {
	 
  document.getElementById('cartvalues').value = localStorage.getItem('cart');
}
			
function insertItemToDOMBelowProduct(product) {
  productcartDOM.insertAdjacentHTML('beforeend', '<div class="cart__item">  <img class="product__image" src="${product.image}" alt="${product.name}">  <h3 class="product__name">${product.name}</h3> <h3 class="product__price">${product.price}</h3>   <button  type="button" class="button" data-action="ADD_TO_CART">Add To Cart</button>  </div>');
 
}
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByClassName("product");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByClassName("product__name")[0];
		
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

 
function cartToggle() {
  $(".shopping-cart").fadeToggle( "fast");
}
</script><script src="jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
</section>
 
  
</div>

	</main>

	<script src="main.js"></script>
	
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/555ff7eb19120cff1850b82c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
