<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type='text/css'>
<script type="text/javascript">

function check(){
	
	var status = document.getElementById('remember').checked;
	
	if(status){
	
    var firstname = document.getElementById('fname').value;
	var lastname = document.getElementById('lname').value;
	var Address = document.getElementById('address').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('pnumber').value;
	
	localStorage.setItem('text',firstname);
	localStorage.setItem('text1',lastname);
	localStorage.setItem('text2',Address);
	localStorage.setItem('text3',email);
	localStorage.setItem('text4',phone);

	}else{
		remove();
	}
 }

 function remove(){
	 document.getElementById('fname').value = '';
	 document.getElementById('lname').value = '';
	 document.getElementById('address').value = '';
	 document.getElementById('email').value = '';
	 document.getElementById('pnumber').value = '';
	 localStorage.removeItem('text');
	 localStorage.removeItem('text1');
	 localStorage.removeItem('text2');
	 localStorage.removeItem('text3');
	 localStorage.removeItem('text4');
 }
function load(){
	
    var Storedfn = localStorage.getItem('text');
	var Storedln = localStorage.getItem('text1');
	var Storedadd = localStorage.getItem('text2');
	var Storedem = localStorage.getItem('text3');
	var Storedph = localStorage.getItem('text4');
	
	if(Storedfn){
		document.getElementById('fname').value = Storedfn;
		document.getElementById('lname').value = Storedln;
		document.getElementById('address').value = Storedadd;
		document.getElementById('email').value = Storedem;
		document.getElementById('pnumber').value = Storedph;
		document.getElementById('remember').checked = true;
	}
	
 }

function flex() 
 {
  var ev = parseInt(document.getElementById('eventflexibility').value);
  var dateflex = ["inflexible", "flexible", "super-flexible"];
	
  document.getElementById('flexibilitytext').value=dateflex[ev];
 }  
 

function unitPrice()
{
   var quantity1 = parseInt(document.getElementById('qtys1').value);
   var quantity2 = parseInt(document.getElementById('qtys2').value);
   var quantity3 = parseInt(document.getElementById('qtys3').value);
   
   
   price1 =(quantity1 * 17.00) || 0;
   price2 =(quantity2 * 22.50) || 0;
   price3 =(quantity3 * 26.75) || 0;
   
   var n1 = price1.toFixed(2);
   var n2 = price2.toFixed(2);
   var n3 = price3.toFixed(2);
   
   var total = [price1 , price2 , price3];
    
   var amount = total[0] + total[1] + total[2];

   var t = amount.toFixed(2);
   
   console.log(amount);
   document.getElementById('unitprice1').value=n1;
   document.getElementById('unitprice2').value=n2;
   document.getElementById('unitprice3').value=n3;
   
   document.getElementById('totalamount').value = t;
   
   } 

