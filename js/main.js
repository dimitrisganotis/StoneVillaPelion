let toogleNavStatus = false;

let toogleNav = function() {
  let getNav = document.querySelector("#nav");
  let getToogleNavBtn = document.querySelector("#toggle_nav_btn");
  let getNavLinks = document.querySelectorAll("#nav ul li");

  if (toogleNavStatus === false) {

    for(var i = 0; i < getNavLinks.length; i++) {
      getNavLinks[i].classList.remove("fadeOutLeft");
      getNavLinks[i].classList.add("fadeInLeft");
    }

    getNav.style.display = "block";
    getToogleNavBtn.innerHTML = "&times;";
    //getToogleNavBtn.style.fontSize = "2.5em";

    toogleNavStatus = true;

  } else if (toogleNavStatus === true) {

    for(var i = 0; i < getNavLinks.length; i++) {
      getNavLinks[i].classList.remove("fadeInLeft");
      getNavLinks[i].classList.add("fadeOutLeft");
    }

    window.setTimeout(function() {
      getNav.style.display = "none";
      getToogleNavBtn.innerHTML = "&#9776";

      toogleNavStatus = false;
    }, 800);
  }

}

var toogleCalendar = function() {

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
}
