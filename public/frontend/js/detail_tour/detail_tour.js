// =========================date_jquery======================
// $(document).ready(function() {
//     var minDate=new Date();
//     $("#datepicker").datepicker({
//         showAnim:'drop',
//         numberOfMonth:1,
//         minDate:minDate,
//         dateFormat:'dd/mm/yy',
//     });
// });
//======================header page detail product.===============
const translate = document.querySelectorAll(".translate");
const big_title = document.querySelector(".slider-text");
const header = document.querySelector("header");
const section = document.querySelector("section");
const opacity = document.querySelectorAll(".opacity");
let header_height = header.offsetHeight;
let section_height = section.offsetHeight;

window.addEventListener('scroll', () => {
    let scroll = window.pageYOffset;

    translate.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateY(${scroll * speed}px)`;
    });
    big_title.style.opacity = -scroll / (header_height / 2) + 1;

});
// =========================================
$(function() {
    var minDate = new Date();
    $("#datepicker").datepicker({
        defaultDate: new Date(),
        showAnim: 'drop',
        numberOfMonth: 1,
        minDate: minDate,
        dateFormat: 'dd/mm/yy',
        beforeShowDay: function(date) {
            var disabled = true, // date enabled by default
                // get the number of days in current month
                numOfDays = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
            if (numOfDays % 4 == 0)
                disabled = (date.getDate() % 4 != 0) // for even-days months, disable the even dates
            else disabled = (date.getDate() % 4 == 0) //for odd - days months, disable the odd dates
            return [disabled, ""]
        }

    });
});

// =====================tabs============================

const tabLink = document.querySelectorAll(".tablinks");
const panes = document.querySelectorAll(".tabcontent");

// for(var i = 0; i < tabLink.length; i++ ) {
//     tabLink[i].onclick = function () {
//         tabLink.classList.toggle('active_page')
//     }
// }
tabLink.forEach((tabs, index) => {
    const showPan = panes[index]
    tabs.onclick = function() {
        const tabLinkview = document.querySelector(".tablinks.active_page");
        const panesView = document.querySelector(".tabcontent.active_page");

        tabLinkview.classList.remove('active_page');
        panesView.classList.remove('active_page');

        this.classList.add('active_page');
        showPan.classList.add('active_page');
    }
})



// =======================zoom-img===================
var modall = document.querySelectorAll('.myImg');
var img = document.getElementById('myImg');
var modalImg = document.getElementById('img1');
var captionText = document.getElementById('caption');
var span = document.getElementsByClassName('close-img')[0];
for (var j = 0; j < modall.length; j++) {
    var modaImg = document.querySelector("#MyModal");
    modall[j].onclick = function() {
        modaImg.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    span.onclick = function() {
        modaImg.style.display = "none";
    }
}

//==================================show img====================


const img_detail = document.querySelectorAll('.action-img'),
    previewBox = document.querySelector('.previews-img'),
    prevewImg = previewBox.querySelector('.show-img-detai-tour')
closeIcon = previewBox.querySelector('.icons');
currentImg = previewBox.querySelector('.currents-i');
totalImg = previewBox.querySelector('.total-imgs');
shadowImg = document.querySelector('.shawdow2-show-img');
window.onload = () => {
        for (let i = 0; i < img_detail.length; i++) {
            totalImg.textContent = img_detail.length;
            let newIndex = i;
            let clickImgIndex;

            img_detail[i].onclick = () => {
                clickImgIndex = newIndex;

                function preview() {
                    currentImg.textContent = newIndex + 1;
                    let selectedImgUrl = img_detail[newIndex].querySelector('.img-detail_list_tour').src;
                    prevewImg.src = selectedImgUrl;
                    console.log(img_detail[newIndex]);
                }
                const prevBtn = document.querySelector('.previews');
                const nextBtn = document.querySelector('.nexts');

                if (newIndex == 0) {
                    prevBtn.style.display = 'none'
                }
                if (newIndex >= img_detail.length - 1) {
                    nextBtn.style.display = 'none'
                }
                prevBtn.onclick = () => {
                    newIndex--;
                    if (newIndex == 0) {
                        preview();
                        prevBtn.style.display = 'none'
                    } else {
                        preview();
                        nextBtn.style.display = 'block';
                    }

                }
                nextBtn.onclick = () => {
                    newIndex++;
                    if (newIndex >= img_detail.length - 1) {
                        preview();
                        nextBtn.style.display = 'none'
                    } else {
                        preview();
                        prevBtn.style.display = 'block';
                    }

                }
                preview();
                previewBox.classList.add('shows');
                shadowImg.style.display = 'block';
                closeIcon.onclick = () => {
                    newIndex = clickImgIndex;
                    prevBtn.style.display = 'block';
                    nextBtn.style.display = 'block';
                    previewBox.classList.remove('shows');
                    shadowImg.style.display = 'none';

                }
            }
        }
    }
    // ==========================================CLOCK==========
const deg = 6;
const hr = document.querySelector('#hr');
const mn = document.querySelector('#mn');
const sc = document.querySelector('#sc');

setInterval(() => {
    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * deg;
    let ss = day.getSeconds() * deg;

    hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
    mn.style.transform = `rotateZ(${mm}deg)`;
    sc.style.transform = `rotateZ(${ss}deg)`;
})

// ==========================date=====
$(document).ready(function() {
    var minDate = new Date();
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) {
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});

$(function() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));
});
