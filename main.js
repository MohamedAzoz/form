function isInViewport(ele) {
    const re = ele.getBoundingClientRect();
    return (
      re.bottom >=30 &&
      re.right >= 0 &&
      re.top <= (window.innerHeight || document.documentElement.clientHeight) &&
      re.left <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  window.addEventListener('scroll', function() {
    var iconsl = document.querySelectorAll('.disl');
    
    iconsl.forEach(function(icon) {
      if (isInViewport(icon)) {
        icon.classList.add("showl");
      }
    });
  });

function isright(e) {
    const rect = e.getBoundingClientRect();
    return (
      rect.bottom >=30 &&
      rect.left >= 0 &&
      rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  window.addEventListener('scroll', function() {
    var iconsr = document.querySelectorAll('.disr');
    
    iconsr.forEach(function(icon) {
      if (isright(icon)) {
        icon.classList.add('showr');
      }
    });
  });