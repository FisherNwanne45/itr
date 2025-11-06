// Sidebar Expand/Collapse for Sections with Submenus
const sidebar = document.querySelector(".sidebar nav ul");

sidebar.addEventListener("click", function (e) {
  if (e.target.classList.contains("has-sub")) {
    e.preventDefault();
    const submenu = e.target.nextElementSibling;
    submenu.classList.toggle("open");
  }
});

// Mobile Sidebar Toggle
const mobileToggle = document.createElement("div");
mobileToggle.classList.add("mobile-menu-toggle");
mobileToggle.innerHTML = "☰ Menu";
document.body.prepend(mobileToggle);

mobileToggle.addEventListener("click", function () {
  document.querySelector(".sidebar").classList.toggle("sidebar-open");
});

// Smooth Scroll for Internal Links
const internalLinks = document.querySelectorAll('a[href^="#"]');
internalLinks.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
  });
});

// Active Link Highlight based on current URL
const currentPage = window.location.pathname.split("/").pop();
const navLinks = document.querySelectorAll(".sidebar nav ul li a");

navLinks.forEach((link) => {
  if (link.getAttribute("href").includes(currentPage)) {
    link.classList.add("active-link");
  }
});

// Fade-In Effect for Page Content
window.addEventListener("load", () => {
  document.querySelector(".content-area").classList.add("fade-in");
});
