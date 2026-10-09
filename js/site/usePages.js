/// Fetch Page List ///
function _getPageList(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
		pageContainer = '',
		categoryId = '',
		professionId = '',
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit||''}&categoryId=${categoryId||''}&professionId=${professionId||''}`,
		})
		.then((response) => {
			_pageListDisplay(response?.data, pageContainer);
		 })
		 .catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: pageContainer,
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: pageContainer,
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Display Page List ////
function _pageListDisplay(data, pageContainer) {
    if (pageContainer=='indexServicePageContent' || pageContainer=='allServicePageContent') {
	    _indexServicesData(data, pageContainer);
	}
	if (pageContainer=='relatedServicesCont') {
	    _pageRelatedServicesData(data, pageContainer);
    }
	if (pageContainer=='indexBlogPageContainer' || pageContainer=='allRelatedBlogPageContainer') {
	    _indexBlogData(data, pageContainer);   
	}
	if (pageContainer=='pageMainBlogPageContainer') {
	    _pageMainBlogData(data, pageContainer);   
	}
	if (pageContainer=='relatedPageBlogContent') {
	    _pageRelatedBlogData(data, pageContainer);   
	}
	if (pageContainer=='footerServiceList') {
	    _footerServicesListData(data, pageContainer);   
	}
	if (pageContainer=='headerServiceList') {
	    _headerServicesListData(data, pageContainer);   
	}
	if (pageContainer=='allGalleryContainer') {
	    _pageGalleryListData(data, pageContainer);   
	}
}

/// Initialize Fetch Service List ///
function _indexServicesData(data, pageContainer) {
	const content = data.map((item, index) => {
		const buttonId = `serviceBtn_${index}`;

		return `
			<div class="service-div" data-aos="fade-up" data-aos-duration="1200">
				<div class="image-div">
					<img 
						src="${servicePixPath}/${item.seoFlyer}?t=${new Date().getTime()}" 
						alt="${item.title}" 
					/>
				</div>

				<div class="icon-div">
					<img 
						src="${websiteUrl}/all-images/images/icon.png"
						alt="${item.title} Icon" 
					/>
				</div>

				<a href="${websiteUrl}/services/${item.pageUrl}">
					<div class="text-div">
						<h3>${item.pageTitle}</h3>
						<p>
							${item?.seoDescription?.substring(0, 90) || ''}
							${item?.seoDescription?.length > 90 ?'...' : ''}
						</p>
						<div class="btn-div" id="${buttonId}"></div>
					</div>
				</a>
			</div>
		`;
	}).join("");

	// First inject the HTML
	$(`#${pageContainer}`).html(content);

	// Then inject the buttons
	data.forEach((item, index) => {
		generalButtons({
			container: `serviceBtn_${index}`,
			buttons: [
				{
					id: `learnMore_${index}`,
					text: "Learn More",
					icon: "bi bi-arrow-right-circle",
					width: "btn-full",
					iconPosition: "right"
				}
			]
		});
	});
}

/// Initialize Fetch Page Related Service List ///
function _pageRelatedServicesData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<a href="${websiteUrl}/services/${item.pageUrl}">
      	<div class="services-cont">
			<div class="icon">
				<i class="bi bi-check2-circle"></i>
			</div>
			<div class="content">
				<h4 title="${item.pageTitle}">${item.pageTitle}</h4>  
			</div>
		</div>
	</a>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Index Blog List ///
function _indexBlogData(data, pageContainer) {
	const content = data.map((item, index) => {
		const buttonHtml = `blogBtn_${index}`;

		return `
			<div class="blog-div">
				<div class="blog-inner-div">
					<div class="title">${item.categoryData?.categoryName}</div>
					<div class="image-div">
						<img src="${blogPixPath}/${item.seoFlyer}"
						alt="${item.pageTitle}" />
					</div>

					<div class="text-div">
						<div class="count">
							<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
							<span>|</span>
							<i class="bi-eye-fill"></i> ${item.viewCount} VIEWS
						</div>

						<h3>${item.pageTitle}</h3>
						<p>
							${item?.seoDescription.substring(0, 90)}
							${item?.seoDescription.length > 90 ? '...' : ''}
						</p>

						<div 
							class="btn-div" 
							id="${buttonHtml}">
						</div>
					</div>
				</div>
			</div>
		`;
	}).join("");
	
	// First inject the HTML
	$(`#${pageContainer}`).html(content);

	// Then inject the buttons
	data.forEach((item, index) => {
		generalButtons({
			container: `blogBtn_${index}`,
			buttons: [
				{
					id: `readMore_${index}`,
					text: "Read More",
					icon: "bi bi-arrow-right-circle",
					width: "btn-full",
					iconPosition: "right",
					link: `${websiteUrl}/blog/${item.pageUrl}`
				}
			]
		});
	});
}

