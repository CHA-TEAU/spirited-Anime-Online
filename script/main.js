let animeblocks = document.querySelectorAll(".hoverblock");

animeblocks.forEach(animeblock => {

  animeblock.classList.remove("hoverblock");


  animeblock.addEventListener("mouseenter", () => {

    animeblock.classList.add("hoverblock");
  });


  animeblock.addEventListener("mouseleave", () => {
    
    animeblock.classList.remove("hoverblock");
  });
});