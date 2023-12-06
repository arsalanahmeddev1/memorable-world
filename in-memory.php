<script>
document.title = "In Memory of | Memorable World";
document.querySelector('title').innerHTML = document.title;
</script>
<?php include "./includes/head.php"; ?>

<body>
    <?php include "./includes/header.php"; ?>

    <main>
        <div class="home-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="book-5target3 d-none">
                        <div class="book-5-wrap">
                            <div
                                class="left-side-filter-content in-memory-inner-bg  h-100 p-100 position-absolute create-book-memory">
                                <h1 class="text-center">Create a Book: </h1>
                                <div class="form-group">
                                    <input type="text" class="input-field w-100" placeholder="Enter Your Book Name" />
                                    <div class="label-field">Upload your Cover or choose a template</div>
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
                            <div
                                class="left-side-filter-content in-memory-inner-bg  h-100 p-90 position-absolute edit-page-memory">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Create a Memory :</h1>
                                    <div class="form">
                                        <input type="text" class="input-field mb-3" placeholder="Enter Your Memory" />
                                        <div class="form-group">
                                            <label for="" class="label-field">Upload your Cover</label>
                                            <label for="imageUpload" class="file-upload input-field">
                                                <i class="fa fa-camera i-pic-upload"></i>
                                                <i class="i-deselect"></i>
                                                <div class="avatar-preview">
                                                    <img id="imagePreview" src="./assets/images/Couple-Diary-book.png">
                                                    </img>
                                                </div>
                                            </label>
                                            <input type="file" id="imageUpload" class="form-control d-none"
                                                id="s-pic" />
                                        </div>
                                        <label for="text" class="label-field">DOB of your loving</label>
                                        <input type="date" class="input-field mb-3" />
                                        <label for="text" class="label-field">DOB of your loving</label>
                                        <input type="date" class="input-field mb-3" />
                                        <label for=""><i class="fa-solid fa-xmark delete-email" id="delete-email"
                                                onclick="handleClickHide()"></i></label>
                                        <input type="email" class="input-field mb-3 email-input" id="email-input"
                                            placeholder="Enter your Email" />
                                    </div>
                                    <div class="filter-form-buttons d-flex flex-column">

                                        <button class="btn form-button w-100 uppercase" id="add-email"
                                            onclick="handleClick()">
                                            add email
                                        </button>
                                        <button class="btn form-button w-100 uppercase">Submit</button>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="alert left-side-filter-content in-memory-inner-bg position-absolute h-100 delete-memory">
                                <div class="filter-content-wrapper">
                                    <h1 class="filter-heading">Confirmation</h1>
                                    <h2 class="sub-heading">Are you sure want to delete?</h2>
                                    <div class="alert-btns d-flex gap-10">
                                        <a href="javascript:void(0)" class="btn form-button">Yes</a>
                                        <a href="javascript:void(0)" class="btn form-button">No</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-5target4 d-none ">
                        <div class="book-shadow-left"></div>
                        <div class="left-side-filter-content in-memory-inner-bg ">
                            <div class="book-cover-image in-memory-of-img "></div>
                        </div>
                    </div>
                    <div class="book-5target5 d-none ">
                        <div class="book-shadow-right"></div>
                        <div class="left-side-filter-content in-memory-inner-bg  ">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">In Memory Off</h1>
                                <p>We live in a world where we hardly have time to ponder on events that took place
                                    in the last few weeks/months, much less events from previous years and beyond. I
                                    would venture to say, that visiting a cemetery to honor those that were
                                    important in our lives, and are no longer with us, is even a lesser priority as
                                    time goes by. That is not to say that we intentionally want to forget them, but
                                    rather to recognize the challenges in which we live in to honor the living, much
                                    less the dead. Given that reality, we wanted to create a service that can give
                                    our users the vehicle to keep those that are no longer with us alive through
                                    remembrance. The user can create a book of the deceased using picture, videos,
                                    and text. The user can also create a list of family members and friends that
                                    they would like to participate in the process. Each participant can upload an
                                    image in which they appear with the deceased, and then write a paragraph or two
                                    about their relationship, what made that person special in their life, an act of
                                    kindness, an anecdote, funny story… All participants, on the day of the deceased
                                    birthday/death anniversary will receive an email reminding them of it. Intent is
                                    so everyone that was touched in one way or another by the deceased, pay tribute
                                    to him/her by reviewing the book. It is also the perfect opportunity for the
                                    family to get together, as a family commemorate their deceased
                                    birthday/anniversary. Death is only real, if no one alive remembers them, as
                                    long as they are remembered, they will be alive, just not physically present.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="canvas" class="librabry-wrap">
                        <div id="book-zoom" class="btn-wrapper"
                            style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book"></div>
                            <button class="filter-cross-button"><i class="fa-solid fa-xmark"></i></button>
                            <button class="filter-button upload-button"><img src="./assets/images/filter.png"></button>
                            <button class="library-search-button "><i class="fa-solid fa-trash-can"></i></button>
                            <button class="editor-btn "><i class="fa-regular fa-pen-to-square edit-icon"></i></button>
                            <button class="cross-button">Return Book</button>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                <h1 class="poets-heading">In Memory Of</h1>
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-5" src="./assets/images/upload-book.png"
                                            data-id="front-cover.png"
                                            class="initBook  personal-diary-book  create-diary-book create-memory-book"
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