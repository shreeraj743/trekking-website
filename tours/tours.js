document.addEventListener('DOMContentLoaded', function() {
    var img = selectAll('.feature-img');
    var title = selectAll('.location');
    var p = selectAll('.country');  
    var btn = selectAll('.viewb');  
    
    TweenMax.from(img, 1, {y: -100});
    TweenMax.from(title, 1, {x: -200, ease: Power2.easeOut});
    TweenMax.from(p, 1, {autoAlpha: 0, delay: 0.5, ease:Power2.easeIn});   
    TweenMax.from(btn, 0.1, {autoAlpha: 0, x: 130, delay: 1, ease:Power1.easeOut}); 
  });
  
  function select(el) {
    return document.querySelector(el);
  }
  
  function selectAll(el) {
    return document.querySelectorAll(el);
  }