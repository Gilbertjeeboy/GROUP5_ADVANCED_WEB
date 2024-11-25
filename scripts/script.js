function back()
{window.location='index.php';}
function signup()
{window.location='signup.php';}
function login()
{window.location='login.php';}
function product()
{window.location='product.php';}

function order() 
{
	var a=document.getElementById('pqty1').value;
	var b=document.getElementById('pqty2').value;
	var c=document.getElementById('pqty3').value;
	var d=document.getElementById('pqty4').value;
	var e=document.getElementById('pqty5').value;
	var f=document.getElementById('pqty6').value;
	var g=document.getElementById('pqty7').value;	
	var h=document.getElementById('pqty8').value;

	if (!a) {a=0;}
	if (!b) {b=0;}
	if (!c) {c=0}
	if (!d) {d=0;}
	if (!e) {e=0}
	if (!f) {f=0;}
	if (!g) {g=0}
	if (!h) {h=0;}

	var y=document.getElementById('cart').innerHTML=parseInt(a)+parseInt(b)+parseInt(c)+parseInt(d)+parseInt(e)+parseInt(f)+parseInt(g)+parseInt(h);
}
function category()
{
if (document.getElementById('services').value=='electronics')
 {
 	window.location='products.php';
 }
 else if (document.getElementById('services').value=='fish')
  {
  	window.location='fish_farming/index.php';
  }
   else if (document.getElementById('services').value=='event')
  {
  	window.location='about.php';
  }

}

