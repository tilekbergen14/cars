function soundClick() {
        var audio = new Audio(); // Создаём новый элемент Audio
        audio.src = 'ES_Car Engine Rev 5 - SFX Producer.mp3'; // Указываем путь к звуку "клика"
        audio.autoplay = true; // Автоматически запускаем
      }

      function bigImg(x) {
        x.style.height = "370px";
        x.style.width = "580px";
      }
      
      function normalImg(x) {
        x.style.height = "300px";
        x.style.width = "510px";
      }



      $(document).ready(function(){
        $("#btn1").click(function(){
        $(".divClass").slideToggle("slow",function()
        {

        });
      });
    });
    document.getElementById("myBtn").addEventListener("click", function() {
      alert("Hello World!");
    });




    