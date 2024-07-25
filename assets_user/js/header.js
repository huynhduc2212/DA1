document.querySelectorAll(".nav-item").forEach((item) => {
  item.addEventListener("mouseenter", function (event) {
    // const itemSmall = event.target.querySelector(".item-small");
    const megaContent = event.target.querySelector(".mega-content");
    const dropLink = event.target.querySelector(".link-item");
    const dropdownCaret = event.target.querySelector(".fa-caret-down");

    dropLink && (dropLink.style.color = "#bf9f70");
    dropdownCaret && (dropdownCaret.style.color = "#bf9f70");
    // itemSmall && itemSmall.classList.add("active");
    megaContent && megaContent.classList.add("active");
    dropdownCaret &&
      dropdownCaret.classList.replace("fa-caret-down", "fa-caret-up");
  });

  item.addEventListener("mouseleave", function (event) {
    // const itemSmall = event.target.querySelector(".item-small");
    const megaContent = event.target.querySelector(".mega-content");
    const dropLink = event.target.querySelector(".link-item");
    const dropdownCaret = event.target.querySelector(".fa-caret-up");

    dropLink && (dropLink.style.color = "");
    dropdownCaret && (dropdownCaret.style.color = "");
    // itemSmall && itemSmall.classList.remove("active");
    megaContent && megaContent.classList.remove("active");
    dropdownCaret &&
      dropdownCaret.classList.replace("fa-caret-up", "fa-caret-down");
  });
});