/// Initialize Fetch Main Blog List ///
function _pageMainBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
	<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
		<div class="main-blog-div">
			<div class="top-text">${item.categoryData?.categoryName}</div>
			<div class="image-div">
				<img src="${blogPixPath}/${item.seoFlyer}"
				alt="${item.pageTitle}" />
			</div>
			<div class="text-content-div">
				<h2>${item.pageTitle}</h2>
				<div class="count">
					<i class="bi-calendar3"></i> ${_fetchFormatDate(item.updatedTime)}
					<span> | </span>
					<i class="bi-eye"></i> ${item.viewCount} VIEWS
				</div>
				<p>
					${item.seoDescription}
				</p>
				<div>
					<button class="btn" title="Read More">
						Read More <i class="bi-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
	</a>`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Related Blog List ///
function _pageRelatedBlogData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<a href="${websiteUrl}/blog/${item.pageUrl}" title="${item.pageTitle}">
			<div class="related-post">
				<div class="image-div">
					<img src="${blogPixPath}/${item.seoFlyer}"
					alt="${item.pageTitle}" />
				</div>
				<div class="cont-div">
					<h3>${item.pageTitle}</h3>
					<div class="comment">
						<i class="bi-clock"></i> 
						<span>${_fetchFormatDate(item.updatedTime)}</span>
					</div>
				</div>
			</div>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Footer Services List ///
function _footerServicesListData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<a href="${websiteUrl}/services/${item.pageUrl}" title="${item.pageTitle}">
			<li><i class="bi bi-chevron-right"></i> ${item.pageTitle}</li>
		</a>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Header Services List ///
function _headerServicesListData(data, pageContainer) {
	const bgClasses = ["bg-1", "bg-2", "bg-3", "bg-4"];
	const content = data.map((item, index) => {
		const bgClass = bgClasses[index % bgClasses.length];

		return `
			<a class="listig-div" href="${websiteUrl}/services/${item?.pageUrl ?? ""}" title="${item?.pageTitle ?? ""}">
				<div class="icon-div ${bgClass}">
					<i class="bi bi-tools"></i>
				</div>

				<div class="text-div">
					<h3>${item?.pageTitle ?? ""}</h3>
					<p>${item?.seoDescription?.substring(0, 30)}...</p>
				</div>
			</a>
		`;
	}).join("");
	$(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Gallery List ///
function _pageGalleryListData(data, pageContainer) {
	const content = data.map((item) => {
	return `
		<div class="gallery-card" onclick="_fetchEachGallery('${item?.pageId}');">
			<div class="title ${item?.professionData?.professionName}">${item?.professionData?.professionName}</div>
			<div class="image-div">
				<img src="${galleryPixPath}/${item?.seoFlyer}?t=${Date.now()}" alt="${item?.pageTitle}" />
			</div>
			<div class="card-content">
				<h3 class="card-title" title="${item?.pageTitle}">${item?.pageTitle}</h3>
				<div class="gallery-meta">
					<div class="location"><i class="bi bi-calendar3"></i> <span>${_fetchFormatDate(item?.updatedTime)}</span>
					</div>
					<div class="location"><i class="bi bi-images"></i> <span>${item?.pagePicturesData?.length}</span></div>
				</div>
			</div>
		</div>
	`;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

//// Fetch Each Gallery ////
function _fetchEachGallery(pageId) {
    $("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-page?pageCategory=GALLERY&pageId=${pageId}`,
		})
		.then((response) => {
			sessionStorage.setItem("getEachGalleySessionData", JSON.stringify(response?.data?.[0]));
			_getForm({page:'galleryDetails', url:siteMiddlewareUrl});
		 })
		.catch((error) => {
			_alertClose();
			console.error("Error:", error);
			_callAjaxError(() => _fetchEachGallery(pageId), error.message); // retry if needed
		});
	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _fetchEachGallery(pageId));
  	}
}

