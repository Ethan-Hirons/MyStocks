document.addEventListener("DOMContentLoaded", () => {
  const topbar = document.getElementById("topbar");

  const onScroll = () => {
    if (window.scrollY > 10) topbar.classList.add("scrolled");
    else topbar.classList.remove("scrolled");
  };
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });

  const items = document.querySelectorAll(".reveal");
  const io = new IntersectionObserver(
    (entries) => {
      entries.forEach((e) => {
        if (e.isIntersecting) e.target.classList.add("in");
      });
    },
    { threshold: 0.15 },
  );

  items.forEach((el) => io.observe(el));
});
