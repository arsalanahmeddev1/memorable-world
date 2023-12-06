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
                                class="left-side-filter-content couple-diary-bg position-relative h-100 position-absolute  couple-diary-create-diary-page">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Create a Diary</h1>
                                    <div class="form">
                                        <label for="text" class="label-field">Couple Name:</label>
                                        <input type="text" class="input-field" placeholder="Enter Your Name" />
                                        <label for="text" class="label-field">Couple Email:</label>
                                        <input type="email" class="input-field"
                                            placeholder="Enter Your Email Address" />
                                        <div class="d-flex flex-column position-relative">
                                            <label for="text" class="label-field">Couple Password:</label>
                                            <input type="password" class="input-field pass-field"
                                                placeholder="****************" />
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye show-pass"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-form-buttons">
                                        <a href="javascript:void(0)" class="btn form-button w-100">Submit</a>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- couple diary add book create diary end  -->
                            <!-- personal diary first book pages -->
                            <!-- <div class="book-6target3 d-none"> -->
                            <div
                                class="left-side-filter-content couple-diary-bg position-relative h-100 p-100 position-absolute couple-diary-upload-page">
                                <h1 class="text-center">Upload from cover page </h1>
                                <div class="form-group">
                                    <div class="label-field">Upload:</div>
                                    <label for="imageUpload" class="file-upload input-field">
                                        <i class="fa fa-camera i-pic-upload"></i>
                                        <i class="i-deselect"></i>
                                        <div class="avatar-preview">
                                            <img id="imagePreview" src="./assets/images/Couple-Diary-book.png">
                                            </img>
                                        </div>
                                    </label>
                                    <input type="file" id="imageUpload" class="form-control d-none" id="s-pic" />
                                    <div class="button">
                                        <button class="submit rounded-pill w-100 ck-btn uppercase">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- personal diary ck editor page -->
                            <!-- <div class="book-6target4 d-none"> -->
                            <div
                                class="left-side-filter-content couple-diary-bg position-relative h-100 p-90 position-absolute couple-diary-ck-editor-page">
                                <div class="ck-editor">
                                    <h1 class="text-center">Add Your Thoughts</h1>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="img-upload-ck" class="file-upload input-field">
                                                    <i class="fa fa-camera i-pic-upload"></i>
                                                    <i class="i-deselect"></i>
                                                </label>
                                                <input type="file" class="form-control d-none" id="img-upload-ck" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="video-upload-ck" class="file-upload input-field">
                                                    <i class="fa-solid fa-video"></i>
                                                    <i class="i-deselect"></i>
                                                </label>
                                                <input type="file" class="form-control d-none" id="video-upload-ck" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="label-field">Date:</label>
                                            <input type="date" class="input-field">
                                        </div>
                                    </div>
                                    <div class="p-100 d-none" id="editor"></div>
                                    <button class="ck-btn">Submit Nowoad</button>
                                </div>
                            </div>
                            <!-- personal diary ck editor end -->
                            <!-- personal diary search filter  -->
                            <div
                                class="left-side-filter-content couple-diary-bg position-relative h-100 couple-diary-search-page">
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
                        <div class="page-content-wrapper couple-diary-bg">
                            <div class="book-cover-image couple-diary-img "></div>
                        </div>
                    </div>
                    <div class="book-6target5 d-none">
                        <div class="book-shadow-right"></div>
                        <div class="couple-diary-bg">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">Couple Diary</h1>
                                <p>Pictures and videos are the most effective conduit to help us re-live special events
                                    in our lives. The challenge is how to maintain an inventory of these pictures and
                                    videos in a chronological order and be accessible at a click of a button. Vacations,
                                    graduations, birthdays, weddings, Mother’s Day, anniversaries, or just a night out
                                    with friends, are important events that, to some extent, shape our lives and
                                    strengthens our relationships. If it is a challenge to keep them in order, it is
                                    much more difficult to share with family and friends as time passes. This page is
                                    the perfect solution to keep all those memories at our fingertip and be able to
                                    share with anyone we wish to. Example, when the family goes on vacation, overtime,
                                    we may lose the device where the images are stored, or we may have access to the
                                    pictures, but not remember where it was taken, or it may not be in chronological
                                    order. By creating an eBook of each event, uploading pictures as they are taken, and
                                    adding text along the way, will ensure accessibility, as well as recollecting the
                                    event in a more complete way using the text, and be able to share it with anyone. A
                                    link of each book will be automatically inserted to the user’s Personal Diary so
                                    that, at ease, be able to click the link and be taken to the book.</p>
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
                            <button class="filter-button upload-button hide-btn"><i
                                    class="fa-solid fa-upload"></i></button>
                            <button class="library-search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <button class="editor-btn"><i class="fa-solid fa-plus"></i></button>
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
                                <h1 class="poets-heading">Couple Diary</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-6" src="./assets/images/upload-book.png"
                                            data-id="coupleDiary.jpg"
                                            class="initBook personal-diary-book create-diary-book book-width"
                                            alt=""></a>
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