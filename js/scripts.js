function _call_carousel(cnt) {
  // INIT CAROUSEL
  window["carousel_" + cnt] = new CgCarousel(
    "#js-carousel_" + cnt,
    window["carousel_options_" + cnt],
    {},
  );
  // Navigation
  let nextBtn = document.getElementById("js-carousel__next_" + cnt);
  if (nextBtn) {
    nextBtn.addEventListener("click", () => window["carousel_" + cnt].next());
  }
  let prevBtn = document.getElementById("js-carousel__prev_" + cnt);
  if (prevBtn) {
    prevBtn.addEventListener("click", () => window["carousel_" + cnt].prev());
  }
}

$(window).scroll(function () {
  const scrollHeight = $(window).scrollTop();
  const windowWidth = $(window).width();

  if (scrollHeight >= 100) {
    $("#back2Top").fadeIn(1000);
  } else {
    $("#back2Top").fadeOut(1000);
  }

  if (scrollHeight >= 400) {
    $("header").addClass("scrolled");
  } else {
    $("header").removeClass("scrolled");
  }

  if (windowWidth <= 870) {
    $(".sticky-div").css({
      position: "relative",
      top: "0",
      height: "auto",
      overflow: "visible",
    });
  } else {
    if (scrollHeight >= 700) {
      $(".sticky-div").css({
        position: "sticky",
        top: "150px",
        "min-height": "280px",
        overflow: "auto",
      });
    } else {
      $(".sticky-div").css({
        position: "relative",
        top: "0",
        height: "auto",
        overflow: "auto",
      });
    }
  }
});

function _backToTop() {
  event.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
}

function _openMenu() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "0" }, 200);
  $(".live-chat-back-div").animate({ "margin-left": "-100%" }, 400);
  $(".index-menu-back-div").animate({ "margin-left": "0" }, 400);
}

function _openLiveChat() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "0" }, 200);
  $(".index-menu-back-div").animate({ "margin-left": "-100%" }, 400);
  $(".live-chat-back-div").animate({ "margin-left": "0" }, 400);
}

function _closeSideNav() {
  $(".sidenavdiv, .sidenavdiv-in").animate({ "margin-left": "-100%" }, 200);
  $(".index-menu-back-div,.live-chat-back-div").animate(
    { "margin-left": "-100%" },
    400,
  );
}

function _openLi(ids) {
  $("#" + ids + "-sub-li").toggle("slow");
}

let currentIndex = 0;
function _viewPreviewImage(divid) {
    const images = $("#fetchPagePictures .each-img-div");
    currentIndex = images.index($("#" + divid));
    images.removeClass("active");
    const current = $("#" + divid);
    current.addClass("active");
    const src = current.find("img").attr("src");

    $("#galleryMainImage, #seoFlyer")
        .stop(true, true)
        .fadeOut(150, function () {
            $(this).attr("src", src).fadeIn(150);
        });

    // Automatically scroll thumbnail into view
    current[0].scrollIntoView({
        behavior: "smooth",
        inline: "center",
        block: "nearest"
    });
}

function _navigateGallery(direction) {
    const images = $("#fetchPagePictures .each-img-div");
    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = images.length - 1;
    }
    if (currentIndex >= images.length) {
        currentIndex = 0;
    }
  	_viewPreviewImage(images.eq(currentIndex).attr("id"));
}

function _initializeGallery() {
    const firstImage = $("#fetchPagePictures .each-img-div:first");
    if (!firstImage.length) return;
    _viewPreviewImage(firstImage.attr("id"));
}
/// Update Reading time ///
function updateReadingTime() {
  let wordsPerMinute = 200;
  let content = $("#pageContent").text().trim();

  if (content.length > 0) {
      let words = content.split(/\s+/).filter(Boolean).length;
      let minutes = Math.max(1, Math.ceil(words / wordsPerMinute));

      $("#pageContentRead").text(`${minutes} min read`);
  } else {
      $("#pageContentRead").text("1 min read");
  }
}
            