/// Fetch Each Page Details ///
function _getEachPageDetails(options) {
    const {
        pageCategory = "",
        limit = '',
        pageId = '',
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}&limit=${limit||''}`,
		})
		.then((response) => {
			const data = response?.data[0];
			const pageTitle = data.pageTitle;
			const seoDescription = data.seoDescription;
			const pageContent = data.pageContent;
			const seoFlyer = data.seoFlyer;
			const updatedTime = data.updatedTime;
			const viewCount = data.viewCount;
			const createdByName =
			data.createdByData?.fullname ??
			data.updatedByData?.fullname ??'';

			const createdByEmail =
			data.createdByData?.emailAddress ??
			data.updatedByData?.emailAddress ?? '';

			let pixPath = '';
			if (pageCategory=='PORTFOLIO') {
				pixPath = portfolioPixPath;
			} else if (pageCategory=='SERVICE') {
				pixPath = servicePixPath;
			} else if (pageCategory=='BLOG') {
				pixPath = blogPixPath;
			}

			$('#pageTitle').html(pageTitle);
			$('#seoDescription').html(seoDescription);
			$('#pageContent').html(pageContent);
			$('#createdByName').html(createdByName);
			$('#createdByEmail').html(createdByEmail);
			$('#updatedTime').html(_fetchFormatDate(updatedTime));
			$('#viewCount').html(viewCount);
			$('#seoFlyer').attr('src',`${pixPath}/${seoFlyer}?t=${new Date().getTime()}`);
			updateReadingTime();
			
			const picturesArray = data?.pagePicturesData ?? [];
			let pixHtml = '';

			for (let item of picturesArray) {
				pixHtml += `
					<div class="each-img-div" title="Click to Preview" id="img${item.sn}"
						onclick="_viewPreviewImage('img${item.sn}', 'pagePreviewPix')">
						<img src="${pagesPixPath}/${item.pagePix}"
						alt="${pageTitle}" />
					</div>
				`;
			}
			$('#fetchPagePictures').html(pixHtml);
			if (picturesArray.length>0) {
				$('.bottom-img-div').show();
			} else {
				$(".bottom-img-div").hide();
			}
		})
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_actionAlert("Check your internet connection and try again", false);
			} else {
				_actionAlert(error.message, false);
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Filter Pages Data ////
function _filtersPages(value, pageContainer, container) {
    value = value.trim().toLowerCase();
    const $container = $(`#${pageContainer}`);
    // Cache the original HTML once
    if (!$container.data('originalHtml')) {
        $container.data('originalHtml', $container.html());
    }
    // Restore the original content when search is cleared
    if (value === '') {
        $container.html($container.data('originalHtml'));
        return;
    }
    let visibleCount = 0;
    $container.find(`.${container}`).each(function () {
        const text = $(this).text().toLowerCase();
        if (text.includes(value)) {
            $(this).show();
            visibleCount++;
        } else {
            $(this).hide();
        }
    });
    if (visibleCount === 0) {
        _showEmptyState({
            container: pageContainer,
            message: "No Record found!!!",
        });
    }
}

//// Filter Pages Data ////
function _filtersBlog(value) {
    value = value.trim().toLowerCase();
    const containers = [
        {
            container: 'pageMainBlogPageContainer',
            items: '.main-blog-div'
        },
        {
            container: 'allRelatedBlogPageContainer',
            items: '.blog-div'
        }
    ];

    containers.forEach(({ container, items }) => {
        const $container = $(`#${container}`);
        // Cache the original HTML only after the blog items have loaded
        if (
            !$container.data('originalHtml') &&
            $container.find(items).length > 0
        ) {
            $container.data('originalHtml', $container.html());
        }
        // Restore the original content when search is cleared
        if (value === '') {
            if ($container.data('originalHtml')) {
                $container.html($container.data('originalHtml'));
            }
            return;
        }
        let visibleCount = 0;
        // Filter items
        $container.find(items).each(function () {
            const text = $(this).text().toLowerCase();
            if (text.includes(value)) {
                $(this).show();
                visibleCount++;
            } else {
                $(this).hide();
            }
        });
        // Show empty state if no records found
        if (visibleCount === 0) {
            _showEmptyState({
                container: container,
                message: "No Record found!!!",
            });
        }
    });
}

