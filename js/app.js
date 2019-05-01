var viewitem = document.querySelectorAll(".viewItem");
var closeWindow = document.querySelectorAll(".close");
var prods = document.querySelectorAll(".fullview");
var pageContent = document.querySelectorAll(".pageContent");
var inputs = document.querySelectorAll("input");
var passconfirm = document.querySelector("#passconfirm");
var password = document.querySelector('#password');
var changeImg = document.querySelector("#changeImg");
var showCurrent = document.querySelector("#showCurrent");
var setNew = document.querySelector("#setNew");
var prodimg = document.querySelector("#prodimg");
var cancelChange = document.querySelector("#cancelChange");
var seendiv = false;

$(changeImg).click(function(){
  $(setNew).show();
  $(prodimg).attr('disabled', false);
  $(showCurrent).hide();
});

$(cancelChange).click(function(){
  $(setNew).hide();
  $(prodimg).attr('disabled', true);
  $(showCurrent).show();
});



for (var i = 0; i < viewitem.length; i++) {
    viewitem[i].addEventListener('click', function (j) {

        prods[j].style.opacity = "1"
        prods[j].style.zIndex = "99";
        jQuery('.productContainer').css('opacity', 0.5);
        seendiv = true;

        closeWindow[j].addEventListener("click", function () {
            prods[j].style.zIndex = "-99";
            prods[j].style.opacity = "0";
            jQuery('.productContainer').css('opacity', 1);
            seendiv = false;
        })





    }.bind(this, i));
}



if(passconfirm != null && password != null){
    passconfirm.addEventListener("input", checkPassword);
    password.addEventListener("input", checkPassword);
   
 function checkPassword(){
   if (passconfirm.value != password.value) {
     passconfirm.setCustomValidity('Password Must be Matching.');
   } else {
     passconfirm.setCustomValidity('');
   }
 };
}

$('.admin input').keyup(function () {

  if ($(this).val().length > 0) {
    var character = $(this).val().charAt(0);
    if (character != character.toUpperCase()) {
      $(this).val($(this).val().charAt(0).toUpperCase() + $(this).val().substr(1));
    }
  }
});

$('#regemail').on('input', function (e) {
  $('#emailtaken').css('display', 'none');
});


  

$(document).click(function () {
    $.each($('.pageContent'), function (index, pageContent) {
        if (seendiv == true) {
            $(pageContent).css('opacity', '0.6');
            $(pageContent).css('pointer-events', 'none');
            $('body').css('backgroundColor', 'gray');

        } else {
            $(pageContent).css('opacity', '1');
            $(pageContent).css('pointer-events', 'initial');
            $('body').css('backgroundColor', 'initial');
        }
    });
})



$('body').mouseup(function (e) {
    
    $.each($('.fullview'), function (index, container) {
        // checks to see if any of the fullview items are selected
        if ($(container).css('opacity') != "0" && $(container).css('opacity') != "" && $(container).css('opacity') != null) {
            // if the target of the click isn't the container nor a descendant of the container
            if (!$(container).is(e.target) && $(container).has(e.target).length === 0) {
                jQuery('.fullview').css('opacity', '0');
                jQuery('.fullview').css('zIndex', '-999');
                jQuery('.productContainer').css('opacity', 1);
                seendiv = false;
            }
        }

    });

});






// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
           
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();







  
