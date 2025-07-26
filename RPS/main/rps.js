function rockPaperScissorsGame() {
  console.log("Getting start with rock✊, paper✋, scissors✂️ game");
  const userChoicePrompt = prompt("Enter rock✊, paper✋, scissors✂️ ")
  let userChoice = userChoicePrompt.toLowerCase();



  let computerChice;

  const randomNumber = Math.floor(Math.random() * 3 + 1);


  if (randomNumber == 1) {
    computerChice = "rock";
  } else if (randomNumber == 2) {
    computerChice = "paper";
  } else if(randomNumber == 3){
    computerChice = "scissors"
  }

  console.log("user selected",userChoice);
  console.log("computer selected", computerChice);
  
  

}

rockPaperScissorsGame();