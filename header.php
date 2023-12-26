<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<header class="blog-header py-3 slow-fade-in">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <div class="logo slow-fade-in">
                    <img class="img-fluid" src="images/logo-main.png" />
                </div>

            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="link-primary" href="#" aria-label="Search" id="searchIcon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                <title>Search</title>
                <circle cx="10.5" cy="10.5" r="7.5"/>
                <path d="M21 21l-5.2-5.2"/>
              </svg>
            </a>
            

            &nbsp;
                <a class="btn btn-sm btn-outline-primary" href="#">Sign up</a>
            </div>
        </div>

        <div id="searchBox" class="collapse" style="display: none;">
        &nbsp;
        &nbsp;
        <div class="d-flex">
            <div class="flex-grow-1">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="ค้นหาข่าวและข้อมูล" aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
            </div>
            &nbsp;
            <div>
                <div class="input-group mb-2">
                    <i class="fa-solid fa-magnifying-glass" style="color: #007bff"></i>
                    <i class="fa-solid fa-xmark"></i>
                    
                </div>
            </div>
        </div>
      </div>
    </header>


<script>
document.addEventListener("DOMContentLoaded", function() {
    let timeoutId; // เก็บ ID ของ setTimeout

    const searchIcon = document.getElementById('searchIcon');
    const searchBox = document.getElementById('searchBox');
    const closeIcon = searchBox.querySelector('.fa-xmark');
    const searchInput = searchBox.querySelector('input'); // เลือก input ของ searchBox

    searchIcon.addEventListener('click', function() {
        searchIcon.style.display = 'none';
        searchBox.style.display = 'block';

        // เมื่อคลิกที่ปุ่มค้นหา ตั้งเวลาให้ซ่อน searchBox หลังจาก 10 วินาที
        timeoutId = setTimeout(function() {
            searchIcon.style.display = 'inline';
            searchBox.style.display = 'none';
        }, 10000); // 10 วินาที
    });

    closeIcon.addEventListener('click', function() {
        searchIcon.style.display = 'inline';
        searchBox.style.display = 'none';

        // ถ้ามีการคลิกปิด ให้ยกเลิกการซ่อน searchBox ที่ถูกตั้งไว้
        clearTimeout(timeoutId);
    });

    // ตรวจสอบการพิมพ์ในช่องค้นหา
    searchInput.addEventListener('input', function() {
        clearTimeout(timeoutId); // ยกเลิกการซ่อน searchBox เมื่อมีการพิมพ์
    });
});

$(document).ready(function() {
    $('#searchIcon').on('click', function() {
        $('#searchBox').collapse('toggle');
    });

    $('.fa-xmark').on('click', function() {
        $('#searchBox').collapse('hide');
    });
});
</script>