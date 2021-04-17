    $('.minus-btn').on('click', function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest('div').find('input');
      var value = parseInt($input.val());

      if (value > 1) {
        value = value - 1;
      }
      else {
        value = 0;
      }

      $input.val(value);
    });

    $('.plus-btn').on('click', function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest('div').find('input');
      var value = parseInt($input.val());

      if (value < 100) {
        value = value + 1;
      } else {
        value = 100;
      }

      $input.val(value);
    });

    function openNav() {
      document.getElementById("mySidepanel").style.width = "500px";
    }

    function closeNav() {
      document.getElementById("mySidepanel").style.width = "0";
    }

    $(document).ready(function(){
      $("#hideLogin").click(function(){
        $(".login").hide();
        $(".gethelp").show();
      });
      $("#hideGetHelp").click(function(){
        $(".gethelp").hide();
        $(".login").show();
      });
    });