// Define variables
const navLinks = document.querySelectorAll("nav ul li a");

// Add event listeners to navigation links
navLinks.forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault();
    const sectionId = link.getAttribute("href");
    document.querySelector(sectionId).scrollIntoView({
      behavior: "smooth",
      block: "start",
    });
  });
});
