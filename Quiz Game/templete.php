1   <!DOCTYPE html>
2   <html lang="en">
3   ├── <head>
4   │   ├── <meta charset="UTF-8">
5   │   ├── <meta name="viewport" content="width=device-width, initial-scale=1.0">
6   │   ├── <title>Quiz game</title>
7   │   ├── <link rel="shortcut icon" href="./icons8-quiz-48.png" type="image/x-icon">
<!-- 8   │   └── <link rel="stylesheet" href="style.css"> -->
9   └── </head>

10  <body>
11    └── <div class="container">
12        ├── 🟦 Start Screen: <div class="screen active" id="start-screen">
13        │   ├── <h1>Quiz Time!</h1>
14        │   ├── <p>Test your knowledge with this fun question</p>
15        │   └── <button id="start-btn">Start quiz</button>
16        │   </div>

19        └── 🟩 Quiz Screen: <div class="screen" id="quiz-screen">
21            ├── 📌 Quiz Header: <div class="quiz-header">
22            │   ├── <h1 id="question-text">question</h1>
23            │   └── <div class="quiz-info">
24            │       ├── <p>question <span id="current-question">1</span> of <span>5</span></p>
25            │       └── <p>Score: <span id="score"> 0</span></p>
26            │       </div>
27            │   </div>

28            ├── 📋 Answer Container: <div id="answer-container" class="answer-container">
29            │       <!-- Answers will be inserted with JS -->
30            │   </div>

31            ├── 📈 Progress Bar: <div class="progress-bar">
32            │   └── <div class="progress" id="progress"></div>
33            │   </div>

35            └── 🟥 Result Screen: <div id="result-screen" class="screen">
36                ├── <h1>Quiz result</h1>
37                └── <div class="result-info">
38                    ├── <p>You scored <span id="final-score"> 0</span> out of <span id="maximum-score">5</span></p>
39                    ├── <div id="result-message">Good job!</div>
40                    └── <button id="resart-btn">Restart quiz</button>
41                    </div>
42                </div>
43            </div>

45    </div>
<!-- 46    └── <script src="script.js"></script> -->
47  </body>
48 </html>
