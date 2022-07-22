jQuery(function($) {

    var $sections = $('.bioYear'),
      $animContainer = $('html, body'),
      $document = $(document),
      numSections = $sections.length,
      currSection = 0,
      isAnimating = false;
  
    // Animate to a specific index.
    var gotoSection = function(index) {
      isAnimating = true;
      $animContainer.animate({
        scrollTop: $sections.eq(index).offset().top
      }, 750, function() {
        isAnimating = false;
      });
    };
  
    // Advance to next or previous section.
    var handleAction = function(direction) {
      if (isAnimating) {
        return false;
      }
  
      if (direction === 'prev' && currSection > 0) {
        currSection--;
      } else if (direction === 'next' && currSection < numSections - 1) {
        currSection++;
      } else {
        return false;
      } // This shouldn't happen.
  
      gotoSection(currSection);
    };
  
    // Handle clicks.
    $document.on('click', '.direction', function() {
      handleAction($(this).data('direction'));
    });
  
    // Handle keyboard input.
    $document.keyup(function(e) {
      if (e.keyCode === 38) {
        handleAction('prev');
      } // Up arrow.
      if (e.keyCode === 40) {
        handleAction('next');
      } // Down arrow.
    });
    //viewport
    var viewport = $(window),
      setVisible = function(e) {
        var viewportTop = viewport.scrollTop(),
          viewportBottom = viewport.scrollTop() + viewport.height();
        $('div.bioYear').each(function() {
          var self = $(this),
            top = self.offset().top,
            bottom = top + self.height(),
            topOnScreen = top >= viewportTop && top <= viewportBottom,
            bottomOnScreen = bottom >= viewportTop && bottom <= viewportBottom,
            elemVisible = topOnScreen || bottomOnScreen;
          self.toggleClass('activeSection', elemVisible);
          console.log(JSON.stringify({
            "div.bioRight": self[0].classList[0],
            "viewportTop": viewportTop,
            "top": top,
            "topOnScreen": topOnScreen,
            "viewportBottom": viewportBottom,
            "bottom": bottom,
            "bottomOnScreen": bottomOnScreen,
            "elemVisible": elemVisible
          }));
        });
      };
    viewport.scroll(setVisible);
    setVisible();
    $('.zImage').fancybox({
      //	fitToView: false,
      padding: 0,
      //	autoScale : false,
      openEffect: 'elastic',
      closeEffect: 'elastic',
      titlePosition: 'over'
    });
  });