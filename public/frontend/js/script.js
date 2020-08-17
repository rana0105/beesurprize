//dropdown on hover
$('ul.navbar-nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$("#signupModal").on('show.bs.modal', function (e) {
    $("#staticBackdrop").modal("hide");
});
// FAQ
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

/*---------- Promo Video Home Page -----------*/
$(document).ready(function() {
// Gets the video src from the data-src on each button
var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);
// when the modal is opened autoplay it  
$('#promoVideoModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  
// stop playing the youtube video when I close the modal
$('#promoVideoModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
// document ready  
});

/*---------- Lottery Ticket No Search -----------*/
$('.ticketno').keyup(function() {
  var foo = $(this).val().split("-").join(""); // remove hyphens
  if (foo.length > 0) {
    foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
  }
  $(this).val(foo);
});

/*---------- Select 2 ----------*/
$('.prize').select2({
	placeholder:"Select a prize"
});
$('.contest-list').select2({
	placeholder:"Select contest no"
});
$('.prize-brand').select2();

$('#winning-month').Monthpicker({

  // default values
  // format: mm/yyyy
  minYear: null,
  maxYear: null,
  minValue: null,
  maxValue: null,

  // i18n
  monthLabels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jui", "Aug", "Sep", "Oct", "Nov", "Dec"],

  // Callback events
  onSelect: function() { return; },
  onClose: function() { return; }
});


let sliders, sliderfills, thumbs, slidervalues;
let initialValue = [38,50,63,88]; //initial values for the slidersrgb(90, 75, 204)

document.addEventListener('DOMContentLoaded', function (e) { init();});

function init(){
  sliders = document.querySelectorAll(".customrange");
  sliderfills = document.querySelectorAll(".sliderfill");
  thumbs = document.querySelectorAll(".sliderthumb");
  slidervalues = document.querySelectorAll(".slidervalue");
  /* We need to change slider appearance to respond to both input and change events. */
  for (let i=0;i<sliders.length;i++){
    sliders[i].addEventListener("input",function(e){updateSlider(i,sliders[i].value);});
    sliders[i].addEventListener("change",function(e){updateSlider(i,sliders[i].value);});
    //set initial values for the sliders
    sliders[i].value = initialValue[i];
    //update each slider
    updateSlider(i,sliders[i].value);
  }
}
function updateSlider(fillindex,val){
  //sets the text display and location for each thumb and the slider fill  
  let min = Number(sliders[fillindex].getAttribute("min"));
  let max = Number(sliders[fillindex].getAttribute("max"));
  let pc = (val/(max-min)) * 100
  setThumbText(slidervalues[fillindex],val,pc);
  setThumb(thumbs[fillindex],pc);
  setSliderFill(sliderfills[fillindex],pc);
}
function setThumbText(elem,val,pc){
  let size = getComputedStyle(elem).getPropertyValue("--thumbsize");
  let newx = `calc(${pc}% - ${parseInt(size)/2}px)`;
  elem.style.left = newx;
  elem.innerHTML = val;
}
function setThumb(elem,val){
  let size = getComputedStyle(elem).getPropertyValue("--thumbsize");
  let newx = `calc(${val}% - ${parseInt(size)/2}px)`;
  elem.style.left = newx;
  let max = 100;
  let degrees = 360 * (val/max);
  let rotation = `rotate(${degrees}deg)`;
  elem.style.transform = rotation;
}
function setSliderFill(elem,val){
  let fillcolor = getComputedStyle(elem).getPropertyValue("--accentcolor");
  let alphafillcolor = getComputedStyle(elem).getPropertyValue("--accentcoloralpha");
  // we create a linear gradient with a color stop based on the slider value
  let gradient = `linear-gradient(to right, ${fillcolor} 0%, ${alphafillcolor} ${val}%, 
rgba(255,255,255,0.1) ${Number(val) + 1}%, 
rgba(255,255,255,0)  100%)`;
  elem.style.backgroundImage = gradient;
}

// Social share
document.addEventListener("DOMContentLoaded", function(event) { 

  // Uses sharer.js 
  //  https://ellisonleao.github.io/sharer.js/#twitter  
     var url = window.location.href;
     var title = document.title;
     var subject = "Read this good article";
     var via = "yourTwitterUsername";
     //console.log( url );
     //console.log( title );

  //facebook
  $('#share-wa').attr('data-url', url).attr('data-title', title).attr('data-sharer', 'whatsapp');
  //facebook
  $('#share-fb').attr('data-url', url).attr('data-sharer', 'facebook');
  //twitter
  $('#share-tw').attr('data-url', url).attr('data-title', title).attr('data-via', via).attr('data-sharer', 'twitter');
  //linkedin
  $('#share-li').attr('data-url', url).attr('data-sharer', 'linkedin');
  // google plus
  $('#share-gp').attr('data-url', url).attr('data-title', title).attr('data-sharer', 'googleplus');
    // email
    $('#share-em').attr('data-url', url).attr('data-title', title).attr('data-subject', subject).attr('data-sharer', 'email');

  //Prevent basic click behavior
  $( ".sharer button" ).click(function() {
    event.preventDefault();
  });
    
  // only show whatsapp on mobile devices  
  var isMobile = false; //initiate as false
  // device detection
  if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
      || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
      isMobile = true;
  }

  if ( isMobile == true ) {
  $("#share-wa").hide();
  }
});

// Ticket quantity add
(function($) {
  $.fn.spinner = function() {
    this.each(function() {
      var el = $(this);

      // add elements
      el.wrap('<span class="spinner"></span>');     
      el.before('<span class="sub">-</span>');
      el.after('<span class="add">+</span>');

      // substract
      el.parent().on('click', '.sub', function () {
        if (el.val() > parseInt(el.attr('min')))
          el.val( function(i, oldval) { return --oldval; });
      });

      // increment
      el.parent().on('click', '.add', function () {
        if (el.val() < parseInt(el.attr('max')))
          el.val( function(i, oldval) { return ++oldval; });
      });
      });
  };
})(jQuery);

$('input[type=number]').spinner();

// Countdown for contest detail
var target_date = new Date().getTime() + (1000*3600*48); // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

  // find the amount of "seconds" between now and target
  var current_date = new Date().getTime();
  var seconds_left = (target_date - current_date) / 1000 ;

  days = pad( parseInt(seconds_left / 86400) );
  seconds_left = seconds_left % 86400;
     
  hours = pad( parseInt(seconds_left / 3600) );
  seconds_left = seconds_left % 3600;
      
  minutes = pad( parseInt(seconds_left / 60) );
  seconds = pad( parseInt( seconds_left % 60 ) );

  // format countdown string + set tag value
  countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
  return (n < 10 ? '0' : '') + n;
}

// Modal ticket select
const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 20;
  const newVal = Number(((val - min) * 20) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}

//Profile image
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

// Data table
$('#pastdraw').DataTable({
    dom: 'frt',
    "bFilter": false, 
    "scrollX": true,
    "columnDefs": [
        { "orderable": false, "targets": "_all" } // Applies the option to all columns
    ],    
});

$('#myorder').DataTable({
    dom: 'frt',
    "bFilter": false, 
    "scrollX": true,
    "columnDefs": [
        { "orderable": false, "targets": "_all" } // Applies the option to all columns
    ],    
});

$('#mypartners').DataTable({
    dom: 'frt',
    "scrollX": true,
    language: { search: "" },
    "columnDefs": [
        { "orderable": false, "targets": "_all" } // Applies the option to all columns
    ],    
});