<script>
    $('.toggle').on('click', function() {
        $('.menu').toggleClass('active');
    });
</script>
<script>
    $(document).ready(function(){
        $('.custom-button').click(function(e){
            let x= e.pageX - $(this).offset().left;
            let y= e.pageY - $(this).offset().top;
            console.log(x);
            console.log(y);
            var style = {
                css:{
                    "left": x + 'px',
                    "top": y + 'px'
                }
            }
            var span = $("<span></span>", style);
            $(this).append(span);
            setTimeout(function (){
                span.remove();
            },500);
        })
    });
</script>
<script>
const selected = document.querySelector(".selected-sort");
const optionsContainer = document.querySelector(".options-container-sort");
const optionsList = document.querySelectorAll(".option-sort");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(o => {
  o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});
</script>
<script>
    const selected_sort = document.querySelector(".selected-jenis");
    const optionsContainer_sort = document.querySelector(".options-container-jenis");
    const optionsList_sort = document.querySelectorAll(".option-jenis");

    selected_sort.addEventListener("click", () => {
        optionsContainer_sort.classList.toggle("active");
    });

    optionsList_sort.forEach(o => {
      o.addEventListener("click", () => {
        selected_sort.innerHTML = o.querySelector("label").innerHTML;
        if(selected_sort.innerHTML == "customer"){
            document.getElementById("op_jenis1").checked = true;
        }
        else{
            document.getElementById("op_jenis2").checked = true;
        }
        optionsContainer_sort.classList.remove("active");
      });
    });
    </script>
<script>
const selected_provinsi = document.querySelector(".selected-provinsi");
const optionsContainer_provinsi = document.querySelector(".options-container-provinsi");
const optionsList_provinsi = document.querySelectorAll(".option-provinsi");
const searchBoxProvinsi = document.querySelector(".search-box-provinsi input");
selected_provinsi.addEventListener("click", () => {
  optionsContainer_provinsi.classList.toggle("active");
  searchBoxProvinsi.value = "";
  filterList("");

  if (optionsContainer_provinsi.classList.contains("active")) {
    searchBoxProvinsi.focus();
  }
});

optionsList_provinsi.forEach(o => {
  o.addEventListener("click", () => {
    selected_provinsi.innerHTML = o.querySelector("span").innerHTML;
    document.getElementById(selected_provinsi.innerHTML).checked = true;
    optionsContainer_provinsi.classList.remove("active");
  });
});

searchBoxProvinsi.addEventListener("keyup", function(e) {
  filterList(e.target.value);
});

const filterList = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList_provinsi.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};
</script>
<script>
const selected_kota = document.querySelector(".selected-kota");
const optionsContainer_kota = document.querySelector(".options-container-kota");
const optionsList_kota = document.querySelectorAll(".option-kota");
const searchBoxKota = document.querySelector(".search-box-kota input");

selected_kota.addEventListener("click", () => {
  optionsContainer_kota.classList.toggle("active");
  searchBoxKota.value = "";
  filterList("");
  if (optionsContainer_kota.classList.contains("active")) {
    searchBoxKota.focus();
  }
});

optionsList_kota.forEach(o => {
  o.addEventListener("click", () => {
    selected_kota.innerHTML = o.querySelector("span").innerHTML;
    document.getElementById(selected_kota.innerHTML).checked = true;
    optionsContainer_kota.classList.remove("active");
});
searchBoxKota.addEventListener("keyup", function(e) {
  filterList(e.target.value);
});
const filterList = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList_kota.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};
});
</script>
<script type="text/javascript" src="{{asset('assets/js/swiper.min.js')}}"></script>
<script>
    var swiper = new Swiper('.fst-swiper', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    });
</script>
<script>
   var swiper = new Swiper('.sec-swiper', {
        slidesPerView: 5,
        spaceBetween: 30,
        freeMode: true,
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
    },
    });
</script>
<script>
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 100,
            max: 10000,
            values: [3000, 5000],
            slide: function (event, ui) {
                $("#amount").val(
                    "Rp. " + ui.values[0] + "K" + " - Rp. " + ui.values[1] + "K"
                );
            },
        });
        $("#amount").val(
            "Rp. " +
            $("#slider-range").slider("values", 0) +
            "K - Rp. " +
            $("#slider-range").slider("values", 1) + "K"
        );
    });
</script>
<script>
    var galleryThumbs = new Swiper('.gallery-thumbs-detail', {
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top-detail', {
  spaceBetween: 10,
  thumbs: {
    swiper: galleryThumbs,
  },
});
</script>
