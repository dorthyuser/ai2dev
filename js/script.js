function open_nav() {
    const menuBar = document.getElementsByClassName('dash_nav')[0];
    if (menuBar) {
        if (window.innerWidth <= 900) {
            if (menuBar.style.width === '300px') {
                menuBar.style.width = '0px';
            } else {
                menuBar.style.width = '300px';
            }
        }
        else {
            if (menuBar.style.width === '300px' || menuBar.style.width === '') {
                menuBar.style.width = '0px';
            } else {
                menuBar.style.width = '300px';
            }
        }
        // console.log(menuBar);
    } else {
        console.error("Element with class 'dash_nav' not found.");
    }
}
document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
});
document.onkeydown = function (e) {
    if (event.keyCode == 123) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "E".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "S".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "H".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "A".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "F".charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == "E".charCodeAt(0)) {
        return false;
    }
};

// jQuery(document).ready(function () {
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 10) {
//             $(".top_nav").addClass("sticky");
//             $(".top_nav").addClass("anim-t");
//         } else {
//             $(".top_nav").removeClass("sticky");
//             $(".top_nav").removeClass("anim-t");
//         }
//     });
// });

function addcluster() {
    const firstPop = document.getElementsByClassName('first_pop')[0];
    const bg = document.getElementById('pop_background');
    if (firstPop) {
        if (firstPop.style.top === '-50%' || firstPop.style.top === '') {
            firstPop.style.top = '50%';
            bg.classList.add('d-block');
        } else {
            firstPop.style.top = '-50%';
            bg.classList.remove('d-block');
        }
        // console.log(menuBar);
    } else {
        console.error("Element with class 'dash_nav' not found.");
    }

}

function closeSec() {
    const firstPop = document.getElementsByClassName('sec_pop')[0];
    const bg = document.getElementById('pop_background');
    if (firstPop) {
        if (firstPop.style.top === '-50%' || firstPop.style.top === '') {
            firstPop.style.top = '50%';
            bg.classList.add('d-block');
        } else {
            firstPop.style.top = '-50%';
            bg.classList.remove('d-block');
        }
        // console.log(menuBar);
    } else {
        console.error("Element with class 'dash_nav' not found.");
    }
}

function closeFir() {
    const firstPop = document.getElementsByClassName('first_pop')[0];
    const bg = document.getElementById('pop_background');
    if (firstPop) {
        if (firstPop.style.top === '-50%' || firstPop.style.top === '') {
            firstPop.style.top = '50%';
            bg.classList.add('d-block');
        } else {
            firstPop.style.top = '-50%';
            bg.classList.remove('d-block');
        }
        // console.log(menuBar);
    } else {
        console.error("Element with class 'dash_nav' not found.");
    }
}

$(document).ready(function () {
    $('#changeprofile').on('change', function () {
        var formData = new FormData($('#profileForm')[0]); 
        const loader = document.getElementById('loader_spin');
        loader.classList.add('d-block');
        $.ajax({
            url: $('#profileForm').attr('action'), 
            type: 'POST',
            data: formData,
            processData: false,  
            contentType: false,  
            success: function (response) {
                $('.priflr').attr('src', URL.createObjectURL($('#changeprofile')[0].files[0]));
                loader.classList.remove('d-block');
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error uploading file');
            }
        });
    });
});

function onlyOne(checkbox) {
    const checkboxes = document.querySelectorAll('input[name="checkbox"]');
    
    checkboxes.forEach((item) => {
        if (item !== checkbox) {
            item.checked = false;
        }
    });
}

