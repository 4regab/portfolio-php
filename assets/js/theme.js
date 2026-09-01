(function () {
  var STORAGE_KEY = "portfolio-theme";
  var themes = ["blue", "light", "dark"];

  function getTheme() {
    return document.documentElement.getAttribute("data-theme") || "blue";
  }

  function setTheme(theme) {
    if (themes.indexOf(theme) === -1) theme = "blue";
    document.documentElement.setAttribute("data-theme", theme);
    try {
      localStorage.setItem(STORAGE_KEY, theme);
    } catch (e) {}
    syncButtons(theme);
  }

  function syncButtons(theme) {
    var buttons = document.querySelectorAll(".theme-switch__btn[data-theme]");
    buttons.forEach(function (btn) {
      var active = btn.getAttribute("data-theme") === theme;
      btn.classList.toggle("is-active", active);
      btn.setAttribute("aria-pressed", active ? "true" : "false");
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    syncButtons(getTheme());

    document.querySelectorAll(".theme-switch__btn[data-theme]").forEach(function (btn) {
      btn.addEventListener("click", function () {
        setTheme(btn.getAttribute("data-theme"));
      });
    });
  });
})();
