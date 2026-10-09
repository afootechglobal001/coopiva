//// submit review /// 
function _submitReview(reviewType) {
	try {
		////////get all needed values////////////
		let issueCount = 0;
		const fullName = $('#fullName').val()?.trim();
		const emailAddress = $('#emailAddress').val()?.trim();
        const phoneNumber = $('#phoneNumber').val()?.trim();
        const message = $('#message').val()?.trim();
        reviewType === "CONTACT" ? subject = $('#subject').val()?.trim() : subject = "";
		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("fullName", "FULL NAME");
		issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
        issueCount += _validateEmail("emailAddress", 'EMAIL ADDRESS');
		issueCount += _validateEmptyValue("phoneNumber", "PHONE NUMBER");
        issueCount += _validateEmptyValue("message", "MESSAGE");

        if (reviewType === "CONTACT") {
            issueCount += _validateEmptyValue("subject", "SUBJECT");
        }

		if (issueCount > 0) return;

		/////Gather form data////
		const formData = {
            fullName,
            emailAddress,
            phoneNumber,
            message,
           ...(reviewType === "CONTACT" && { subject }),
        };
        //// call callback //////
		_submitReviewCallback(formData, reviewType);
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _submitReview());
	}
}

//// submit review callback /// 
function _submitReviewCallback(formData, reviewType) {
    try {
        ///// get btn text/////
        const btnText = $("#submitBtn").html();
        _btnDisable("submitBtn", btnText, true);
        
        //// call endpoint //////
        _callRawEndPoints({
            url: `site/create-contacts-reviews?crFlag=${reviewType}`,
            formData,
        })
        .then((response) => {
            if (reviewType === "REVIEW") {
                _alertClose();
            } else if (reviewType === "CONTACT") {
                _clearFields(reviewType);
            }
            _showCustomConfirm({
                title: `${reviewType === "REVIEW" ? "Review" : "Contact"} submitted successfully!`,
                message: response.message,
                alertType: "success",
                trueActionBtnText: "Okay, Thanks",
                closeOnOverlayClick: true,
            });
            _btnDisable("submitBtn", btnText, false);
        })
        .catch((error) => {
            console.error("Error:", error);
            if (error.status==0) {
                _callAjaxError(() => _submitReviewCallback(formData, reviewType), error.message); // retry if needed
                _btnDisable("submitBtn", btnText, false);
            } else {
                _showCustomConfirm({
                    title: `Unable to submit ${reviewType === "REVIEW" ? "Review" : "Contact"}`,
                    message: error.message,
                    alertType: "error",
                    trueActionBtnText: "Okay, Thanks",
                    closeOnOverlayClick: true,
                });
                _btnDisable("submitBtn", btnText, false);
            }
        });
    } catch (error) {
        console.error("Error:", error);
        _callCatchError(() => _submitReviewCallback(formData, reviewType));
        _btnDisable("submitBtn", btnText, false);
    }
}

//// clear fields /// 
function _clearFields(reviewType) {
    $('#fullName').val("");
    $('#emailAddress').val("");
    $('#phoneNumber').val("");
    $('#message').val("");
    reviewType === "CONTACT" ? $('#subject').val("") : "";
}

/// fetch site Reviews
function _fetchSiteReviews() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-contacts-reviews`,
		})
		.then((response) => {
            _initFetchSiteReviews(response?.data);
		 })
		.catch((error) => {
            console.error("Error:", error);
            if (error.status==0) {
                _showEmptyState({
					container: 'fetchSiteReviews',
					message: "Check your internet connection and try again",
				});
            } else {
                _showEmptyState({
					container: 'fetchSiteReviews',
					message: error.message,
				});
            }
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// init fetch site Reviews
function _initFetchSiteReviews(data) {
  	const content = data.map((item) => `
   		<div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
			<div class="main-testimonial">
                <div class="top-wrapper">
                    <div class="img-back-div">
                        <div class="name-div">
                            <h3>${getFirstLettersOfEachWord(item?.fullName)}</h3>
                        </div>
                        <div class="icon">
                            <i class="bi-quote"></i>
                        </div>
                    </div>

                    <div class="content">
                        <div class="star-div">
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                        </div>

                        <h5>${item?.fullName ||"Unknown"}</h5>
                    </div>
                </div>

                <p>${item?.message}</p>
            </div>
		</div>`).join("");
    $('#fetchSiteReviews').html(content);
	_call_carousel(1);
}

/// fetch page Reviews
function _fetchPageReviews() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-contacts-reviews`,
		})
		.then((response) => {
            _initFetchPageReviews(response?.data);
		 })
		.catch((error) => {
            console.error("Error:", error);
            if (error.status==0) {
                _showEmptyState({
					container: 'fetchPageReviews',
					message: "Check your internet connection and try again",
				});
            } else {
                _showEmptyState({
					container: 'fetchPageReviews',
					message: error.message,
				});
            }
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// init fetch page Reviews
function _initFetchPageReviews(data) {
  	const content = data.map((item) => `
        <div class="main-testimonial page-testimonial">
            <div class="top-wrapper">
                <div class="img-back-div">
                    <div class="name-div">
                        <h3>${getFirstLettersOfEachWord(item?.fullName)}</h3>
                    </div>
                    <div class="icon">
                        <i class="bi-quote"></i>
                    </div>
                </div>

                <div class="content">
                    <div class="star-div">
                        <i class="bi-star-fill"></i>
                        <i class="bi-star-fill"></i>
                        <i class="bi-star-fill"></i>
                        <i class="bi-star-fill"></i>
                        <i class="bi-star-fill"></i>
                    </div>

                    <h5>${item?.fullName ||"Unknown"}</h5>
                </div>
            </div>

            <p>${item?.message}</p>
        </div>`).join("");
    $('#fetchPageReviewsContent').html(content);
}