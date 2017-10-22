function fnsubmit(){
  alert("You have updated training record!!");
}
function fnrvwsubmit(){
  alert("You have reviewed successfully!!");
}
function showHidefees(){
  if (document.getElementById('feesa')) {

             if (document.getElementById('feesa').style.display == 'none') {
                 document.getElementById('feesa').style.display = 'block';
                 document.getElementById('feesb').style.display = 'none';
             }
             else {
                 document.getElementById('feesa').style.display = 'none';
                 document.getElementById('feesb').style.display = 'block';
             }
         }

}
function showHidedates(){
  if (document.getElementById('datea')) {

             if (document.getElementById('datea').style.display == 'none') {
                 document.getElementById('datea').style.display = 'block';
                 document.getElementById('dateb').style.display = 'none';
             }
             else {
                 document.getElementById('datea').style.display = 'none';
                 document.getElementById('dateb').style.display = 'block';
             }
         }

}
function showHidetime(){
  if (document.getElementById('timea')) {

             if (document.getElementById('timea').style.display == 'none') {
                 document.getElementById('timea').style.display = 'block';
                 document.getElementById('timeb').style.display = 'none';
             }
             else {
                 document.getElementById('timea').style.display = 'none';
                 document.getElementById('timeb').style.display = 'block';
             }
         }

}
function showHidestatus(){
  if (document.getElementById('statusa')) {

             if (document.getElementById('statusa').style.display == 'none') {
                 document.getElementById('statusa').style.display = 'block';
                 document.getElementById('statusb').style.display = 'none';
             }
             else {
                 document.getElementById('statusa').style.display = 'none';
                 document.getElementById('statusb').style.display = 'block';
             }
         }

}
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function myFunction() {
    var x = document.getElementById("myDIV1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function bigText(x) {
    x.style.color ="red";
}

function normalText(x) {
    x.style.color ="#0DBEF9";
}
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Search must be filled out");
        return false;
    }
}
