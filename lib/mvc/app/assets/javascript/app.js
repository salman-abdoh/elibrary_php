
/*counter*/
const countdown = () => {
  const upperDate = new Date('feb 11 , 2022 00:00:00').getTime();
  const currentDate = new Date().getTime();
  const diffDate = upperDate - currentDate;
  const second = 1000;
  const minutes = second * 60;
  const hours = minutes * 60;
  const days = hours * 24;


  const m_days = Math.floor(diffDate / days);
  const m_hours = Math.floor((diffDate % days) / hours);
  const m_minutes = Math.floor((diffDate % hours) / minutes);
  const m_seconds = Math.floor((diffDate % minutes) / second);
  var d = document.getElementById('days');
  var h = document.getElementById('hours');
  var m = document.getElementById('minutes');
  var s = document.getElementById('seconds');
  d.innerHTML = m_days + "days";
  h.innerHTML = m_hours + "hours";
  m.innerHTML = m_minutes + "minutes";
  s.innerHTML = m_seconds + "second";
}
setInterval(countdown, 1000);
/*************** */

// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("modlesign");

// Get the button that opens the modal
var btn = document.getElementById("mybtn");
var btn2 = document.getElementById("creat_ac");
var btn3 = document.getElementById("sigbtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function () {
  modal.style.display = "block";
}

btn2.onclick = function () {
  modlesign.style.display = "block";
}
btn3.onclick = function () {
  modlesign.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//start checkout//
var info_perso = document.getElementById("info_perso");
var info_bank = document.getElementById("info_bank");
var exept = document.getElementById("exept");
var success = document.getElementById("success");

var next1 = document.getElementById("next1");
var next2 = document.getElementById("next2");
var next3 = document.getElementById("next3");
var back1 = document.getElementById("back1");
var back2 = document.getElementById("back2");
var prog = document.getElementById("prog")

next1.onclick = function () {
  info_perso.style.left = "-660px"
  prog.style.width = "50%"
  info_bank.style.left = "0px"



}
next2.onclick = function () {
  info_bank.style.left = "-660px"
  prog.style.width = "75%"
  exept.style.left = "0px"



}
back1.onclick = function () {
  info_perso.style.left = "0px"
  prog.style.width = "25%"
  info_bank.style.left = "660px"



}
back2.onclick = function () {
  info_bank.style.left = "0px"
  prog.style.width = "50%"
  exept.style.left = "660px"



}

next3.onclick = function () {
  exept.style.display = "none"
  prog.style.width = "100%"
  success.style.display = "block"



}
/***********
 * 
 */
var cookicount = 0;
function add() {
  cookicount = cookicount + 1;
  document.getElementById("count").innerHTML = cookicount;
  localStorage.setItem("cookicount", cookicount);
  cookicount = localStorage.getItem("cookicount");
}

function langChange() {
  var styles = document.getElementsByTagName('link');
  var en = document.getElementById('css');
  if (en.getAttribute('href') == 'css/style.css') {
    en.setAttribute('href', 'css/en.css');
  }
  else {
    en.setAttribute('href', 'css/style.css');
  }
}
/***toggl */
function toog() {
  var toog = document.getElementById('head');

  if (toog.style.display === "none") {
    toog.style.display = "block";
  }
  else {
    toog.style.display = "none";
  }
}
/******slid */
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}