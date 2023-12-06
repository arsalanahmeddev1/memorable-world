<script>
document.title = "Couple Diary | Memorable World";
document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <!-- couple diary add book create diary  -->
                    <div class="book-6target3 d-none">
                        <div class="book-6-wrap">
                            <div
                                class="left-side-filter-content special-events-bg-img position-relative h-100 position-absolute  couple-diary-create-diary-page">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Create a Diary</h1>
                                    <form action="#" class="form">
                                        <label for="text" class="label-field">Days:</label>
                                        <input type="text" class="input-field" placeholder="others" />
                                        <div class="radios d-flex flex-wrap gap-30">
                                            <div class="first">
                                                <input type="radio" name="days" value="30">
                                                <label for="age1">Single Day</label>
                                            </div>
                                            <div class="second">
                                                <input type="radio" name="days" value="30">
                                                <label for="age1">Multiple Days</label>
                                            </div>
                                        </div>
                                        <label for="text" class="label-field">Date:</label>
                                        <input type="date" class="input-field">
                                        <input type="text" class="input-field" placeholder="Single" />
                                        <input type="text" class="input-field" placeholder="Testing" />
                                        <div class="form-group">
                                            <label for="" class="label-field">Create Link in Couple Diary</label>
                                            <div class="file-upload input-field">
                                                <button class="btn-upload w-100">
                                                    <!-- <i class="fa fa-camera i-pic-static"></i> -->
                                                </button>
                                                <i class="fa fa-camera i-pic-upload"></i>
                                                <!-- <i class="fa fa-camera"></i> -->
                                                <i class="i-deselect"></i>
                                                <input type="file" class="form-control d-none" id="s-pic" />
                                            </div>
                                        </div>
                                    </form>
                                    <div class="filter-form-buttons">
                                        <button class="ck-btn">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- couple diary add book create diary end  -->
                            <!-- personal diary first book pages -->
                            <!-- <div class="book-6target3 d-none"> -->
                            <div
                                class="left-side-filter-content special-events-bg-img position-relative h-100 p-70 position-absolute couple-diary-upload-page">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Filter</h1>
                                    <form action="#" class="form">
                                        <label for="text" class="label-field">Days:</label>
                                        <input type="text" class="input-field" placeholder="Others" />
                                        <label for="text" class="label-field">Enter:</label>
                                        <input type="text" class="input-field" placeholder="User Testing" />
                                        <div class="form-group">
                                            <label for="" class="label-field">Create Link in Couple Diary</label>
                                            <div class="file-upload input-field">
                                                <button class="btn-upload w-100">
                                                    <!-- <i class="fa fa-camera i-pic-static"></i> -->
                                                </button>
                                                <i class="fa fa-camera i-pic-upload"></i>
                                                <!-- <i class="fa fa-camera"></i> -->
                                                <i class="i-deselect"></i>
                                                <input type="file" class="form-control d-none" id="s-pic" />
                                            </div>
                                        </div>
                                    </form>
                                    <div class="filter-form-buttons">
                                        <button class="ck-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- personal diary ck editor page -->
                            <!-- <div class="book-6target4 d-none"> -->
                            <div
                                class="left-side-filter-content special-events-bg-img position-relative h-100 p-90 position-absolute couple-diary-ck-editor-page">
                                <h1 class="filter-heading">Confirmation</h1>
                                <h2 class="sub-heading">Are you sure want to delete?</h2>
                                <div class="alert-btns d-flex gap-10">
                                    <a href="javascript:void(0)" class="btn form-button">Yes</a>
                                    <a href="javascript:void(0)" class="btn form-button">No</a>
                                </div>
                            </div>
                            <!-- personal diary ck editor end -->
                            <!-- personal diary search filter  -->
                            <div
                                class="left-side-filter-content special-events-bg-img position-relative h-100 couple-diary-search-page">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Filter</h1>
                                    <div class="form">
                                        <label for="text" class="label-field">Date:</label>
                                        <input type="date" class="input-field">
                                    </div>
                                    <div class="filter-form-buttons">
                                        <a href="javascript:void(0)" class="btn form-button">Search</a>
                                        <a href="javascript:void(0)" class="btn form-button">First Page</a>
                                        <a href="javascript:void(0)" class="btn form-button">Last Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-6target4 d-none">
                        <div class="book-shadow-left"></div>
                        <div class="left-side-filter-content special-events-bg-img">
                            <div class="book-cover-image special-events-img "></div>
                        </div>
                    </div>
                    <div class="book-6target5 d-none">
                        <div class="book-shadow-right"></div>
                        <div class="left-side-filter-content special-events-bg-img">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">Special Events</h1>
                                <p>Communication and sensual appeal are critical ingredients for couples to be in
                                    harmony. As time goes by, this becomes much more critical, but the daily
                                    routines make it a challenge for the couple to stay synchronized. It is
                                    difficult to notice those small things that in the long run, is what makes the
                                    relation worth it. This portal is the perfect vehicle to keep an open
                                    communication, and perhaps a more honest one, as there may be times that we
                                    think, or desire something that is difficult to say in person, especially when
                                    it comes to intimate desires; this channel facilitate such level of openness.
                                    Couple can write any thought, and the other person will be notified immediately,
                                    no matter how far apart they may be. This helps keep daily routine more
                                    interesting. It provides an opportunity to create special moments for both
                                    partners and be able to upload those moments of togetherness. Upload picture and
                                    video of the week to help the couple grow and be able to reflect on those
                                    especial moments that otherwise, will be left in the distant past with no
                                    recollection, though it might have deeply touched them at that moment. User will
                                    be able to print a physical book by volume, with the ability to exclude any
                                    compromising images should the user want to do so.</p>
                            </div>
                        </div>
                    </div>
                    <!-- personal diary search filter end -->
                    <!-- personal diary first book pages end -->
                    <div id="canvas" class="librabry-wrap">
                        <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book"></div>
                            <button class="filter-cross-button"><i class="fa-solid fa-xmark"></i></button>
                            <button class="new-book-cross-button"><i class="fa-solid fa-xmark"></i></button>
                            <button class="filter-button upload-button"><i class="fa-solid fa-upload"></i></button>
                            <button class="library-search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <button class="editor-btn"><i class="fa-solid fa-trash-can"></i></button>
                            <button class="cross-button">Return Book</button>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex d-none px-5">
                        <div class="windows-left">
                            <div class="window-top-left">
                                <img src="./assets/images/window-poet-left.png" class="img-fluid w-100" alt="">
                            </div>
                            <div class="window-bottom-left">
                                <img src="./assets/images/window-bottom-left.png" class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5  d-lg-flex d-none window-wrapper">
                        <div class="row">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-1.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-2.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="row images-bg-light">
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-1.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-2.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-3.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3 pt-30">
                                        <div class="window-center-bottom">
                                            <img src="./assets/images/poet-center-4.png" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main-left">
                            <div class="left-side-wrapper d-flex justify-content-center">
                                <div class="img-border">
                                    <img src="./assets/images/img-frame.PNG" class="img-fluid w-100" alt="">
                                    <div class="bottom-circle"></div>
                                </div>
                            </div>
                            <div class="heading-right">
                                <h1 class="poets-heading">Special Events</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-6" src="./assets/images/upload-book.png"
                                            data-id="special-events-back.jpg"
                                            class="initBook personal-diary-book create-diary-book book-width"
                                            alt=""></a>
                                    <!-- <a href="#"><img id="book-10" src="./assets/images/upload-book.png" data-id="special-events-back.jpg" class="initBook before-submit" alt=""></a> -->
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- custom javascript -->
    <script src="./assets/js/index.js"></script>
    <?php include "includes/scripts.php"; ?>
</body>

</html>