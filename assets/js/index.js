$(document).ready(function () {
    $("#search-btn").click(function () {
        $("#searchInput").toggle(500)
    })

    // $(document).on('click','.submit1',function(){
    //     console.log('abc');
    // });
})
// mobile menu 
let navs = document.querySelector('.primary-navs')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
    e.addEventListener('click', function () {
        navs.classList.toggle('active');
    });
});


// init book initilize
let buttons = document.querySelectorAll('.initBook')
// console.log(buttons) 
buttons.forEach(el => {
    el.addEventListener('click', function (e) {
        let page = e.target.dataset.page
        changeMetaContent(page, 'filename')
        let pageNumber = e.target.dataset.pagenumber
        // console.log(pageNumber);
        changeMetaContent(pageNumber, 'pageNumber')
        // $('.sm-book').trigger('click')
        initBook(e.target)
    })

})

function changeMetaContent(value, metaTagName) {
    let tag = document.querySelector('meta[name="' + metaTagName + '"]')
    tag.content = value
}
// init book initilize end

// ck editor
ClassicEditor.create(document.querySelector("#editor"), {
    toolbar: {
        items: [
            'undo', 'redo',
            '|', 'heading',
            '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
            '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
            '-', // break point
            '|', 'alignment',
            'link', 'uploadImage', 'blockQuote', 'codeBlock',
            '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
        ],
        shouldNotGroupWhenFull: true
    }
}).catch((error) => {
    console.error(error);
});


// img upload 
$(".file-upload").each(function () {
    var fI = $(this).children("input"),
        btn = $(this).children(".btn-upload"),
        i1 = $(this).children(".i-pic-upload"),
        i2 = $(this).children(".i-deselect"),
        dN = "No file Selected",
        tfN = $(this).find(".text-file-name"),
        bT = $(this).find(".text-browse");
    bT.text("Browse...");
    tfN.text("No file Selected");

    btn.click(function (b) {
        b.preventDefault();
        fI.click();
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                i1.css(
                    "background",
                    "url(" + e.target.result + ") no-repeat center"
                ).removeClass("fa fa-camera");
            };
            reader.readAsDataURL(input.files[0]);
            console.log('uploaded')
        }
    }
    fI.change(function (e) {
        readURL(this);
        var fN = e.target.files[0].name;
        tfN.text(fN);
        i2.fadeIn(200);
        bT.text("Change...");
    });
    i2.click(function () {
        i2.fadeOut(100);
        window.setTimeout(function () {
            i1.addClass("fa fa-camera");
            // i1.removeClass("fa fa-camera:before")
            bT.text("Browse...");
            // tfN.text("No file Selected");
            fI.val(null);
        }, 200);
    });
});


// 








