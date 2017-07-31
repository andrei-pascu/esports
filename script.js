
$(document).ready(function() {
//Hover for navigation at the end of the page
//Color change and triangle width increase
var bLeft = 0;
var bRight = 0;
if ($(window).width() > 1000) {
  bLeft = '10vh';
  bRight = '7vh';
} else if ($(window).width() < 1000) {
  bLeft = '5.25vh';
  bRight = '5.25vh';
}
$('#newww').hover(function() {
  $( '.arrow', this).css('border-left',''+bLeft+' solid #32a3ff');
    }, function() {
      $( '.arrow', this).css('border-left',''+bRight+' solid #32a3ff');
});
$('#olddd').hover(function() {
  $( '.arrow', this).css('border-right',''+bLeft+' solid #32a3ff');
    }, function() {
      $( '.arrow', this).css('border-right',''+bRight+' solid #32a3ff');
});
//if team button if clicked make team specific nav appear
var navD = 0;
$('.nav-div').click(function(e) {
  navD = $(this);
  if($(e.target).is('#nav-news') ||
  $(e.target).is('#nav-stream') ||
  $(e.target).is('#nav-contact')) {
    $('#wrapper-navigation').css({'height': '10vh'});
    $('.display-1').css({'display': 'none'});
    $('#navigation-teams').css({'height': '0vh'});
  } else if ($(e.target).is('#nav-teams')) {
    $('#wrapper-navigation').css({'height': '20vh'});
    $('.display-1').css({'display': 'flex'});
    $('#navigation-teams').css({'height': '10vh'});
  }
  $(this).not('.display-1').removeClass('nav-hhh').addClass('nav-h');
  $(this).siblings().not('.display-1').removeClass('nav-h').addClass('nav-hhh');
});
//Open current "page", close siblings
var target = 0;
$('#navigation-bar div').click(function(event) {
  event.stopPropagation();
  target = ($(this).attr('name'));
  $('#wrapper-news, #wrapper-stream').css({'transform': 'rotateX(90deg)'});
  $('#wrapper-teams, #wrapper-contact').css({'transform': 'rotateY(90deg)'});
  $('#wrapper-'+target).css({'transform': 'rotateX(0deg)'});
});
//Subnavigation - Navigate through the team pages
Teams = 0;
$('#nav-cs').click(function() {
  if (Teams == 0 || Teams == 2 || Teams == 3) {
    Teams = 1;
    $('#cs').css({'transform': 'rotateY(0deg)'});
    $('#overwatch').css({'transform': 'rotateX(90deg)'});
    $('#lol').css({'transform': 'rotateY(90deg)'});
  }
});
$('#nav-overwatch').click(function() {
  if (Teams == 1 || Teams == 0 || Teams == 3) {
    Teams = 2;
    $('#cs').css({'transform': 'rotateY(90deg)'});
    $('#overwatch').css({'transform': 'rotateX(0deg)'});
    $('#lol').css({'transform': 'rotateY(90deg)'});
  }
});
$('#nav-lol').click(function() {
  if (Teams == 1 || Teams == 2 || Teams == 0) {
    Teams = 3;
    $('#cs').css({'transform': 'rotateY(90deg)'});
    $('#overwatch').css({'transform': 'rotateX(90deg)'});
    $('#lol').css({'transform': 'rotateY(0deg)'});
  }
});
//Bind links to stream blocks
$('#stream-1').click(function() {
  window.open('https://www.facebook.com/andrei.pascu.393' , '_blank').focus();
});
$('#stream-2').click(function() {
  window.open('https://www' , '_blank').focus();
});
$('#stream-3').click(function() {
  window.open('https://www' , '_blank').focus();
});
$('#stream-4').click(function() {
  window.open('https://www' , '_blank').focus();
});
$('#stream-5').click(function() {
  window.open('https://www' , '_blank').focus();
});
$('#stream-6').click(function() {
  window.open('https://www' , '_blank').focus();
});
});
