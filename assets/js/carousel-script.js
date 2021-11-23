var slideActual = 1;
arataSlide(slideActual);

function nextSlide(n)
{
    slideActual += n;
    arataSlide(slideActual);
}
function currentSlide(n)
{
    slideActual = n;
    arataSlide(slideActual);
}

function arataSlide(n)
{
    var i;
    var slides = document.getElementsByClassName("regulamente");
    var thumbnails = document.getElementsByClassName("dot");
    if(n > slides.length)
    {
        slideActual = 1;
    }
    if(n < 1)
    {
        slideActual = slides.length;
    }
    for(i = 0; i < slides.length; i++)
    {
        slides[i].style.display = "none";
    }
    for(i = 0; i < thumbnails.length; i++)
    {
        thumbnails[i].className = thumbnails[i].className.replace(" active", "");
    }
    slides[slideActual - 1].style.display = "block";
    thumbnails[slideActual - 1].className += " active";
}