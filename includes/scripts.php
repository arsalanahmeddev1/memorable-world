<script src="./assets/book/lib/turn.min.js"></script>
<script type="text/javascript">
    //custom code 1/11/23.
    var imgId = null;

    function setImgId(id) {
        imgId = id;
    }

    function getImgId() {
        return imgId;
    }
    $(document).ready(function() {
        $('.initBook').on('click', function() {
            var imgId = $(this).attr('id');
            setImgId(imgId);
            // console.log('Clicked image id: ' + imgId);
            // for(let i = 0; i < )
        });
        // Disable page turning for elements with the class "sj-book"
    });
    //custom code ends
    function loadApp(pagenumber = undefined) {
        var flipbook = $('.sj-book');
        // Check if the CSS was already loaded
        if (flipbook.width() == 0 || flipbook.height() == 0) {
            setTimeout(loadApp, 10);
            return;
        }
        // console.log(flipbook);
        Hash.on('^page\/([0-9]*)$', {
            yep: function(path, parts) {

                var page = parts[1];
                // alert(page)
                if (page !== undefined) {
                    if ($('.sj-book').turn('is')) {
                        setTimeout(function() {
                            $('.sj-book').turn('page', 2);
                        }, 500);
                    }
                }
            },
            nop: function(path) {
                if ($('.sj-book').turn('is'))
                    $('.sj-book').turn('page', pagenumber === undefined ? 1 : pagenumber);
            }
        });

        // Arrows

        $(document).keydown(function(e) {
            var previous = 37,
                next = 39;
            switch (e.keyCode) {
                case previous:
                    $('.sj-book').turn('previous');
                    break;
                case next:
                    $('.sj-book').turn('next');
                    break;
            }
        });


        // Flipbook

        flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);
        flipbook.turn({
            elevation: 20,
            acceleration: !isChrome(),
            autoCenter: true,
            gradients: true,
            duration: 1000,
            pages: 112,
            when: {
                turning: function(e, page, view) {
                    var book = $(this),
                        currentPage = book.turn('page'),
                        pages = book.turn('pages');
                    if (currentPage > 3 && currentPage < pages - 3) {
                        if (page == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (page == pages) {
                            book.turn(false, pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    } else if (page > 3 && page < pages - 3) {
                        if (currentPage == 1) {
                            book.turn(false).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (currentPage == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    }
                    updateDepth(book, page);
                    personalDiaryBookFunc(page);
                    if (page >= 2)
                        $('.sj-book .p2').addClass('fixed');
                    else
                        $('.sj-book .p2').removeClass('fixed');

                    // if (page < book.turn('pages'))
                    //     $('.sj-book .p111').addClass('fixed');
                    // else
                    //     $('.sj-book .p111').removeClass('fixed');                
                    if (page < book.turn('pages')) {
                        $('.sj-book .p111').addClass('fixed');
                    } else {
                        $('.sj-book .p111').removeClass('fixed');
                    }
                    Hash.go('page/' + page).update();
                    console.log('currentPage:', currentPage);
                    console.log('pages:', pages);
                    console.log('target page:', page);
                },

                // turned: function(e, page, view) {

                //     var book = $(this);

                //     if (page == 2 || page == 3) {
                //         book.turn('peel', 'br');
                //     }

                //     updateDepth(book);

                //     $('#slider').slider('value', getViewNumber(book, page));

                //     book.turn('center');

                // },

                turned: function(e, page, view) {

                    // custome code

                    let [targetArea1, targetArea2] = view
                    let targetFirst = 3
                    targetArea1 += 2
                    targetArea2 += 2
                    let min = function minus(a, b) {
                        return a - b
                    }
                    // console.log(min(targetArea1, 1))
                    getImgId()
                    let preview1 = $(`.${getImgId()}target` + min(targetArea1, 1)).html();
                    let preview2 = $(`.${getImgId()}target` + min(targetArea2, 1)).html();
                    let preview3 = $(`.${getImgId()}target` + min(targetArea1, 2)).html();
                    let preview4 = $(`.${getImgId()}target` + min(targetArea2, 2)).html();
                    let preview5 = $(`.${getImgId()}target` + min(targetArea1, 3)).html();
                    let preview6 = $(`.${getImgId()}target` + min(targetArea2, 3)).html();
                    let preview7 = $(`.${getImgId()}target` + min(targetArea1, 4)).html();
                    let view1 = $(`.${getImgId()}target` + targetArea1).html();
                    let view2 = $(`.${getImgId()}target` + targetArea2).html();
                    let first = $(`.${getImgId()}target3`).html();
                    // totalPg = $(".back-side").data("pages");
                    // let last = $(`.${getImgId()}target` + totalPg).html();

                    function updatePg() {
                        let prevous1 = $('.sj-book .p' + min(targetArea1, 1))
                        let prevous2 = $('.sj-book .p' + min(targetArea2, 1))
                        let prevous3 = $('.sj-book .p' + min(targetArea1, 2))
                        let prevous4 = $('.sj-book .p' + min(targetArea2, 2))
                        let prevous5 = $('.sj-book .p' + min(targetArea1, 3))
                        let prevous6 = $('.sj-book .p' + min(targetArea2, 3))
                        let prevous7 = $('.sj-book .p' + min(targetArea1, 4))
                        let pg1 = $('.sj-book .p' + targetArea1)
                        let pg2 = $('.sj-book .p' + targetArea2)
                        if (!prevous1.hasClass('seconde') && !prevous1.hasClass('last')) {
                            prevous1.html(preview1);
                            // console.log(prevous1)
                        }
                        if (!prevous2.hasClass('seconde') && !prevous2.hasClass('last')) {
                            prevous2.html(preview2);
                            // console.log(prevous2)
                        }
                        if (!prevous3.hasClass('seconde') && !prevous3.hasClass('last')) {
                            prevous3.html(preview3);
                            // console.log(prevous3)
                        }
                        if (!prevous4.hasClass('seconde') && !prevous4.hasClass('last')) {
                            prevous4.html(preview4);
                            // console.log(prevous4)
                        }
                        if (!prevous5.hasClass('seconde') && !prevous5.hasClass('last')) {
                            prevous5.html(preview5);
                            // console.log(prevous5)
                        }
                        if (!prevous6.hasClass('seconde') && !prevous6.hasClass('last')) {
                            prevous6.html(preview6);
                            // console.log(prevous6)
                        }
                        if (!prevous7.hasClass('seconde') && !prevous7.hasClass('last')) {
                            prevous7.html(preview7);
                            // console.log(prevous6)
                        }
                        if (!pg1.hasClass('seconde') && !pg1.hasClass('last')) {
                            pg1.html(view1);
                        }
                        if (!pg2.hasClass('seconde') && !pg2.hasClass('last')) {
                            pg2.html(view2);
                        }
                    }
                    // console.log(view1)
                    // console.log(targetArea1)
                    // console.log(view2)
                    // console.log(targetArea2)
                    updatePg()


                    // console.log("turned")

                    // custome code end


                    var book = $(this);

                    if (page == 2 || page == 3) {
                        book.turn('peel', 'br');
                    }

                    updateDepth(book);

                    $('#slider').slider('value', getViewNumber(book, page));

                    book.turn('center');

                },

                start: function(e, pageObj) {

                    moveBar(true);

                },

                end: function(e, pageObj) {

                    var book = $(this);

                    updateDepth(book);

                    setTimeout(function() {

                        $('#slider').slider('value', getViewNumber(book));

                    }, 1);

                    moveBar(false);

                },

                missing: function(e, pages) {

                    for (var i = 0; i < pages.length; i++) {
                        addPage(pages[i], $(this));
                    }

                }
            }
        });

        function updateFlipbookDimensions() {
            var flipbook = $('.sj-book');
            var windowWidth = $(window).width();

            if (windowWidth <= 991) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 650, 500);
            }
            if (windowWidth <= 480) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 350, 210);
            }
            // if (windowWidth <= 648) {
            //     flipbook.turn('size', 450, 300)
            // }
        }

        // Initial call to set dimensions based on window width
        updateFlipbookDimensions();

        // Listen for window resize events
        $(window).resize(function() {
            updateFlipbookDimensions();
        });

        $('#slider').slider('option', 'max', numberOfViews(flipbook));

        flipbook.addClass('animated');

        // Show canvas

        $('#canvas').css({
            visibility: ''
        });
    }

    // Hide canvas

    // $('#canvas').css({visibility: 'hidden'});

    // Load turn.js

    $(document).ready(function() {
        // yepnope({
        // 	test: Modernizr.csstransforms,
        // 	yep: ['../../assests/book/lib/turn.min.js'],
        // 	nope: ['../../assests/book/lib/turn.html4.min.js', 'css/jquery.ui.html4.css', 'css/steve-jobs-html4.css'],
        // 	both: ['js/steve-jobs.js', 'css/jquery.ui.css', 'css/steve-jobs.css'],
        // 	complete: loadApp
        // });

    });



    // $('#album').turn({ gradients: true, acceleration: true });
