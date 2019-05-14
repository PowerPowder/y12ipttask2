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