function checkoutvalidate(form){
        var Reg = /[a-zA-Z\-'\.\s]+$/;
        var Reg1 = /[a-zA-Z\-'\.\s]+$/;
		var Reg2 = /^[a-zA-Z\d\s'\!\,\_\-\;\.\n]+$/
		var Reg3 = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
		var Reg4 = /^\+?[\(\)\d\.\-x ]{10,20}$/;
		var Reg5 = /^(\d{3,4}[\s\-]?){4}$/;
		
        var  fname = form.querySelector('[name=firstname]');
        var  lname = form.querySelector('[name=lastname]');
		var  address = form.querySelector('[name=address]');
		var  email = form.querySelector('[name=email]');
		var  pnumber = form.querySelector('[name=phone]');
		var  creditcard = form.querySelector('[name=creditcard]');
		

        if (Reg.test(fname.value) == false) {
            event.preventDefault();
            document.getElementById('fname').setAttribute("style","background-color:red;color: white");
            fname.focus();
            return false;
        } else{
			document.getElementById('fname').setAttribute("style","background-color:white;color: black");
		}

        if (Reg1.test(lname.value) == false) {
            event.preventDefault();
            document.getElementById('lname').setAttribute("style","background-color:red;color: white");
            lname.focus();
            return false;
        } else{
			document.getElementById('lname').setAttribute("style","background-color:white;color: black");
		}
		
		 if (Reg2.test(address.value) == false) {
            event.preventDefault();
            document.getElementById('address').setAttribute("style","background-color:red;color: white");
            address.focus();
            return false;
        }else{
			document.getElementById('address').setAttribute("style","background-color:white;color: black");
		}
		
        if (Reg3.test(email.value) == false) {
            event.preventDefault();
            document.getElementById('email').setAttribute("style","background-color:red;color: white");
            email.focus();
            return false;
        }else{
			document.getElementById('email').setAttribute("style","background-color:white;color: black");
		}
		
        if (Reg4.test(pnumber.value) == false) {
            event.preventDefault();
            document.getElementById('pnumber').setAttribute("style","background-color:red;color: white");
            pnumber.focus();
            return false;
        }else{
			document.getElementById('pnumber').setAttribute("style","background-color:white;color: black");
		}
		
		if (Reg5.test(creditcard.value) == false) {
            event.preventDefault();
            document.getElementById('creditcard').setAttribute("style","background-color:red;color: white");
            creditcard.focus();
            return false;
        }else{
			document.getElementById('creditcard').setAttribute("style","background-color:white;color: black");
		}
		
    } 
   
function validate(form){
        var Reg = /[a-zA-Z\-'\.\s]+$/;
        var Reg1 = /[a-zA-Z\-'\.\s]+$/;
		var Reg2 = /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
		var Reg3 = /^\+?[\(\)\d\.\-x ]{10,20}$/;
		var Reg4 = /^[a-zA-Z\d\s'\!\,\_\-\;\.\n]+$/
		
        var  fname = form.querySelector('[name=firstname]');
        var  lname = form.querySelector('[name=lastname]');
		var  email = form.querySelector('[name=email]');
		var  pnumber = form.querySelector('[name=phone]');
		var  elocation = form.querySelector('[name=eventlocation]');
		var  edescription = form.querySelector('[name=eventdescription]');

        if (Reg.test(fname.value) == false) {
            event.preventDefault();
            document.getElementById('fname').setAttribute("style","background-color:red;color: white");
            fname.focus();
            return false;
        }else{
			document.getElementById('fname').setAttribute("style","background-color:white;color: black");
		}

        if (Reg1.test(lname.value) == false) {
            event.preventDefault();
            document.getElementById('lname').setAttribute("style","background-color:red;color: white");
            lname.focus();
            return false;
        }else{
			document.getElementById('lname').setAttribute("style","background-color:white;color: black");
		}
		
        if (Reg2.test(email.value) == false) {
            event.preventDefault();
            document.getElementById('email').setAttribute("style","background-color:red;color: white");
            email.focus();
            return false;
        }else{
			document.getElementById('email').setAttribute("style","background-color:white;color: black");
		}
		
        if (Reg3.test(pnumber.value) == false) {
            event.preventDefault();
            document.getElementById('pnumber').setAttribute("style","background-color:red;color: white");
            pnumber.focus();
            return false;
        }else{
			document.getElementById('pnumber').setAttribute("style","background-color:white;color: black");
		}
		
		if (Reg4.test(elocation.value) == false) {
            event.preventDefault();
            document.getElementById('elocation').setAttribute("style","background-color:red;color: white");
            elocation.focus();
            return false;
        }else{
			document.getElementById('elocation').setAttribute("style","background-color:white;color: black");
		}
		
		
		if (Reg4.test(edescription.value) == false) {
            event.preventDefault();
            document.getElementById('edescription').setAttribute("style","background-color:red;color: white");
            edescription.focus();
            return false;
        }else{
			document.getElementById('edescription').setAttribute("style","background-color:white;color: black");
		}
    }  
</script> 
<?php 
   $here = $_SERVER['SCRIPT_NAME']; 
   $bits = explode('/',$here); 
   $filename = $bits[count($bits)-1]; 
   echo "<style>nav a[href$='$filename'] { color:#FF4500; text-decoration:underline; }</style>";?>
   
</head>
<body onload = "load()">
	<header>
	<div id="logo"><img src="images/headlogo.png" alt="Josh Thomas"></div>
	<img src="images/header.png" alt="Josh Thomas">
	<h1>Josh Thomas</h1>
	<nav>
	<ul>
		<li><a href="index.php">Home</a><span>-</span></li> 
		<li><a href="shop.php">Shop</a><span>-</span></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
	</nav>
	</header>
	<main>