/// Fetch Faq List ///
function _getFaqList(options = {}) {
	const {
		pageContainer = "",
		limit,
		categoryId,
		faqKey,
	} = options;

	try {
		///// append any option if passded ///
		const params = new URLSearchParams();

		if (limit !== undefined && limit !== null && limit !== '') {
			params.append('limit', limit);
		}

		if (categoryId !== undefined && categoryId !== null && categoryId !== '') {
			params.append('categoryId', categoryId);
		}

		if (faqKey !== undefined && faqKey !== null && faqKey !== '') {
			params.append('faqKey', faqKey);
		}

		const queryString = params.toString();

		_callFetchEndPoints({
			url: `site/fetch-faq${queryString ? `?${queryString}` : ''}`,
		})
		.then((response) => {
			_faqListDisplay(response?.data, pageContainer);
		})
		.catch((error) => {
			console.error("Error:", error);

			if (error.status == 0) {
				_showEmptyState({
					container: pageContainer,
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: pageContainer,
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
	}
}

//// Display Faq List ////
function _faqListDisplay(data, pageContainer) {
    if (pageContainer=='indexFaqPageContent') {
	    _indexFaqData(data, pageContainer);
	}
	if (pageContainer=='faqPageContent') {
	    _faqData(data, pageContainer);
	}
	if (pageContainer=='sitePagesFaqContent') {
	    _siteFaqPagesData(data, pageContainer);
	}
}

/// Initialize Fetch Index Faq List ///
function _indexFaqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-toggle" id="faq${index+1}">
			<div class="title-text" onclick="_collapse('faq${index+1}')">
				<div class="quest-text-div">
					<div class="icon-div"><i class="bi-question"></i></div>
					<h3>${item.faqQuestion}</h3>
				</div>
				<div class="expand-div" id="faq${index+1}num">
					<i class="bi bi-plus"></i>
				</div>
			</div>
			<div class="answer-div" id="faq${index+1}answer" style="display: none;">
				<p>${item.faqAnswer}</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Page Faq List ///
function _faqData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-title" id="faq${index+1}">
			<div class="inner-title-div" onclick="_collapse('faq${index+1}')">
				<h2>${item.faqQuestion}</h2>

				<div class="expand-div" id="faq${index+1}num">
					&nbsp;<i class="bi-plus"></i>&nbsp;
				</div>
			</div>
			<div class="faq-answer-div" id="faq${index+1}answer" style="display: none;">
				<p>
					${item.faqAnswer}
				</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Initialize Fetch Pages Faq List ///
function _siteFaqPagesData(data, pageContainer) {
	const content = data.map((item, index) => {
    return `
      	<div class="faq-title" id="faq${index+1}">
			<div class="inner-title-div" onclick="_collapse('faq${index+1}')">
				<h2>${item?.faqQuestion}</h2>

				<div class="expand-div" id="faq${index+1}num">
					&nbsp;<i class="bi-plus"></i>&nbsp;
				</div>
			</div>

			<div class="faq-answer-div" id="faq${index+1}answer" style="display: none;">
				<p>
					${item?.faqAnswer}
				</p>
			</div>
		</div>
    `;
  }).join("");
  $(`#${pageContainer}`).html(content);
}

/// Fetch Category List ///
function _fetchProfessionTab(pageCategory, pageContainer) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-professions`,
		})
		.then((response) => {
			let text = `
				<button 
					class="btn active" 
					title="All"
					onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '', '');">
					All
				</button>
			`;
			for (let i = 0; i < response?.data?.length; i++) {
				const professionId = response?.data[i].professionId;
				const value = response?.data[i].professionName;
				text += `<button class="btn" title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '', '${professionId}');">${value}</button>`;
			}
			$('#fetchGalleryTabContnent').html(text);
		 })
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: 'fetchGalleryTabContnent',
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: 'fetchGalleryTabContnent',
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

