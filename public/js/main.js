// Click tog-show
if (document.querySelector(".tog-active")) {
  let togglesShow = document.querySelectorAll(".tog-active");
  togglesShow.forEach((e) => {
    e.addEventListener("click", (evt) => {
      let divActive = document.querySelector(e.getAttribute("data-active"));
      divActive.classList.toggle("active");
    });
  });
}

// pop-order
if (document.querySelector(".btn-pop-order")) {
  // Open Pop
  let btnsPopOrder = document.querySelectorAll(".btn-pop-order");
  btnsPopOrder.forEach((btn) => {
    btn.addEventListener("click", function () {
      document
        .querySelector("." + btn.dataset.popShow)
        .classList.add("pop-show");
      document.body.classList.add("overflow-hidden");
    });
  });
  // Close Pop
  let closePopOrder = document.querySelectorAll(".order-pop .close");
  closePopOrder.forEach((close) => {
    close.addEventListener("click", () => {
      close.closest(".order-pop").classList.remove("pop-show");
      document.body.classList.remove("overflow-hidden");
    });
  });
}

// Slide Home
if (document.querySelector(".home-slider")) {
  var interleaveOffset = 0.5;
  var swiper3 = new Swiper(".home-slider .swiper", {
    spaceBetween: 0,
    speed: 1500,
    autoplay: {
      delay: 5000,
    },
    watchSlidesProgress: true,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      progress: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".img-slide").style.transform =
            "translate3d(" + innerTranslate + "px, 0, 0)";
        }
      },
      touchStart: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function (speed) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".img-slide").style.transition =
            speed + "ms";
        }
        if (document.querySelector(".swiper-slide.swiper-slide-active")) {
          let serv = document.querySelectorAll(
            ".boxes-service .items-service .item"
          );
          let getServ = document.querySelector(
            "." +
              document
                .querySelector(".swiper-slide.swiper-slide-active")
                .getAttribute("data-show")
          );
          serv.forEach((ser) => ser.classList.remove("active"));
          getServ.classList.add("active");
        }
      },
    },
  });
}

// Count TextArea
function countText() {
  let countArea = event.target
      .closest(".parent-form-add")
      .querySelector(":scope .count-area");
  let theTextArea = event.target;
  let areaMaxLength = event.target.getAttribute("maxlength");
  countArea.innerHTML = `${areaMaxLength} / ${theTextArea.value.length}`;
}