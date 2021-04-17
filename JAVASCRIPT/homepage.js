
        // function actived when pressed on navigator bar icon)
        function myFunction() {
          var x = document.getElementById("myTopnav");
          
          //changing class name to make navigation bar responsive
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }