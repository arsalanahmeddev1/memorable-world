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


                    <div class="book-12target3 d-none">
                        <!-- <div class="page-content-wrapper">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">Couple Diary</h1>
                                <p>Pictures and videos are the most effective conduit to help us re-live special events in our lives. The challenge is how to maintain an inventory of these pictures and videos in a chronological order and be accessible at a click of a button. Vacations, graduations, birthdays, weddings, Mother’s Day, anniversaries, or just a night out with friends, are important events that, to some extent, shape our lives and strengthens our relationships. If it is a challenge to keep them in order, it is much more difficult to share with family and friends as time passes. This page is the perfect solution to keep all those memories at our fingertip and be able to share with anyone we wish to. Example, when the family goes on vacation, overtime, we may lose the device where the images are stored, or we may have access to the pictures, but not remember where it was taken, or it may not be in chronological order. By creating an eBook of each event, uploading pictures as they are taken, and adding text along the way, will ensure accessibility, as well as recollecting the event in a more complete way using the text, and be able to share it with anyone. A link of each book will be automatically inserted to the user’s Personal Diary so that, at ease, be able to click the link and be taken to the book.</p>
                            </div>
                        </div> -->
                    </div>

                    <div class="book-13target3 d-none">
                        <div class="page-content-wrapper">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">Special Events</h1>
                                <p>Communication and sensual appeal are critical ingredients for couples to be in harmony. As time goes by, this becomes much more critical, but the daily routines make it a challenge for the couple to stay synchronized. It is difficult to notice those small things that in the long run, is what makes the relation worth it. This portal is the perfect vehicle to keep an open communication, and perhaps a more honest one, as there may be times that we think, or desire something that is difficult to say in person, especially when it comes to intimate desires; this channel facilitate such level of openness. Couple can write any thought, and the other person will be notified immediately, no matter how far apart they may be. This helps keep daily routine more interesting. It provides an opportunity to create special moments for both partners and be able to upload those moments of togetherness. Upload picture and video of the week to help the couple grow and be able to reflect on those especial moments that otherwise, will be left in the distant past with no recollection, though it might have deeply touched them at that moment. User will be able to print a physical book by volume, with the ability to exclude any compromising images should the user want to do so.</p>
                            </div>
                        </div>
                    </div>

                    <div class="book-14target3 d-none">
                        <div class="page-content-wrapper-Memory">
                            <div class="page-content">
                                <h1 class="mx-auto text-center">In Memory Off</h1>
                                <p>We live in a world where we hardly have time to ponder on events that took place in the last few weeks/months, much less events from previous years and beyond. I would venture to say, that visiting a cemetery to honor those that were important in our lives, and are no longer with us, is even a lesser priority as time goes by. That is not to say that we intentionally want to forget them, but rather to recognize the challenges in which we live in to honor the living, much less the dead. Given that reality, we wanted to create a service that can give our users the vehicle to keep those that are no longer with us alive through remembrance. The user can create a book of the deceased using picture, videos, and text. The user can also create a list of family members and friends that they would like to participate in the process. Each participant can upload an image in which they appear with the deceased, and then write a paragraph or two about their relationship, what made that person special in their life, an act of kindness, an anecdote, funny story… All participants, on the day of the deceased birthday/death anniversary will receive an email reminding them of it. Intent is so everyone that was touched in one way or another by the deceased, pay tribute to him/her by reviewing the book. It is also the perfect opportunity for the family to get together, as a family commemorate their deceased birthday/anniversary. Death is only real, if no one alive remembers them, as long as they are remembered, they will be alive, just not physically present.</p>
                            </div>
                        </div>
                    </div>

                    <div id="canvas" class="librabry-wrap">
                        <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                            <div class="sj-book "></div>
                            <button class="cross-button " id="addtionalCss">Return Book</button>
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
                                    <a href="#"><img id="book-11" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-12" src="./assets/images/Couple-Diary-book.png" data-id="coupleDiary.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-13" src="./assets/images/Special-Events-book.png" data-id="special-events-back.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-14" src="./assets/images/In-Memory-book.png" data-id="front-cover.png" class="initBook personal-diary-book" alt=""></a>
                                </div>
                                <img src="./assets/images/shelf-books.png" class="w-100 main-shelf" alt="">
                            </div>
                            <div class="book-area mt-5">
                                <div class="book-wrapper d-flex justify-content-center">
                                    <a href="#"><img id="book-11" src="./assets/images/astrology-book.png" data-id="personal-diary_front.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-12" src="./assets/images/Couple-Diary-book.png" data-id="coupleDiary.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-13" src="./assets/images/Special-Events-book.png" data-id="special-events-back.jpg" class="initBook personal-diary-book" alt=""></a>
                                    <a href="#"><img id="book-14" src="./assets/images/In-Memory-book.png" data-id="front-cover.png" class="initBook personal-diary-book" alt=""></a>
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