$(document).on('click', '#fetchGalleryTabContnent .btn', function () {
	$(this).addClass('active').siblings('.btn').removeClass('active');
});

/// Fetch Category List ///
function _fetchCategoryList(pageCategory, pageContainer) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-information-category`,
		})
		.then((response) => {
			let text = '';
			for (let i = 0; i < response.data.length; i++) {
				const categoryId = response.data[i].categoryId;
				const value = response.data[i].categoryName;
				text += `<li title="${value}" onclick="_fetchTabPagesData('${pageCategory}', '${pageContainer}', '${categoryId}', '');">${value}</li>`;
			}
			$('#catId').html(text);
		 })
		.catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: 'catId',
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: 'catId',
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Fetch Tab Pages Data ///
function _fetchTabPagesData(pageCategory, pageContainers, categoryId, professionId) {
    pageContainers.split(',').forEach(function(pageContainer){
        pageContainer = pageContainer.trim();

        $(`#${pageContainer}`).html(`
            <div class="content-loading-div">
                <img src="${websiteUrl}/all-images/images/spinner.gif" alt="Loading" />
            </div>
        `);

		if (pageCategory === "FAQ") {
			_getFaqList({
				pageContainer: pageContainer,
				categoryId: categoryId,
			});
        } else {
            _getPageList({
                pageCategory: pageCategory,
                pageContainer: pageContainer,
				categoryId: categoryId,
				professionId: professionId,
            });
        }
    });
}

//// Fetch Profession List/////
function _getProfessionList(options) {
    const {
        pageContainer = "",
    } = options;
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `site/fetch-professions`,
		})
		.then((response) => {
			_professionListDisplay(response?.data, pageContainer);
		 })
		 .catch((error) => {
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: pageContainer,
					message: "Check your internet connection and try again",
				});
			} else {
				_showEmptyState({
					container: pageContainer,
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
  	}
}

//// Display Profession List ////
function _professionListDisplay(data, pageContainer) {
    if (pageContainer=='indexProfessionContent') {
	    _indexProfessionData(data, pageContainer);
	}
	if (pageContainer=='pagesProfessionContent') {
	    _pagesProfessionData(data, pageContainer);
	}
}

/// Fetch Index Profession Data////
function _indexProfessionData(data, pageContainer) {
	const content = data.map((item) => {
    return `
      	<div class="each-services" title="${item?.professionName}">
			<div class="img-div">
				<img src="${professionIconPath}/${item?.professionIcon}?t=${new Date().getTime()}"
				alt="${item?.professionName}">
			</div>

			<div class="text-div">
				<h4>${item?.professionName}</h4>
			</div>
		</div>
    `;
  }).join("");
	$(`#${pageContainer}`).html(content);
	$('.service-slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 3000,
		infinite: true,
		cssEase: 'linear',
		arrows: false,
		pauseOnHover: false,
		pauseOnFocus: false,
		variableWidth: true
	});
}

/// Fetch Pages Profession Data////
function _pagesProfessionData(data, pageContainer) {
	const content = data.map((item, index) => {
	const buttonId = `servicePageBtn_${index}`;

		return `
      	<div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
			<div class="service-div page-service-div">
				<div class="image-div">
					<img src="${professionImagePath}/${item?.professionImage}?t=${new Date().getTime()}" alt="${item?.professionName}" />
				</div>

				<div class="icon-div">
					<img src="${professionIconPath}/${item?.professionIcon}?t=${new Date().getTime()}"
						alt="${item?.professionName}">
				</div>

				<div class="text-div">
					<h3>${item?.professionName}</h3>
					<p>${item?.professionDescription?.substring(0, 120)}...</p>

					<div class="btn-div" id="${buttonId}"></div>
				</div>
			</div>
		</div>
    `;
  }).join("");
	$(`#${pageContainer}`).html(content);
	_call_carousel(1);
	
	// Then inject the buttons
	data.forEach((item, index) => {
		generalButtons({
			container: `servicePageBtn_${index}`,
			buttons: [{
				text: "Request Service Now",
				icon: "bi bi-arrow-right-circle",
				width: "btn-full",
				iconPosition: "right",
				link: `${websiteUrl}/request-service`
			}]
		});
	});
}