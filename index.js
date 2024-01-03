
$(document).ready(function() {
  $.ajax({
    method: 'GET',
    url: './api/atv.php',
    dataType: 'json',
    success: function(response) {
      console.log(response);
      
      if (response.RespCode === 200) {
        var atvData = response.data;
        
        const notificationImg = document.getElementById('notificationImg');
        const notificationText = document.getElementById('notificationText');
        const messages = [];
        const images = [];

        // วนลูปผ่าน atvData เพื่อสร้าง messages และ images
        for (let i = 0; i < atvData.length; i++) {
          messages.push(atvData[i].atv_name); // เพิ่มข้อความจากข้อมูลที่ได้รับมา
          images.push(`./images/gallery/${atvData[i].atv_img}`);
        }

        let index = 0;
        setInterval(() => {
          notificationText.textContent = messages[index];
          notificationImg.src = images[index];
          notificationImg.style.display = 'inline-block'; // แสดงรูปภาพ
          index = (index + 1) % messages.length;
        }, 5000); // เปลี่ยนข้อความทุก 5 วินาที
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
    url: './api/index_pag.php',
    dataType: 'json',
    success: function(response) {
      console.log(response);
      
      if (response.RespCode === 200) {
        var clinicData = response.data;
        
        var html = '<div class="row">';
        for (var i = 0; i < clinicData.length; i++) {
          html += `
            <div class="col-md-6">
            <a href="${clinicData[i].b_link}">
              <div class="card card-1 shadow-sm">
                <div class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" style="image-rendering: optimizeQuality;">
                  <img src="./images/index_pag/${clinicData[i].b_logo}" width="100%" height="100%"/>
                </div>
                <div class="card-body">
                  <p class="card-text">${clinicData[i].b_name}</p>
                  <div class="d-flex justify-content-between align-items-center">
                     <small class="text-muted">${clinicData[i].b_time}</small>
                   </div>
                </div>
              </div>
              </a>
            </div>
          `;
        }
        html += '</div>'; // ปิด row

        $("#newsContainer").html(html);
      } else {
        console.log("มีข้อผิดพลาดในการรับข้อมูล");
      }
    },
    error: function(err) {
      console.log("เกิดข้อผิดพลาดในการเรียก API: ", err);
    }
  });
});



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

// เลือกปุ่มรีเฟรช
const refreshButton = document.getElementById('refreshButton');

// เมื่อคลิกที่ปุ่มรีเฟรช
refreshButton.addEventListener('click', () => {
    const notificationImg = document.getElementById('notificationImg');
    const imageUrl = 'URL ของรูปภาพที่ต้องการให้รีเฟรช'; // เปลี่ยน URL ตามที่ต้องการ

    // ให้รูปภาพเปลี่ยน URL และรีเฟรช
    notificationImg.src = imageUrl + '?time=' + new Date().getTime();
});

// modal
document.getElementById('copy-button').addEventListener('click', function () {
  var modalContent = "ที่อยู่ :  57 ถ.ไสน้ำเย็น ต.ป่าตอง อ.กะทู้ จ.ภูเก็ต 83150 <br> Patong Hospital : 57 sainamyen Rd., Patong, Kathu, Phuket 83150 Thailand";

  // ตรวจสอบว่า navigator.clipboard สามารถใช้งานได้หรือไม่
  if (!navigator.clipboard) {
      console.error('บราวเซอร์ไม่รองรับการเข้าถึง Clipboard');
      return;
  }

  // เขียนข้อความลง Clipboard
  navigator.clipboard.writeText(modalContent)
      .then(() => {
          var myModal = bootstrap.Modal.getInstance(document.getElementById('myModal'));
          myModal.hide();
          alert('คัดลอกข้อความแล้ว!');
      })
      .catch(err => {
          console.error('ไม่สามารถคัดลอกข้อความได้: ', err);
          alert('เกิดข้อผิดพลาดในการคัดลอกข้อความ');
      });
});


