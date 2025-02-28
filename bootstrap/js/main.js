var owl = $('.owl-carousel');
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:2,
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
        }
    }
})

window.addEventListener(
  "scroll",
  () => {
    document.body.style.setProperty(
      "--scroll",
      window.pageYOffset / (document.body.offsetHeight - window.innerHeight)
    );
  },
  false
);

// Get the button
let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    } else {
    mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$('#timerange').on('change' ,function(){
    $('#timetext').text($('#timerange').val());
});

var skipSlider = document.getElementById("skipstep");
var skipValues = [
    document.getElementById("skip-value-lower"),
    document.getElementById("skip-value-upper")
];

noUiSlider.create(skipSlider, {
    start: [10, 100],
    connect: true,
    behaviour: "drag",
    step: 10,
    range: {
        min: 10,
        max: 400
    },
    format: {
        from: function (value) {
            return parseInt(value);
        },
        to: function (value) {
            return parseInt(value);
        }
    }
});

skipSlider.noUiSlider.on("update", function (values, handle) {
    skipValues[handle].innerHTML = values[handle];
});
