// Select all elements with the class "hoverblock"
let animeblocks = document.querySelectorAll(".hoverblock");

// Iterate over each element
animeblocks.forEach(animeblock => {
  // Remove the "hoverblock" class initially
  animeblock.classList.remove("hoverblock");

  // Add event listener for mouseenter event
  animeblock.addEventListener("mouseenter", () => {
    // Add the "hoverblock" class when mouse enters
    animeblock.classList.add("hoverblock");
  });

  // Add event listener for mouseleave event
  animeblock.addEventListener("mouseleave", () => {
    // Remove the "hoverblock" class when mouse leaves
    animeblock.classList.remove("hoverblock");
  });
});