</script>
<script>
    (function($) {
        $.getStylesheet = function(href) {
            var $d = $.Deferred();
            var $link = $('<link/>', {
                rel: 'stylesheet',
                type: 'text/css',
                href: href
            }).appendTo('head');
            $d.resolve($link);
            return $d.promise();
        };
    })(jQuery);

    var smBooks = document.querySelectorAll(".sm-book");

    var album = document.querySelector(".sj-book");
    var crossButton = document.querySelector(".cross-button");
    var filterButton = document.querySelectorAll(".filter-button");
    crossButton.style.visibility = "hidden";
    let filterCloseButton = document.querySelectorAll('.filter-cross-button')
    let bookSearchButton = document.querySelectorAll('.book-search-button')
    let dailyQuote = document.querySelectorAll('.daily-quote-search-page')
    let personalDiaryBook = document.querySelectorAll('.personal-diary-book');
    let personalDiaryPage = document.querySelectorAll('.personal-diary-page');
    let editorButton = document.querySelectorAll('.editor-btn');
    let ckEditorPage = document.querySelectorAll('.ck-editor-page');
    let uploadButton = document.querySelectorAll('.upload-button');
    let uploadCoverPage = document.querySelectorAll('.submit');
    let librabrySearchBtn = document.querySelectorAll('.library-search-button');
    let personalDiarySearchPage = document.querySelectorAll('.personal-diary-search-page')
    let editorBtn = document.querySelectorAll('.search-btn');
    let createDiaryBook = document.querySelectorAll('.create-diary-book');
    let createDiaryPage = document.querySelectorAll('.create-diary-page');
    let newBookCrossButton = document.querySelectorAll('.new-book-cross-button')
    let bookBeforeSubmit = document.querySelectorAll('.before-submit')
    let filterCrossPosition = document.querySelectorAll('.filter-cross-position')
    let hideBtn = document.querySelectorAll('.hide-btn')
    console.log(hideBtn);
    // filter pages 
    let poemsFilter40 = document.querySelector('.poems-filter-40')
    let poemsCollection = document.querySelector('.poems-collection')
    // filter pages end
    hideAndVisibleFunc('.book-search-button', 'visibility', 'hidden');

    function hideAndVisibleFunc(selector, properName, propertyValue) {
        let elements = document.querySelectorAll(selector);
        elements.forEach(element => {
            element.style[properName] = propertyValue
        })
    }

    // function forEachEvent(elementSelector, eventName, callback) {
    //     let elements = document.querySelectorAll(elementSelector);
    //     elements.forEach(element => {
    //         element.addEventListener(eventName, (event) => {
    //             callback(event, element);
    //         });
    //     });
    // }
    hideAndVisibleFunc('.filter-cross-button', 'visibility', 'hidden');
    var btn = document.querySelector(".btn");
    let mainBody = document.querySelector('main');
    let mainOverlay = document.querySelector('.body-overlay')
    let overlay = document.createElement('div')
    // let filterPage = document.querySelector('#filter-page')
    // filterPage.style.display = 'none'
    // let loader = document.querySelector('.loader')
    // loader.style.display = 'none';
    album.style.visibility = "hidden";
    Modernizr.csstransforms;
    $(document).on("click", "[class*='sm-book']", function(e) {
        e.preventDefault();
        initBook(e.target)
    })

    hideAndVisibleFunc('.filter-button', 'visibility', 'hidden');
    var uploadBtn = document.getElementById("upload")
    // upload book covers
    // function readURL(uploadBtn) {
    //     if (uploadBtn.files && uploadBtn.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function(e) {
    //             $(imageUrl).css('--bg-image', 'url(' + e.target.result + ')');
    //             $(imageUrl).hide();
    //             $(imageUrl).fadeIn(650);
    //         }
    //         reader.readAsDataURL(uploadBtn.files[0]);
    //     }
    // }
    // $("#imageUpload").change(function() {
    //     readURL(this);
    // });

    // //End here uploading code



    function initBook(el) {
        // loader.style.display = 'block';
        thumbnail = $(el);
        // console.log(el.id);
        const dataId = el.getAttribute('data-id');
        // const dataPages = getAttribute('data-pages');
        const hasExtension = dataId.includes('.');
        let imageUrl = hasExtension ? dataId : `${dataId}.jpg`;
        let bookElem = $(".sj-book").html(`<div depth="5" style="--bg-image: url(../../../assets/images/book-covers/${imageUrl}); " class="hard" data-id="${dataId}">
        <div class="side"></div>
        </div>
        <div depth="5" class="hard front-side">
            <div class="depth"></div>
        </div>
        <div class="own-size"></div>
        <div class="own-size even"></div>
        <div class="hard fixed back-side p111">
                <div class="depth"></div>
            </div>
            <div class="hard p112"></div>
            <div class="hard fixed back-side p111">
                <div class="depth"></div>
            </div>
            <div class="hard p112"></div>`);

        // if (!excludeDivs) {
        //     bookElem += `
        //     <div class="hard fixed back-side p111">
        //         <div class="depth"></div>
        //     </div>
        //     <div class="hard p112"></div>
        //     `;
        // }
        console.log(bookElem);

        // $(".sj-book").html(bookElem);


        let canvas = document.querySelectorAll('#canvas');
        hideAndVisibleFunc('#canvas', 'display', 'none');
        let styleSheet = $(el).data('styles');
        if (styleSheet == undefined) {
            styleSheet = ['./assets/book/css/steve-jobs-1.css'];
        } else {
            styleSheet = styleSheet.split(',');
        }
        let styles = ""
        styleSheet.forEach((el, index) => {
            if (index > 0) {

                styles += `, $.getStylesheet(styleSheet[${index}])`
            } else {
                styles += `$.getStylesheet(styleSheet[${index}])`
            }
        })
        if ($('#canvas').css('display', 'none')) {
            $('.book-loader img').css('visibility', 'visible')
        }
        let bookScript = './assets/book/js/steve-jobs.js'
        setTimeout(() => {
            $.when(eval(styles), $.getScript(bookScript)).then(function() {
                let pagenumber = el.dataset.pagenumber
                loadApp(pagenumber);
                mainBody.classList.add('body-overlay-wrap')
                overlay.classList.add('body-overlay')
                mainBody.append(overlay)
                let pageWrappers = document.querySelectorAll('#book-zoom');
                pageWrappers.forEach(pageWrapper => {
                    pageWrapper.style.transform = 'scale(0.5)';
                })
                hideAndVisibleFunc('#canvas', 'display', 'block');
                // },1000)
            }).then(function() {
                if ($('#canvas').css('display', 'block')) {
                    $('.book-loader img').css('visibility', 'hidden')
                }
                scaleFrom = thumbnail.height() * 1.1 / $('#book-zoom').height(),
                    setTimeout(function() {
                        $('#book-zoom').transform('scale(0.9)');
                        // console.log('scale(1)');
                        $('.sj-book').turn('page', 1);

                    }, 500);
            });
        }, 500)
        var newBook = $(el);
        if (album.style.visibility === "hidden") {
            album.style.visibility = "visible";
            newBook.css('visibility', 'hidden');
            $('#canvas').zIndex('11');
            crossButton.style.visibility = "visible";

        }
        let newBook2 = $("[class*='initBook']");
        if (typeof newBook2 !== 'undefined') {
            hideAndVisibleFunc('.filter-button', 'visibility', 'visible');
        } else {
            hideAndVisibleFunc('.filter-button', 'visibility', 'hidden');

        }
        hideAndVisibleFunc('.upload-button', 'visibility', 'visible');


    }
    // Add a click event listener to the cross button
    crossButton.addEventListener("click", function(e) {
        e.preventDefault();
        $('.sj-book').turn('page', 1);
        $('#book-zoom').transform('scale(0.2)').css("visibility", "hidden");
        $('#canvas').zIndex('10');
        overlay.classList.remove('body-overlay')
        setTimeout(function() {
            $(".sj-book").css("visibility", "hidden");
        }, 500);
        let newBook = $("[class*='sm-book']");
        let newBook2 = $("[class*='initBook']");
        crossButton.style.visibility = "hidden";
        hideAndVisibleFunc('.filter-button', 'visibility', 'hidden');
        hideAndVisibleFunc('.filter-cross-button', 'visibility', 'hidden');
        hideAndVisibleFunc('.book-search-button', 'visibility', 'hidden');
        setTimeout(function() {
            if ($('.sj-book').turn('is')) {
                $('.sj-book').turn('destroy');
                $(window).unbind('keydown');
                newBook.css('visibility', 'visible');
                newBook2.css('visibility', 'visible');
            }
        }, 500);
        hideAndVisibleFunc('.upload-button', 'visibility', 'hidden');
        // visiblefunc('.login-btn')
        // visiblefunc('.register-btn')
        // btnVisiblefunc('.register-btn')
    });
    $('#search-page, .poems-filter-40, .poems-collection, .quotes, .daily-quotes, .search-page-filter').css('display',
        'none');
    filterButton.forEach(btn => {
        btn.addEventListener('click', () => {
            hideAndVisibleFunc('.daily-quotes', 'left', '0')
            hideAndVisibleFunc('.search-page-filter', 'left', '100%')

            $('.poems-filter-40, .poems-collection, .quotes, .daily-quotes').css('display', 'block');
            $('.sj-book').turn('page', 2);
            filterCloseButton.forEach(btn => {
                btn.style.visibility = 'visible'
                // console.log(btn);
                btn.addEventListener('click', () => {
                    $('.poems-filter-40, .poems-collection, .quotes, .daily-quotes').css(
                        'display', 'none');
                    $('.sj-book').turn('page', 1);
                    hideAndVisibleFunc('.couple-diary-create-diary-page', 'left', '0');
                    hideAndVisibleFunc('.couple-diary-upload-page', 'left', '100%');
                    hideAndVisibleFunc('.couple-diary-ck-editor-page', 'left', '100%')
                    hideAndVisibleFunc('.couple-diary-search-page', 'left', '100%')
                    btn.style.visibility = 'hidden'
                })
            });
        });
    });
    filterCrossPosition.forEach(el => {
        el.addEventListener('click', () => {
            filterButton.forEach(btn => {
                btn.addEventListener('click', () => {
                    hideAndVisibleFunc('.filter-cross-button', 'left', '35%');
                })
            })
        })
    })
    $('#search-page').css('display', 'none');
    dailyQuote.forEach(btn => {
        btn.addEventListener('click', () => {
            hideAndVisibleFunc('.book-search-button', 'visibility', 'visible');
            // console.log('dailyQuote');
            filterButton.forEach(btn => {
                btn.addEventListener('click', () => {
                    $('#filter-page').css('display', 'block')
                    hideAndVisibleFunc('.filter-cross-button', 'left', '26%');
                })
            })
            bookSearchButton.forEach(btn => {
                // console.log(btn, 'book-search');
                btn.addEventListener('click', () => {
                    hideAndVisibleFunc('.daily-quotes', 'left', '100%')
                    hideAndVisibleFunc('.search-page-filter', 'left', '0')
                    hideAndVisibleFunc('.daily-quotes', 'left', '100%')
                    hideAndVisibleFunc('.search-page-filter', 'left', '0')
                    hideAndVisibleFunc('.filter-cross-button', 'left', '26%');
                    $('.search-page-filter').css('display', 'block');
                    $('.sj-book').turn('page', 3);
                    filterCloseButton.forEach(btn => {
                        btn.style.visibility = 'visible'
                        // console.log(btn);
                        btn.addEventListener('click', () => {
                            $('.search-page-filter').css('display', 'none');
                            $('.sj-book').turn('page', 1);
                            btn.style.visibility = 'hidden'
                        })
                    });
                })
            })
        })
    })

    hideAndVisibleFunc('.editor-btn', 'visibility', 'hidden')
    hideAndVisibleFunc('.library-search-button', 'visibility', 'hidden')
    // forEachFunction('.my-button', 'click', (event, button) => {
    //     console.log('Button clicked:', button);
    // });
    function personalDiaryBookFunc(page) {
        personalDiaryBook.forEach(el => {
                if (page > 1) {
                    hideAndVisibleFunc('.editor-btn', 'visibility', 'visible')
                    hideAndVisibleFunc('.library-search-button', 'visibility', 'visible')
                } else {
                    hideAndVisibleFunc('.editor-btn', 'visibility', 'hidden')
                    hideAndVisibleFunc('.library-search-button', 'visibility', 'hidden')
                }
                // hideAndVisibleFunc('.upload-button', 'visibility', 'visible')
                if (page === 1) {
                    hideAndVisibleFunc('.upload-button', 'visibility', 'visible');
                } else {
                    hideAndVisibleFunc('.upload-button', 'visibility', 'hidden')
                }

                editorButton.forEach(el => {
                    el.addEventListener('click', () => {
                        $('.sj-book').turn('page', 3);
                        // $('.ck-editor-page').css('display', 'block');
                        hideAndVisibleFunc('.personal-diary-search-page', 'left', '100%')
                        hideAndVisibleFunc('.personal-diary-page', 'left', '100%')
                        hideAndVisibleFunc('.ck-editor-page', 'left', '0')
                        hideAndVisibleFunc('.couple-diary-create-diary-page', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-upload-page', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-search-page', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-ck-editor-page', 'left', '0')
                        // Add new edit page
                        hideAndVisibleFunc('.edit-page-memory', 'left', '0')
                        hideAndVisibleFunc('.create-book-memory', 'left', '100%')
                        hideAndVisibleFunc('.delete-memory', 'left', '100%')
                        // End
                        filterCloseButton.forEach(btn => {
                            btn.style.visibility = 'visible'
                            btn.addEventListener('click', () => {
                                hideAndVisibleFunc('.personal-diary-page', 'left',
                                    '100%')
                                hideAndVisibleFunc('.ck-editor-page', 'left', '100%')
                                hideAndVisibleFunc('.couple-diary-ck-editor-page',
                                    'left', '100%')
                                hideAndVisibleFunc('.couple-diary-search-page', 'left',
                                    '100%')
                                hideAndVisibleFunc('.couple-diary-create-diary-page',
                                    'left', '0')
                                btn.style.visibility = 'hidden'
                                $('.sj-book').turn('page', 1);
                            })
                        })
                    })
                });

                librabrySearchBtn.forEach(el => {
                    el.addEventListener('click', () => {
                        $('.sj-book').turn('page', 3);
                        // $('.personal-diary-search-page').css('display', 'block');
                        hideAndVisibleFunc('.personal-diary-page', 'left', '0')
                        hideAndVisibleFunc('.ck-editor-page', 'left', '100%')
                        hideAndVisibleFunc('.personal-diary-search-page', 'left', '0')
                        hideAndVisibleFunc('.couple-diary-create-diary-page', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-search-page', 'left', '0')
                        hideAndVisibleFunc('.couple-diary-ck-editor-page', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-ck-editor-page', 'left', '100%')
                        hideAndVisibleFunc('.edit-page-memory', 'left', '100%')
                        hideAndVisibleFunc('.couple-diary-upload-page', 'left', '100%')
                        hideAndVisibleFunc('.delete-memory', 'left', '0')
                        filterCloseButton.forEach(btn => {
                            btn.style.visibility = 'visible'
                            // console.log(btn);
                            btn.addEventListener('click', () => {
                                hideAndVisibleFunc('.personal-diary-search-page',
                                    'left', '100%')
                                hideAndVisibleFunc('.couple-diary-search-page', 'left',
                                    '100%')
                                hideAndVisibleFunc('.couple-diary-create-diary-page',
                                    'left', '0')

                                $('.sj-book').turn('page', 1);
                                btn.style.visibility = 'hidden'
                            })
                        });
                    })
                })



            }
            // end 
        )
    }
    uploadButton.forEach(el => {
        bookBeforeSubmit.forEach(el => {
            el.addEventListener('click', () => {
                hideAndVisibleFunc('.upload-button', 'visibility', 'hidden')
            })
        })
        el.addEventListener('click', () => {
            hideAndVisibleFunc('.ck-editor-page', 'left', '100%');
            hideAndVisibleFunc('.create-diary-page', 'left', '100%')
            hideAndVisibleFunc('.personal-diary-search-page', 'left', '100%')
            hideAndVisibleFunc('.personal-diary-page', 'left', '0');
            hideAndVisibleFunc('.couple-diary-create-diary-page', 'left', '100%');
            hideAndVisibleFunc('.couple-diary-upload-page', 'left', '0');
            hideAndVisibleFunc('.couple-diary-search-page', 'left', '100%');
            hideAndVisibleFunc('.default-special-page', 'left', '100%')
            hideAndVisibleFunc('.dd-2', 'left', '100%')
            hideAndVisibleFunc('.dd-3', 'left', '100%')
            hideAndVisibleFunc('.filter-events-page', 'left', '0')
            $('.sj-book').turn('page', 3);
        })
    })

    function createDiaryFilterFunc() {
        createDiaryBook.forEach(el => {
            hideAndVisibleFunc('.create-book-memory', 'left', '0')
            hideAndVisibleFunc('.couple-diary-create-diary-page', 'left', '0')
            $('.sj-book').turn('page', 3);
            el.addEventListener('click', () => {

            })
        })

    }
    createDiaryFilterFunc()
    $(document).ready(function() {
        $(getBookID()).trigger('click')

        function getBookID() {
            let bookID = window.location.search.split('=')[1]
            return `#book-${bookID}`

        }
    })

    // image upload js


    function readURL(input) {
        if (input.files && input.files[0]) {
            $('#imagePreview').attr('src', URL.createObjectURL(input.files[0]));
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(0);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
        // $('.sj-book').turn('page', 4);
        // $('.sj-book').turn('page', 3);
    });


    // show-passowrd
    const passFields = document.querySelectorAll('.pass-field')
    const passBtn = document.querySelectorAll('.show-pass')
    // console.log(passBtn);
    // console.log(passBtn);
    passBtn.forEach((btn, index) => {
        btn.addEventListener('click', function(e) {
            // alert('hellow')
            e.preventDefault();
            if (passFields[index].type === 'password') {
                passFields[index].type = 'text'
                btn.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passFields[index].type = 'password'
                btn.classList.replace('fa-eye-slash', 'fa-eye');
            }
        })
    })



    // show & hide email fields Code 
    function handleClick() {
        let emailInput = document.getElementsByClassName('email-input');
        let deleteEmail = document.getElementsByClassName('delete-email');
        for (let i = 0; i < emailInput.length; i++) {
            emailInput[i].style.display = 'block';
        }
        for (let i = 0; i < deleteEmail.length; i++) {
            deleteEmail[i].style.display = 'block';
        }
    }

    function handleClickHide() {
        let emailInput = document.getElementsByClassName('email-input');
        let deleteEmail = document.getElementsByClassName('delete-email');
        for (let i = 0; i < emailInput.length; i++) {
            emailInput[i].style.display = 'none';
        }
        for (let i = 0; i < deleteEmail.length; i++) {
            deleteEmail[i].style.display = 'none';
        }
    }
    // End


    // Book Cover Uploaded Js


    $(document).ready(function() {
        // Listen for changes in the file input
        $("#imageUpload").on("change", function(e) {
            var file = e.target.files[0];
            if (file) {
                var reader = new FileReader();

                // Read the selected file as a data URL and display it in the image container
                reader.onload = function(e) {
                    var element = $(".p1");
                    // Set the background image using the ::before pseudo-element
                    element.css("--bg-image", `url(${e.target.result})`);
                    // Add any other styles as needed for the ::before pseudo-element
                    element.css("position", "relative");
                    element.css("z-index", "1");
                    element.css("display", "block");
                    // imageUploadeCss.css("width", "90%");
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // image uploader js custom


    // function bookCoverFunc() {
    //     let bookTitle = document.querySelector('.book-title')
    //     let bookTitleField = document.querySelector('.title-field')
    //     // let inputValue = bookTitle.value;
    //     if (bookTitle) {
    //         bookTitleField.value = bookTitle.textContent;
    //         // let inputValue = bookTitle.textContent;
    //         console.log('input value', inputValue);
    //     } else {
    //         console.log('Book title not found');
    //     }
    // }

    function bookCoverFunc(e) {
        e.preventDefault();

        // Get the book title element
        let bookTitle = document.querySelector('.book-title');

        // Check if the book title element exists
        if (bookTitle) {
            // Get the input field value
            let bookTitleField = document.querySelector('.title-field');
            let inputValue = bookTitleField.value;

            // Log the current book title content before the update
            console.log('Before Update: bookTitle.textContent', bookTitle.textContent);

            // Update the book title content
            bookTitle.textContent = inputValue;

            // Log the updated book title content
            console.log('After Update: bookTitle.textContent', bookTitle.textContent);

            // Save the input value in local storage
            localStorage.setItem('savedTitleValue', inputValue);
            console.log('Field value saved to localStorage:', bookTitleField.value);
        } else {
            console.log('Book title element not found');
        }
    }

    // Check if there's a saved value in local storage on page load
    document.addEventListener('DOMContentLoaded', function() {
        let savedTitleValue = localStorage.getItem('savedTitleValue');
        let bookTitle = document.querySelector('.book-title');

        // Update the book title if a saved value exists
        if (savedTitleValue && bookTitle) {
            bookTitle.textContent = savedTitleValue;
        }
    });
    // setTimeout(function() {
    //     if ($('#canvas').css('visible')) {
    //         $('.book-loader').hide();
    //     }
    //     // $('#canvas').show();
    //     let viewFirst = $('.target3').html();
    //     $('.sj-book .p3').html(viewFirst);
    // }, 1000);

    // $(document).ready(function() {
    //     // Create bookLoader element

    //     setTimeout(function() {
    //         // Append bookLoader to the body

    //         // Event handler for .initBook click
    //         $('initBook').on('click', function() {
    //             var bookLoader = $('<div></div>').addClass('book-loader');
    //             $('body').append(bookLoader);
    //         })
    //         if ($('#canvas').css('display', 'none')) {
    //             $('.book-loader').show();
    //             console.log('book-loader shown');
    //         } else {
    //             // $('#canvas').css('display', 'block')
    //             $('.book-loader').hide();
    //             console.log('book-loader hidden');
    //         }
    //     });
    // });
</script>