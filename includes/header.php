<header class="head-sec">
    <div class="container-fluid">
        <div class="row d-flex align-items-center justify-content-center pt-2 pb-2">
            <div class="col-md-2  col-sm-10">
                <div class="logo text-lg-center">
                    <a href="#"><img src="./assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-10 col-sm-10">
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-lg-7 col-md-11 my-xl-0 my-3">
                        <ul class="primary-navs">
                            <div class="close-icon">
                                <i class="fa-solid fa-xmark menu-toggle"></i>
                            </div>
                            <li class="nav-bars"> <a href="./"><i class="fa-solid fa-house"></i></a></li>
                            <li class="nav-bars"><a href="#"><i class="fa-solid fa-message"></i></a></li>
                            <li class="nav-bars"> <a href="#">About Us</a> </li>
                            <li class="nav-bars"> <a href="./poets.php">Poets Corner</a> </li>
                            <li class="nav-bars"> <a href="./liabrary.php">My Library</a> </li>
                        </ul>
                        <div class="row" id="searchInput">
                            <div class="col-lg-8 col-md-10 col-sm-10 mx-auto">
                                <input type="search" placeholder="Search Here..." class="w-100 py-4 rounded-pill top-search">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 my-xl-0 my-3">
                        <div class="btn-side d-flex justify-content-around align-items-center">
                            <button id="search-btn" class="bg-transparent border-2 p-3 rounded-pill"><i class="fa-solid fa-magnifying-glass" id="search-icon"></i></button>
                            <a class="profile header-btns ">
                                <img src="./assets/images/profilr.png" class="initBook" id="book-32" data-id="personal-diary_front.jpg" alt="">
                            </a>
                            <a class="btn pe-5 ps-5 py-2 mx-sm-3 header-btns initBook" id="book-30" data-id="personal-diary_front.jpg">Login</a>
                            <a class="btn pe-5 ps-5 py-2 mx-sm-3 header-btns initBook" id="book-31" data-id="personal-diary_front.jpg">Register</a>
                            <div class="menu-icon">
                                <i class="fa-solid fa-bars menu-toggle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <div id="canvas" class="librabry-wrap">
    <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
      <div class="sj-book"></div>
      <button class="cross-button">Return Book</button>
    </div>
  </div> -->
    <div id="demo_book">
        <div class="book-30target3 d-none">
            <div class="left-side-filter-content position-relative  h-100 p-70 position-absolute login-page">

                <!--  Login Page Start  -->
                <h1 class="text-center">Login Page </h1>
                <p class="auth-disc">We really appreciate the trust you place in us. It is a privilege to serve you, we
                    will
                    do everything within our power to ensure we meet your expectations and if possible, go beyond those
                    expectations</p>
                <div class=" auth-fields form-group">
                    <label for="" class="label-field">Email Address*</label>
                    <input type="text" class="input-field w-100 title-field" placeholder='Add Title'>
                    <div class="d-flex flex-column position-relative">
                        <label for="text" class="label-field">Password:</label>
                        <input type="password" class="input-field pass-field" placeholder="****************" />
                        <div class="eye-icon">
                            <i class="fa-solid fa-eye show-pass"></i>
                        </div>
                        <div class="form-options">
                            <a href="#">Sign up</a>
                            <a href="#">forget Password?</a>
                        </div>
                        <button class="ck-btn">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="book-31target3 d-none">
        <div class="left-side-filter-content position-relative h-100 p-40 register-page">
            <div class="filter-content-wrapper">
                <form action="#" class="form">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload2" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload2"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" class="w-100" style="background-image: url(./assets/images/profilr.png);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="text" class="label-field">First Name*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter First name" />
                        </div>
                        <div class="col-6">
                            <label for="text" class="label-field">Last Name*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter Last name" />
                        </div>
                    </div>
                    <label for="text" class="label-field">Gender*</label>
                    <select name="" class="input-field" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <label for="text" class="label-field">Email Address*</label>
                    <input type="email" class="input-field w-85" placeholder="Enter Last name" />
                    <div class="d-flex flex-column position-relative">
                        <label for="text" class="label-field">Password*</label>
                        <input type="password" class="input-field pass-field" placeholder="****************" />
                        <div class="eye-icon">
                            <i class="fa-solid fa-eye show-pass"></i>
                        </div>
                    </div>
                    <div class="d-flex flex-column position-relative">
                        <label for="text" class="label-field">Confrim Password*</label>
                        <input type="password" class="input-field pass-field" placeholder="****************" />
                        <div class="eye-icon">
                            <i class="fa-solid fa-eye show-pass"></i>
                        </div>
                    </div>
                    <label for="" class="label-field">primary Date:</label>
                    <input type="date" class="input-field">
                    <label for="text" class="label-field">Primary language*</label>
                    <select name="" class="input-field" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <label for="text" class="label-field">Secondarylanguage*</label>
                    <select name="" class="input-field" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <label for="text" class="label-field">Disability*</label>
                    <select name="" class="input-field" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <button class="ck-btn">Continue</button>
                </form>
            </div>
        </div>
    </div>
    <!-- profile page -->
    <div class="book-32target3 d-none">
        <div class="left-side-filter-content position-relative h-100 p-40 profile-page">
            <div class="filter-content-wrapper">
                <form action="#" class="form">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload3" class="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload3"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" class="w-100" style="background-image: url(./assets/images/profilr.png);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="text" class="label-field">First Name*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter First name" />
                        </div>
                        <div class="col-6">
                            <label for="text" class="label-field">Last Name*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter Last name" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="text" class="label-field">From*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter First name" />
                        </div>
                        <div class="col-6">
                            <label for="text" class="label-field">To*</label>
                            <input type="text" class="input-field w-85" placeholder="Enter Last name" />
                        </div>
                    </div>
                    <input type="te xt" class="input-field" placeholder="Single" />
                    <select name="" class="input-field" id="">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                    <div class="d-flex flex-column position-relative">
                        <label for="text" class="label-field">Couple Password:</label>
                        <input type="password" class="input-field pass-field" placeholder="****************" />
                        <div class="eye-icon">
                            <i class="fa-solid fa-eye show-pass"></i>
                        </div>
                    </div>
                    <button class="ck-btn uppercase">Submit Now</button>
                </form>
            </div>
        </div>
    </div>
</header>