
 var myAlert = document.getElementById('myAlert')
 myAlert.addEventListener('closed.bs.alert', function () {
   // do something, for instance, explicitly move focus to the most appropriate element,
   // so it doesn't get lost/reset to the start of the page
   // document.getElementById('...').focus()
 })







function clickimg(smallImg){
    var fullImg = document.getElementById("bimg");
    fullImg.src = smallImg.src
}


function pimg2img(smallImg){
    var full2img = document.getElementById("bimg");
    full2img.src = smallImg.src
    
}
  

