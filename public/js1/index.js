 var mybutton = document.getElementById("myBtn");
 window.onscroll = function () {
    myFunction();
    scrollFunction();
};
    var navbar = document.getElementById("menu-infoproduct");
    var sticky = navbar.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        }else {
            navbar.classList.remove("sticky");
        }
    }
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        }else{
            mybutton.style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
}