function _navigateBtn() {
  $(document).ready(function () {
    const container = $(".btn-div-in ul");
    const items = $(".btn-div-in ul li");
    const itemWidth = items.outerWidth(true);
    const itemsCount = items.length;
    let currentIndex = 0;
    let visibleItems = 3;

    $(".right-btn").on("click", function () {
      if (currentIndex < itemsCount - visibleItems) {
        currentIndex++;
        container.css(
          "transform",
          `translateX(-${currentIndex * itemWidth}px)`,
        );
      }
    });

    $(".left-btn").on("click", function () {
      if (currentIndex > 0) {
        currentIndex--;
        container.css(
          "transform",
          `translateX(-${currentIndex * itemWidth}px)`,
        );
      }
    });
  });
}

function _slideImages() {
  $(document).ready(function () {
    var container = $(".inner-img-container");
    var imagesCount = $(".each-img-div").length;
    var currentIndex = 0;
    var visibleImages;
    var imageWidth = $(".each-img-div").outerWidth(true);

    function updateVisibleImages() {
      if ($(window).width() <= 767) {
        visibleImages = 1;
      } else {
        visibleImages = 3;
      }
    }

    updateVisibleImages();
    $(window).resize(updateVisibleImages);

    $(document).on("click", ".right-click-btn", function () {
      if (currentIndex < imagesCount - visibleImages) {
        currentIndex++;
        var translateValue = currentIndex * imageWidth;
        container.css("transform", "translateX(-" + translateValue + "px)");
      }
    });

    $(document).on("click", ".left-btn", function () {
      if (currentIndex > 0) {
        currentIndex--;
        var translateValue = currentIndex * imageWidth;
        container.css("transform", "translateX(-" + translateValue + "px)");
      }
    });
  });
}

function _countStatistics() {
  var a = 0;
  $(window).scroll(function () {
    var oTop = $(".statistics-div").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $(".text-cont h2").each(function () {
        var $this = $(this),
          countTo = $this.attr("data-count");
        $({
          countNum: $this.text(),
        }).animate(
          {
            countNum: countTo,
          },
          {
            duration: 10000,
            easing: "swing",
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum + "+"); // Add '+' at the end of the final count
            },
          },
        );
      });
      a = 1;
    }
  });
}
//// Review Section
$(document).ready(function () {
    const params = new URLSearchParams(window.location.search);
    if (params.get('review') === 'true') {
        $('html, body').animate({
            scrollTop: $('#review-section').offset().top
        }, 800, function () {
            _getForm({
                page: 'reviewForm',
                url: siteMiddlewareUrl
            });
        });
    }
});



function _changeMaintenanceStep(stepNumber, clickedStep) {
  $('.how-it-works-progress .step').removeClass('active done');

  $(clickedStep).addClass('active');

  $('.maintenance-step.active-step').removeClass('active-step').removeClass('aos-animate').hide();

  var selectedStep = $('.maintenance-step[data-step="' + stepNumber + '"]');

  selectedStep.addClass('active-step').removeClass('aos-animate').hide().show();

  setTimeout(function () {
    selectedStep.addClass('aos-animate');
  }, 10);
}

