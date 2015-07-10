//Create a varaiable to store the true/false value of the use of legacy links
var legacyLinks = null;
//Check if the legacy links are supposed to be used or not
if( document.body.className.match('useLegacyLinks') ) { 
  legacyLinks = true;
} else {
  legacyLinks = false;
}

//Function to create the "link" on the page
function destination(e) {
  var url;
  //Check whether or not to decode the link
  if(legacyLinks) {
    //Use standard link as is on the page
    url = e.getAttribute("data-destination");
  } else {
    //Parse the base64 encoding of the link on the page
    url = window.atob(e.getAttribute("data-destination"));
  }
  //Get the target attribute of the link
  var target = e.getAttribute("data-target");
  //Move to the new page
  window.open(url,target);
}