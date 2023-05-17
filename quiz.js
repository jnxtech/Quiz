// Fetch quiz questions from API
fetch('https://opentdb.com/api.php?amount=10&type=multiple')
    .then(response => response.json())
    .then(data => {
        // Get quiz container
        const quizContent = document.getElementById('quiz-content');

        // Loop over questions
        data.results.forEach((question, index) => {
            // Create a div for the question
            const questionDiv = document.createElement('div');
            questionDiv.className = 'mb-4';

            // Create the question label
            const questionLabel = document.createElement('label');
            questionLabel.innerHTML = question.question;
            questionLabel.className = 'd-block mb-2';
            questionDiv.appendChild(questionLabel);

            // Shuffle answers
            const answers = question.incorrect_answers;
            const correctAnswerIndex = Math.floor(Math.random() * (answers.length + 1));
            answers.splice(correctAnswerIndex, 0, question.correct_answer);

            // Loop over answers
            answers.forEach(answer => {
                // Create the answer input and label
                const answerInput = document.createElement('input');
                answerInput.type = 'radio';
                answerInput.name = `question${index}`;
                answerInput.value = answer === question.correct_answer ? 1 : 0;
                answerInput.className = 'mr-2';
                const answerLabel = document.createElement('label');
                answerLabel.appendChild(answerInput);
                answerLabel.innerHTML += answer;
                
                // Add the answer to the question div
                questionDiv.appendChild(answerLabel);
                questionDiv.appendChild(document.createElement('br'));
            });

            // Add the question div to the quiz content
            quizContent.appendChild(questionDiv);
        });
    })
    .catch(error => console.error(error));
