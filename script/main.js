let animeblocks = document.querySelectorAll(".hoverblock");

let gearbtn = document.getElementById("gear");

let adminpanel = document.getElementById("admin");

let closebtn = document.getElementById("close");

animeblocks.forEach(animeblock => {

  animeblock.classList.remove("hoverblock");


  animeblock.addEventListener("mouseenter", () => {

    animeblock.classList.add("hoverblock");
  });


  animeblock.addEventListener("mouseleave", () => {
    
    animeblock.classList.remove("hoverblock");
  });
});

// OPEN ADMIN PANEL FUNCTION

gearbtn.addEventListener("click", ()=>{
  adminpanel.classList.add("show");
});

closebtn.addEventListener("click", ()=>{
  adminpanel.classList.remove("show");
});


// ADD TO LIKED

let like = document.querySelector('.like');

like.addEventListener("click", function(){

  if(like.getAttribute('name') == 'heart-outline'){
    like.setAttribute('name', 'heart');
  } else {
    like.setAttribute('name', 'heart-outline');
  }
  
});

