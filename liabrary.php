<script>
    document.title = "My Liabrary | Memorable World";
    document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <!-- personal diary first book pages -->
                    <div class="book-1target1 d-none">
                        <!-- <h3 class="book-title">book title</h3> -->
                    </div>
                    <div class="book-1target3 d-none">
                        <div class="book-1-wrap">
                            <div class="left-side-filter-content position-relative h-100 p-100 position-absolute personal-diary-page">
                                <h1 class="text-center">Upload from cover page </h1>
                                <div class="form-group">
                                    <label for="" class="label-field">Title</label>
                                    <input type="text" class="input-field w-100 title-field" placeholder='Add Title'>
                                    <h3 class="book-title">book title</h3>
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
                                        <button class="submit rounded-pill w-100 ck-btn uppercase title-btn" onclick="bookCoverFunc(event)">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- personal diary ck editor page -->
                            <!-- <div class="book-1target4 d-none"> -->
                            <div class="left-side-filter-content position-relative h-100 p-90 position-absolute ck-editor-page ">
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
                            <!-- </div> -->
                            <!-- personal diary ck editor end -->
                            <!-- personal diary search filter  -->
                            <!-- <div class="book-1target6 d-none"> -->
                            <div class="left-side-filter-content4 position-relative h-100 position-absolute personal-diary-search-page">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Filter</h1>
                                    <div class="form">
                                        <label for="text" class="label-field">Date:</label>
                                        <input type="date" class="input-field">
                                    </div>
                                    <div class="filter-form-buttons">
                                        <a href="javascript:void(0)" class="btn form-button">Search</a>
                                        <a href="javascript:void(0)" class="btn form-button1">First Page</a>
                                        <a href="javascript:void(0)" class="btn form-button1">Last Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-1target4 d-none">
                        <div class="book-shadow-left"></div>
                        <div class="page-content-wrapper">
                            <div class="book-cover-image"></div>
                        </div>
                    </div>
                    <div class="book-1target5 d-none">
                        <div class="book-shadow-right"></div>
                        <div class="page-content-wrapper">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">Personal Diary</h1>
                                <p>The daily hustle does not allow a moment for us to ponder about the good and bad that
                                    each day brings. This is the perfect product to record our thoughts and deeds over
                                    the course of the day or the week, and with little effort, recall those thoughts and
                                    events.</p>
                                <p>Allow users to write all their thoughts and events chronologically by date and once a
                                    week upload a picture/personal video. Objective is for users to, at a touch of a
                                    button, see their transformation over the years and bring to live those short
                                    moments, good and bad, that gave meaning to their existence.</p>
                                <p>Through the “Personal Diary, user can view all other books such as “Special Events”,
                                    “In Memory Of”, “My Lineage”, “History Of My Live” just by clicking the link
                                    inserted in the date of the event. Example user creates a special event for
                                    Graduation, Birthday, Wedding… the link to that book will be inserted as a page for
                                    that day. The idea is that user can at ease just branch to that book to view
                                    pictures and videos of the event. The user will have the ability to print a physical
                                    book by volume, with the option to exclude any compromising images should the user
                                    want to do so.</p>
                            </div>
                        </div>
                    </div>

                    <!-- personal diary search filter end -->
                    <!-- personal diary first book pages end -->
                    <div id="canvas" class="librabry-wrap">
                        <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book"></div>
                            <button class="filter-cross-button"><i class="fa-solid fa-xmark"></i></button>
                            <button class="upload-button"><i class="fa-solid fa-upload"></i></button>
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
                        <div class="row ">
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-1.png" class="img-fluid w-100 " alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="top-window text-center">
                                    <img src="./assets/images/poet-center-top-2.png" class="img-fluid w-100" alt="">
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
                                <h1 class="poets-heading">My Liabrary</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-1" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="./add-book.php"><img id="book-2" src="./assets/images/Couple-Diary-book.png" alt=""></a>
                                    <a href="./add-events.php"><img id="book-3" src="./assets/images/Special-Events-book.png" alt=""></a>
                                    <a href="./in-memory.php"><img id="book-4" src="./assets/images/In-Memory-book.png" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-1" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="./add-book.php"><img id="book-2" src="./assets/images/Couple-Diary-book.png" alt=""></a>
                                    <a href="./add-events.php"><img id="book-3" src="./assets/images/Special-Events-book.png" alt=""></a>
                                    <a href="./in-memory.php"><img id="book-4" src="./assets/images/In-Memory-book.png" alt=""></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <?php include "includes/scripts.php"; ?>
    <script src="./assets/js/index.js"></script>
</body>

</html>