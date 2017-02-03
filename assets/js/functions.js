$(document).ready(function(){

// FORM GENERATION
// Get all questions
var questions = $('form').find('.form-field--question');
$(questions).each(function(){
    var id = $(this).attr('id');
    
    $(this).append(array = [
        '<label class="input-radio col-1-3"><input type="radio" name="' + id + '" value="yes" class="required">Yes</label>',
        '<label class="input-radio col-1-3"><input type="radio" name="' + id + '" value="no" class="required">No</label>',
        '<label class="input-radio col-1-3"><input type="radio" name="' + id + '" value="unsure" class="required">Unsure</label>'
    ]);
});
var multichoice = $('form').find('.form-field--question-multi');
$(multichoice).each(function(){
    var id = $(this).attr('id');
        id = id + '[]';

        options = $(this).attr('data-option');
        options = options.split(", ");

        for(var i = 0; i < options.length; i++) {
            options[i] = '<label class="input-checkbox"><input type="checkbox" name="' + id + '" value="' + options[i] + '">' + options[i] + '</label>';
            $(this).append(options[i]);
        }
});


// FORM VALIDATION
$('form').validate({
    required: 'This question is required',
    errorPlacement: function(error, element) {
      error.appendTo($(element).closest('.form-field'));
      error.hide().fadeIn('fast');
    }
});
// Add validation to all input types
$(".required").each(function(){
    $(this).rules("add", {
        required:true,
    });
});
// Extend validation messages
jQuery.extend(jQuery.validator.messages, {
    required: "This question is required.",
    email: "Please enter a valid email address.",
    number: "Please enter a valid number.",
});


// FORM CONTROL
// Style checkboxes/radio inputs
// If mordern browser
if ($('body').hasClass('modern')) {
    /* Checkboxes */
    $("input[type=checkbox]").on('change', function () {
        // Toggle current selected checkbox
        $(this).parent().toggleClass("selected");
        return false;
    });
    /* Radios */
    $("input[type=radio]").on('change', function () {
        // Get all .input-radios from parent
        var options = $(this).parent().parent().find('.input-radio');
        // Remove all 'selected' classes
        $(options).removeClass('selected');
        // Toggle current selected radio
        $(this).parent().toggleClass("selected");
        return false;
    });
}


// FORM NAVIGATION
var $sections = $('.form-part');
function navigateTo(index) {
    // Mark the current section with the class 'current'
    $sections
      .removeClass('current')
      .eq(index)
        .addClass('current');
    // Show only the navigation buttons that make sense for the current section:
    $('.form-navigation .previous').toggle(index > 0);
    var atTheEnd = index >= $sections.length - 1;
    $('.form-navigation .next').toggle(!atTheEnd);
    $('.form-navigation [type=submit]').toggle(atTheEnd);
}
// Start at the beginning
navigateTo(0);

// Get current index position
function curIndex() {
    // Return the current index by looking at which section has the class 'current'
    return $sections.index($sections.filter('.current'));
}

// Add index numbers to 'data-group'
$sections.each(function(index, section) {
    $(section).find(':input').attr('data-group', 'group-' + index);
});

// Previous button
$('.form-navigation .previous').click(function() {
  navigateTo(curIndex() - 1);
  $('#header h3 span').text(curIndex() + 1);
});

// Next button goes forward if current block validates
$('.form-navigation .next').click(function() {
    if($('form').valid() === true){
        navigateTo(curIndex() + 1);
        $('#header h3 span').text(curIndex() + 1);
    } else {
        //return false;
    }
    // Scroll to top of page after each part
    $('body,html').animate({
        scrollTop : 0
    }, 300);
    return false;
});


});  // END DOCUMENT READY
