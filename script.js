document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scrollBtn");

  function toggleScrollBtn() {
    if (
      document.body.scrollTop > 20 ||
      document.documentElement.scrollTop > 20
    ) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }

  function scrollToTop() {
    window.scrollTo({
      top: 0
    });
  }

  window.addEventListener("scroll", toggleScrollBtn);

  scrollBtn.addEventListener("click", scrollToTop);

  toggleScrollBtn();
});
