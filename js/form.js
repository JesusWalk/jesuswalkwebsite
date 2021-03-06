$(function () {
  var $sections = $('.form-section');

  function navigateTo(index) {
    // Mark the current section with the class 'current'

/*
    $(document).ready(function () {
    $('#agegroup').on('change', function () {
        if (this.value === '0') {
            $("#parentinformation").show();
        } else {
            $("#parentinformation").hide();
        }
    });
  });*/

  $sections
  .removeClass('current')
  .eq(index)
  .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation #registrationButton').toggle(atTheEnd);
  }

  function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
  }

  // Previous button is easy, just go back
  $('.form-navigation .previous').click(function() {
    var counter = 1;

    if((curIndex()==1) && ($("#agegroup option:selected").text()=="No"))
      counter -= 1
    
    navigateTo(curIndex() - counter);
  });

  // Next button goes forward iff current block validates
  $('.form-navigation .next').click(function() {

    var counter = 1;

    if ($('.demo-form').parsley().validate({group: 'block-' + curIndex()})) {
      if((curIndex()==1) && ($("#agegroup option:selected").text()=="No"))
        counter += 1

      navigateTo(curIndex() + counter);
    }
  });

  // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
  $sections.each(function(index, section) {
    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
  });
  navigateTo(0); // Start at the beginning
});



/*
	var form = document.getElementById('registration'),
 	 agegroup = form.elements.agegroup;

	agegroup.onchange = function() {
 	 var form = this.form;
  	if (this.selectedIndex === 2) {
   	 form.elements.parentinformation.disabled = true;
 		 } else {
    form.elements.parentinformation.disabled = false;
  		}
	};
*/