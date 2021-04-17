
//quiz.js

// Functions

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
 
function buildQuiz() {
    // variable to store the HTML output
    const output = [];
 
    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
       // variable to store the list of possible answers
       const answers = [];
 
       // and for each available answer...
       for (letter in currentQuestion.answers) {
          //add radio button
          answers.push(
             `<label>
             <input type="radio" name="question${questionNumber}" value="${letter}">
             ${letter} :
             ${currentQuestion.answers[letter]}
           </label>`
          );
       }
 
       // add this question and its answers to the output
       output.push(
          `<div class="slide">
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
       );
    });
 
    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
 }
 
 function showResults() {
    // gather answer containers from our quiz
    const answerContainers = quizContainer.querySelectorAll(".answers");
 
    // keep track of user's answers
    let numCorrect = 0;
 
    // for each question...
    myQuestions.forEach(function (currentQuestion, questionNumber) {
       // find selected answer
       const answerContainer = answerContainers[questionNumber];
       const selector = `input[name=question${questionNumber}]:checked`;
       const userAnswer = (answerContainer.querySelector(selector) || {}).value;
 
       // if answer is correct
       if (userAnswer === currentQuestion.correctAnswer) {
          // add to the number of correct answers
          numCorrect++;
 
          // color the answers green
          answerContainers[questionNumber].style.color = "lightgreen";
       }
 
       // if answer is wrong or blank
       else {
          // color the answers red
          answerContainers[questionNumber].style.color = "red";
       }

    });

      //Display alert according to number of correct answers    

      if(numCorrect==4){

         var name = prompt('Please enter your first name to redeem promo code');
          var number = Math.floor(Math.random()*99);
         var letters = generate_letters();

         // document.getElementById("promo").innerHTML="Congrats "+name+"! Here is your 15% discount code: "+name+"@"+number+letters;
        // alert('Congrats '+name+'! Here is your 15% discount code: '+name+'@'+number+letters);
         disable();

       }
       else {
          alert('Hard Luck!!');
         disable();
       }

       //function that generates random letters
       function generate_letters() {
         var result = '';
         var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
         for ( var i = 0; i < 2; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
         }
         return result;
      }   

      //function that disables submit button after being clicked
      function disable(){
        var button = document.getElementById("submit");
        button.disabled=true; 
        button.id="disabled"; //to change color of button via css
      }


    // show number of correct answers out of total
    resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
 }
 
 function showSlide(n) {
    //removes current slide
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    
    //"n" is given by user
    currentSlide = n;

    //hides "previous button" on first slide
    if (currentSlide === 0) {
       previousButton.style.display = "none";
    } 
    //else shows previous button
    else {
       previousButton.style.display = "inline-block";
    }

    //hides "next button" and shows "submit button" on last slide
    if (currentSlide === slides.length - 1) {
       nextButton.style.display = "none";
       submitButton.style.display = "inline-block";
    }
    //hides "submit button" and shows "next button" on all slides except first & slides
    else {
       nextButton.style.display = "inline-block";
       submitButton.style.display = "none";
    }
 }
 
 //calls "showSlide" function to go forward towards next question
 function showNextSlide() {
    showSlide(currentSlide + 1);
 }

 //calls "showSlide" function to go back towards previous question
 function showPreviousSlide() {
    showSlide(currentSlide - 1);
 }
 
 // Variables
 const quizContainer = document.getElementById("quiz");
 const resultsContainer = document.getElementById("results");
 const submitButton = document.getElementById("submit");
 
//  Questions and asnwers
 const myQuestions = [
   {
      // Question 1 and its answers
      question: "Where did Pizza originally come from?",
      answers: {
         a: "Italy",
         b: "Spain",
         c: "France",
         d: "Croatia",
      },
      correctAnswer: "a",
   },
    {
       // Question 2 and its answers
       question: "When was the first burger made",
       answers: {
          a: "1880",
          b: "1900",
          c: "1920",
          d: "1960",
       },
       correctAnswer: "b",
    },
   
    {
       // Question 3 and its answers
      question: "Noodles country of origin:",
      answers: {
         a: "Japan",
         b: "Korea",
         c: "China",
         d: "Thailand",
      },
      correctAnswer: "c",
   },
   {
      // Question 4 and its answers
      question: "How many calories are in 100g of Lebanese Tabbouleh",
      answers: {
         a: "250",
         b: "100",
         c: "200",
         d: "150",
      },
      correctAnswer: "d",
   },
 ];
 
 // calls "buildQuiz()" in order to build quiz (questions & answers)
 buildQuiz();
 
 // Pagination
 const previousButton = document.getElementById("previous");
 const nextButton = document.getElementById("next");
 const slides = document.querySelectorAll(".slide");
 let currentSlide = 0;
 
 // Show the first slide
 showSlide(currentSlide);
 
 // Event listeners
//  submitButton.addEventListener("click", showResults);
 previousButton.addEventListener("click", showPreviousSlide);
 nextButton.addEventListener("click", showNextSlide);