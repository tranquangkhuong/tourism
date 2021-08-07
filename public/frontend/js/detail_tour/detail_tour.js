
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
$(function() {
    var minDate=new Date();
    $("#datepicker").datepicker({
      defaultDate: new Date(),
      showAnim:'drop',
      numberOfMonth:1,
      minDate:minDate,
      dateFormat:'dd/mm/yy',
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

tabLink.forEach((tabs,index)=>{
    const showPan= panes[index]
    tabs.onclick = function(){
        const tabLinkview = document.querySelector(".tablinks.active");
        const panesView = document.querySelector(".tabcontent.active");

        tabLinkview.classList.remove('active');
        panesView.classList.remove('active');
        
        this.classList.add('active');
        showPan.classList.add('active');
    }
})



// =======================zoom-img===================
var modal=document.querySelectorAll('.myImg');
var img = document.getElementById('myImg');
var modalImg=document.getElementById('img1');
var captionText = document.getElementById('caption');
var span=document.getElementsByClassName('close-img')[0];
        for(var j=0;j<modal.length;j++){
            var modaImg=document.querySelector("#MyModal");
            modal[j].onclick=function(){
                modaImg.style.display="block";
                modalImg.src=this.src;
                captionText.innerHTML=this.alt;
            }

            span.onclick=function(){
                modaImg.style.display="none";
            }
        }

//==================================show img====================


const img_detail=document.querySelectorAll('.action-img'),
previewBox = document.querySelector('.previews-img'),
prevewImg =previewBox.querySelector('.show-img-detai-tour')
closeIcon = previewBox.querySelector('.icons');
currentImg= previewBox.querySelector('.currents-i');
totalImg = previewBox.querySelector('.total-imgs');
shadowImg= document.querySelector('.shawdow2-show-img');
window.onload=()=>{
    for(let i=0;i<img_detail.length;i++){
        totalImg.textContent = img_detail.length;
        let newIndex= i;
        let clickImgIndex;

        img_detail[i].onclick= ()=>{
            clickImgIndex=newIndex;
            function preview(){
                currentImg.textContent= newIndex+1;
                let selectedImgUrl = img_detail[newIndex].querySelector('.img-detail_list_tour').src;
                prevewImg.src=selectedImgUrl;
                console.log( img_detail[newIndex]);
            }
            const prevBtn=document.querySelector('.previews');
            const nextBtn=document.querySelector('.nexts');

            if(newIndex == 0){
                prevBtn.style.display='none'
            }
            if(newIndex >=img_detail.length-1){
                nextBtn.style.display='none'
            }
            prevBtn.onclick = ()=>{
                newIndex --;
                if(newIndex == 0){
                    preview();
                    prevBtn.style.display='none'
                }else{
                    preview();
                    nextBtn.style.display='block';
                }

            }
            nextBtn.onclick = ()=>{
                newIndex ++;
                if(newIndex >=img_detail.length-1){
                    preview();
                    nextBtn.style.display='none'
                }else{
                    preview();
                    prevBtn.style.display='block';
                }

            }
            preview();
            previewBox.classList.add('shows');
            shadowImg.style.display='block';
            closeIcon.onclick=()=>{
                newIndex=clickImgIndex;
                prevBtn.style.display='block';
                nextBtn.style.display='block';
                previewBox.classList.remove('shows');
                shadowImg.style.display='none';

            }
        }
    }
}
// ==========================================CLOCK==========
        const deg= 6;
        const hr =document.querySelector('#hr');
        const mn =document.querySelector('#mn');
        const sc =document.querySelector('#sc');

        setInterval(()=>{
        let day = new Date();
        let hh = day.getHours() * 30;
        let mm = day.getMinutes() * deg;
        let ss = day.getSeconds() * deg;

        hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;
        })

// ==========================date=====