function _completeServiceRequest() {
  _showCustomConfirm({
    callback: () => {
      _getNextPage({page:'customreInfoPage'});
    },
    title: "Request Submitted!",
    message: "Your service request has been successfully submitted. Our team will review your request and contact you with the next steps and appointment details.",
    alertType: "success",
    trueActionBtnText: "Okay, Thanks",
    closeOnOverlayClick: false,
  });
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function _proceedIndexServiceRequest() {
  try { 
    ////////get all needed values////////////
    let issueCount = 0;
    const fullName = $("#fullName").val()?.trim();
    const emailAddress = $("#emailAddress").val()?.trim();
    const phoneNumber = $("#phoneNumber").val()?.trim();

    ///// empty field validation//////////
    issueCount += _validateEmptyValue("fullName", "FULL NAME");
    issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
    issueCount += _validateEmptyValue("phoneNumber", "MOBILE NUMBER");
    issueCount += _validateNumber("phoneNumber", phoneNumber);
    issueCount += _validateEmail("emailAddress", "EMAIL ADDRESS");

    if (issueCount > 0) return;

    const btnText = $("#proccedBtn").html();
	  _btnDisable("proccedBtn", btnText, true);

    const formData = {
      fullName,   
      emailAddress,
      phoneNumber,
    };

    /// Set the Artisan Bio data in session ///
    localStorage.setItem(
      "customreBioDataSession",
      JSON.stringify(formData)
    );

    //// Redirect to Customre Service Request Page  ////
    window.location.href = customreServiceRequestUrl;
    _btnDisable("proccedBtn", btnText, false);
  } catch (error) {
  console.error("Error:", error);
    _callCatchError(() => _proceedIndexServiceRequest());
  }
}



//// Page Request for Service
function _pageRequestForService() {
	try {
    let issueCount = 0;
		const fullName = $("#fullName").val().trim();
    const emailAddress = $("#emailAddress").val().trim();
    const phoneNumber = $("#phoneNumber").val().trim();
    const serviceDescription = $("#serviceDescription").val().trim();
    let serviceAddress = userEnteredAddress;
    systemGeneratedAddress = systemGeneratedAddress;
    let distance = systemGeneratedDistance;
    let duration = systemGeneratedDuration;
    
    ///// empty field validation//////////
    issueCount += _validateEmptyValue("fullName", "FULL NAME");
    issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
    issueCount += _validateEmptyValue("phoneNumber", "MOBILE NUMBER");
    issueCount += _validateNumber("phoneNumber", phoneNumber);
    issueCount += _validateEmail("emailAddress", "EMAIL ADDRESS");
    issueCount += _validateEmptyValue("serviceDescription", "SERVICE DESCRIPTION");
    issueCount += _validateEmptyValue("destination", "ADDRESS");

		if (issueCount > 0) return;

		// Gather form data
		const formData = {
			fullName,
			emailAddress,
			phoneNumber,
      serviceDescription,
      serviceAddress,
      systemGeneratedAddress,
      distance,
      duration,
		};

    ////// confirm action////
		_showCustomConfirm({
      callback: () => {
          _pageRequestForServiceCallback(formData);
      },
			title: "Are you sure?",
			message: 'Are you sure you want to submit? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
    });
    } catch (error) {
        console.error("Error:", error);
        _callCatchError(() => _pageRequestForService());
    }
}

//// Page Request for Service Callback ////////
function _pageRequestForServiceCallback(formData) {
    ///// get btn text /////
    const btnText = $("#requestServiceBtn").html();
    _btnDisable("requestServiceBtn", btnText, true);

    ///// call endpoint //////
    _callRawEndPoints({
      url: `site/customers/create-service-request`,
      formData,
    })
	.then((response) => {
		_clearAllSession();
		_showCustomConfirm({
			callback: () => {
				window.location.replace(customreServiceRequestUrl); 
			},
			title: "Request Submitted!",
			message: response?.message,
			alertType: "success",
			trueActionBtnText: "Okay, Thanks",
			closeOnOverlayClick: true,
		});
    })
    .catch((error) => {
        console.error("Error:", error);
        if (error.status == 0) {
            _callAjaxError(() => _pageRequestForServiceCallback(formData), error.message);
            _btnDisable("requestServiceBtn", btnText, false);
        } else {
        _showCustomConfirm({
          title: "Invalid Service Request!",
          message: error.message,
          alertType: "error",
          trueActionBtnText: "OK",
          closeOnOverlayClick: true,
        });
        _btnDisable("requestServiceBtn", btnText, false);
        }
    });
}

//// Clear All Session Storage ///
function _clearAllSession() {
    localStorage.clear();
    sessionStorage.clear();
}