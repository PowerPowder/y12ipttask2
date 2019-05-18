function advanced_search() {
   if (document.getElementById('advanced-search').checked) {
      let thing =
         'display:grid\n' +
         'grid-template-columns: 2fr 1fr 2fr 1fr;\n' +
         'grid-gap: 0 0.05em;\n' + 
         'padding-top: 0.05em;\n';

      console.log(thing);
   } else {
      alert("checkn't");
   }
}

function showUser(str) {
   if (str=="") {
      document.getElementById("product-wrapper").innerHTML="";
      return;
   } 
   if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
   } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
         document.getElementById("product-wrapper").innerHTML=this.responseText;
      }
   }
   xmlhttp.open("GET","getuser.php?q="+str,true);
   xmlhttp.send();
}