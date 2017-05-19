var slideIndex = 0;
slider_function();

function slider_function() {
    var i;
    var x = document.getElementsByClassName("slide_img");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(slider_function, 5000); // Change image every 5 seconds
}
