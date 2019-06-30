//
//---------------------------------
// section - formatted text area (by showdown) start
//---------------------------------
//




console.log("dev is fucking G")


var x = $("#hellomarkdown").html();
var converter = new showdown.Converter(),
text      = x,
html      = converter.makeHtml(text);
$("#hellomarkdown").html(html) ;




//
//---------------------------------
// section - formatted text area (by showdown) end
//---------------------------------
//




