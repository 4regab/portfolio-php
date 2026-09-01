(function () {
  try {
    var t = localStorage.getItem("portfolio-theme");
    if (t === "blue" || t === "light" || t === "dark") {
      document.documentElement.setAttribute("data-theme", t);
    }
  } catch (e) {}
})();
