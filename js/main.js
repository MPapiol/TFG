function iniciarMap() {
  var coord = {
    lat: 41.4357702,
    lng: 2.0468207
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: coord
  });
  var marker = new google.maps.Marker({
    position: coord,
    map: map
  });
}

/*
// Get the container element
let btnContainer = document.getElementById("navegation");

// Get all buttons with class="btn" inside the container
let btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
*/