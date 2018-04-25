// More links show hide 
$(".more-links").hide();
$(".more-link").click(function(){
  $(".more-links").toggle();
});



// Activate Post Button While Comment Or Reply
  $("input[type='text']").keyup(function() {
    if ($(this).val() != "") {
        $(this).closest(".comment-input").find("input[type='submit']").removeAttr("disabled", "disabled").addClass("comment-input-activate");
      } else {
        $(this).closest(".comment-input").find("input[type='submit']").attr("disabled", "disabled").removeClass("comment-input-activate");
      }
    });



// Search Bar Inside Navigation
var submitIcon = $('.searchbox-icon');
var inputBox = $('.searchbox-input');
var searchBox = $('.searchbox');
var isOpen = false;
submitIcon.click(function(){
    if(isOpen == false){
        searchBox.addClass('searchbox-open');
        inputBox.focus();
        isOpen = true;
    } else {
        searchBox.removeClass('searchbox-open');
        inputBox.focusout();
        isOpen = false;
    }
});  
 submitIcon.mouseup(function(){
        return false;
    });
searchBox.mouseup(function(){
        return false;
    });
$(document).mouseup(function(){
        if(isOpen == true){
            $('.searchbox-icon').css('display','block');
            submitIcon.click();
        }
    });
function buttonUp(){
var inputVal = $('.searchbox-input').val();
inputVal = $.trim(inputVal).length;
if( inputVal !== 0){
    $('.searchbox-icon').css('display','none');
} else {
    $('.searchbox-input').val('');
    $('.searchbox-icon').css('display','block');
}
}

// caraousal css

$('#s1').multislider({
  duration: 750,
  interval: false
});
// $('#s2').multislider({
//   continuous: true,
//   duration: 4000
// });
$('#s3').multislider({
  duration: 750,
  interval: 3000
});
