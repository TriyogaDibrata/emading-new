//inisiasi soal dalam quiz
const questions = [
    {
        //soal 1
        question: "Perhatikan gambar berikut ! <br/> <img width='auto' height='300' src='assets/img/kuis/kuis1.jpg' /> <br/> Informasi pada iklan diatas berisi tentang…",
        optionA: "Ajakan memancing ikan",
        optionB: "Manfaat memakan ikan kalengan",
        optionC: "Keuntungan memelihara ikan ",
        optionD: "Manfaat mengonsumsi ikan",
        correctOption: "optionD",
    },

    {
        //soal 2
        question: `Perhatikan pernyataan dibawah ini! <br/>
        1)	Mengajak orang lain mengonsumsi sesuatu barang atau jasa sasaran iklan <br/>
        2)	 Memberi tahu cara penggunaan suatu barang <br/>
        3)	 Menginformasikan keadaaan cuaca suatu wilayah <br/>
        4)	Mengabarkan berita duka atau kebahagiaan kepada banyak orang. <br/>
        Dari pernyataan diatas yang termasuk dari tujuan pembuatan iklan adalah….
        `,
        optionA: "4",
        optionB: "3",
        optionC: "2",
        optionD: "1",
        correctOption: "optionD"
    },

    {
        //soal 3
        question: "Perhatikan gambar berikut ! <br/> <img width='auto' height='300' src='assets/img/kuis/kuis2.png' /> <br/> Kata kunci iklan tersebut adalah…",
        optionA: "Makan sehat pasti bergizi",
        optionB: "Makanan bergizi penting untuk mengganti sel-sel yang rusak",
        optionC: "Makanan bergizi sehat bagi tubuh",
        optionD: "Makanan bergizi penting untuk pertumbuhan otak",
        correctOption: "optionD"
    },

    {
        //soal 4
        question:"Perhatikan gambar berikut ! <br/> <img width='auto' height='300' src='assets/img/kuis/kuis45.PNG' /> <br/> Organ pencernaan nomor 2 yang ditunjukkan pada gambar diatas adalah…",
        optionA: "Lambung",
        optionB: "Kerongkongan ",
        optionC: "Usus halus",
        optionD: "Tenggorokan",
        correctOption: "optionB"
    },

    {
        // soal 5
        question: "Perhatikan gambar berikut ! <br/> <img width='auto' height='300' src='assets/img/kuis/kuis45.PNG' /> <br/> Urutan saluran pencernaan dari gambar pada soal nomor 4 yang tepat adalah…",
        optionA: "1, 2, 5, 6, 7, 8",
        optionB: "1, 3, 4, 5, 7, 8",
        optionC: "1, 2, 4, 5, 6, 8",
        optionD: "1, 2, 4, 7, 6, 8",
        correctOption: "optionD"
    },

    {
        // soal 6
        question: "Perhatikan gambar berikut ! <br/> <img width='auto' height='300' src='assets/img/kuis/kuis3.jpg' /> <br/> Organ pencernaan lambung ditunjukkan pada nomor….",
        optionA: "2",
        optionB: "1",
        optionC: "4",
        optionD: "3",
        correctOption: "optionA"
    },

    {
        // soal 7
        question: `Perhatikan pernyataan dibawah ini! <br/>
        1)	Sebagai saluran pembuangan sisa makanan <br/>
        2)	Sebagai saluran penghubung mulut dan lambung dan terjadi gerak peristaltik <br/>
        3)	Sebagai tempat penyerapan sari-sari makanan <br/>
        4)	Sebagai tempat penyerapan air sisa penyerapan usus halus dan membuang zat-zat sisanya. <br/>
         Dari pernyataan diatas yang termasuk fungsi organ pencernaan kerongkongan adalah…
        `,
        optionA: "1",
        optionB: "2",
        optionC: "3",
        optionD: "4",
        correctOption: "optionB"
    },

    {
        // soal 8
        question: "Nina menyanyikan sebuah lagu. Lagu itu dinyanyikan dengan ekspresi sedih. Tangga nada yang sesuai untuk lagu itu adalah…",
        optionA: "Pentatonis",
        optionB: "Mayor",
        optionC: "Minor",
        optionD: "Madenda",
        correctOption: "optionC"
    },

    {
        // soal 9
        question: `Perhatikan pernyataan berikut! <br/>
        1)	Indonesia Raya <br/>
        2)	Satu nusa satu bangsa <br/>
        3)	Indonesia pusaka <br/>
        4)	Bagimu negeri <br/>
        Yang termasuk lagu bertangga nada mayor ditunjukkan pada nomor…
        `,
        optionA: "1 dan 2",
        optionB: "2 dan 3",
        optionC: "1 dan 4",
        optionD: "2 dan 4",
        correctOption: "optionA"
    },

    {
        // soal 10
        question: `Perhatikan pernyataan berikut! <br/>
        1)	Syukur <br/>
        2)	Dari sabang sampai Merauke <br/>
        3)	Gugur bunga <br/>
        4)	Garuda Pancasila <br/>
        Contoh lagu bertangga nada minor ditunjukkan nomor…
        `,
        optionA: "1 dan 2 ",
        optionB: "1 dan 3",
        optionC: "2 dan 3",
        optionD: "2 dan 4",
        correctOption: "optionB"
    }
]


let shuffledQuestions = [] //empty array to hold shuffled selected questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1
let playerScore = 0  
let wrongAttempt = 0 
let indexNumber = 0

// function for displaying next question in the array to dom
function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
    document.getElementById("player-score").innerHTML = playerScore
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })
   
    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        // document.getElementById('option-modal').style.display = "flex"
        $('#optionModal').modal('show')
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            document.getElementById(correctOption).style.backgroundColor = "green"
            playerScore++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            document.getElementById(wrongLabelId).style.backgroundColor = "red"
            document.getElementById(correctOption).style.backgroundColor = "green"
            wrongAttempt++
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}



//called when the next button is called
function handleNextQuestion() {
    checkForAnswer()
    unCheckRadioButtons()
    //delays next question displaying for a second
    setTimeout(() => {
        if (indexNumber <= 9) {
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()
        }
        resetOptionBackground()
    }, 1000);
}

//sets options background back to null after display the right/wrong colors
function resetOptionBackground() {
    const options = document.getElementsByName("option");
    options.forEach((option) => {
        document.getElementById(option.labels[0].id).style.backgroundColor = ""
    })
}

// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Jangan menyerah, terus berlatih"
        remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Kamu bisa mendapatkan hasil yang lebih baik."
        remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Kerja bagus, tetap tingkatkan kemampuanmu"
        remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    $('#scoreModal').modal('show')

}

//closes score modal and resets game
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    $('#scoreModal').modal('hide')
}

//function to close warning modal
function closeOptionModal() {
    $('#optionModal').modal('hide');
}