


// ตรวจสอบขนาดหน้าจอเพื่อเปลี่ยนแสดงเมนูเป็นปุ่ม dropdown
$(document).ready(function () {
// เรียกฟังก์ชั่นเมื่อโหลดหน้าเว็บ
checkWidth();

// เรียกฟังก์ชั่นเมื่อมีการเปลี่ยนขนาดหน้าจอ
$(window).resize(checkWidth);
});

function checkWidth() {
var windowWidth = $(window).width(); // ขนาดหน้าจอปัจจุบัน

if (windowWidth <= 768) {
// ถ้าหน้าจอมีขนาดไม่เกิน 768px
// แยกการแสดงผลสำหรับโหมด responsive
$(".nav .dropdown").addClass("responsive-dropdown");
} else {
// ถ้าหน้าจอมีขนาดมากกว่า 768px
// กำหนดให้แสดงผลเมนูปกติ
$(".nav .dropdown").removeClass("responsive-dropdown");
}
}


// JavaScript
window.onscroll = function() {
var btn = document.querySelector('.scroll-to-top');
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
btn.style.display = 'block';
} else {
btn.style.display = 'none';
}
};

// เพิ่มการทำงานเมื่อคลิกที่ icon เพื่อเลื่อนขึ้นบนหน้าเว็บ
document.querySelector('.scroll-to-top').addEventListener('click', function() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});

// เพิ่มการทำงานเมื่อคลิกที่ icon searchIcon
document.getElementById('searchIcon').addEventListener('click', function() {
var searchBox = document.getElementById('searchBox');
searchBox.style.display = (searchBox.style.display === 'block') ? 'none' : 'block';

});

document.querySelectorAll('.dropdown-item').forEach(item => {
item.addEventListener('click', function() {
this.querySelector('.dropdown-item.item').classList.toggle('show');
});
});



document.addEventListener("DOMContentLoaded", function() {
const dropdownMenus = document.querySelectorAll('.dropdown-item');

dropdownMenus.forEach(function(item) {
const nestedItem = item.querySelector('.nested-item');
if (nestedItem) {
nestedItem.style.display = 'none';

item.addEventListener('click', function(event) {
  event.stopPropagation();
  nestedItem.style.display = nestedItem.style.display === 'none' ? 'block' : 'none';
});
}
});
});



document.addEventListener('DOMContentLoaded', function() {
const searchIcon = document.getElementById('searchIcon');
const searchBox = document.getElementById('searchBox');
const closeBtn = searchBox.querySelector('.fa-xmark');

searchIcon.addEventListener('click', function() {
searchBox.style.display = 'block';
});

closeBtn.addEventListener('click', function() {
searchBox.style.display = 'none';
});
});




document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.getElementById('curtain').classList.add('hide'); // เพิ่ม class เพื่อเริ่มการปิดอย่างช้าๆ
setTimeout(function() {
document.getElementById('curtain').style.display = 'none'; // ซ่อนฉากม่านเมื่อเสร็จสิ้น
}, 1000); // รอ 3 วินาที แล้วซ่อน
}, 1000); // รอ 2 วินาที ก่อนที่จะเริ่มการปิด
});

document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.getElementById('curtain').classList.add('curtain');
}, 1000); // รอ 2 วินาที ก่อนที่จะเริ่มการปิด
});

document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
document.querySelector('.row.g-5').classList.add('show'); // เพิ่ม class เพื่อเริ่มการเคลื่อนที่
}, 2000); // รอ 2 วินาที ก่อนที่จะเริ่มการเคลื่อนที่
});



$(document).ready(function() {
  $.ajax({
    method: 'GET',
    url: './api/db.php',
    dataType: 'json',
    success: function(response) {
      console.log(response);
      
      if (response.RespCode === 200) {
        var serviceData = response.data;
        
        var html = '<div class="row">';
        for (var i = 0; i < serviceData.length; i++) {
          const cardElement = document.createElement('div');
          cardElement.classList.add('col-md-6');
          html += `<div class="col-md-6">
                    <div class="card card-1 shadow-sm">
                      <div class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" style="image-rendering: optimizeQuality;">
                        <image src="./images/service/${serviceData[i].sv_img}" width="90%" height="100%"/>
                      </div>
                      <div>
                        <p class="card-text">${serviceData[i].sv_name}</p>
                      </div> 
                    </div>
                  </div>`;
        }
        html += '</div>'; // ปิด row

        $("#servicelist").html(html);
      } else {
        console.log("มีข้อผิดพลาดในการรับข้อมูล");
      }
    },
    error: function(err) {
      console.log("เกิดข้อผิดพลาดในการเรียก API: ", err);
    }
  });
});


$(document).ready(function() {
  $.ajax({
    method: 'GET',
    url: './api/get.php',
    dataType: 'json',
    success: function(response) {
      console.log(response);
      
      if (response.RespCode === 200) {
        var clinicData = response.data;
        
        var html = '<div class="row">';
        for (var i = 0; i < clinicData.length; i++) {
          html += `
            <div class="col-md-6">
              <div class="card card-1 shadow-sm">
                <div class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" style="image-rendering: optimizeQuality;">
                  <img src="./images/clinic/${clinicData[i].cn_img}" width="90%" height="80%"/>
                </div>
                <div class="card-body">
                  <p class="card-text">${clinicData[i].cn_name}</p>
                </div>
              </div>
            </div>
          `;
        }
        html += '</div>'; // ปิด row

        $("#cliniclist").html(html);
      } else {
        console.log("มีข้อผิดพลาดในการรับข้อมูล");
      }
    },
    error: function(err) {
      console.log("เกิดข้อผิดพลาดในการเรียก API: ", err);
    }
  });
});

  document.addEventListener("DOMContentLoaded", function () {
    const clinicTab = document.querySelector("#clinic-tab");
    const serviceTab = document.querySelector("#service-tab");
    const clinicList = document.querySelector("#cliniclist");
    const serviceList = document.querySelector("#servicelist");

    clinicTab.addEventListener("click", function () {
      clinicList.style.display = "block";
      serviceList.style.display = "none";

      clinicTab.classList.add("active");
      serviceTab.classList.remove("active");
    });

    serviceTab.addEventListener("click", function () {
      clinicList.style.display = "none";
      serviceList.style.display = "block";

      clinicTab.classList.remove("active");
      serviceTab.classList.add("active");
    });
  });
