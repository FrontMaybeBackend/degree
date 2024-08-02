document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('.muscle-btn');
    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            let muscle = button.getAttribute('data-muscle');

            fetch('/create/workout/' + muscle)
                .then(function (response) {
                    if (response.status === 200) {
                        return response.json();
                    } else {
                        throw new Error('Bad request for data');
                    }
                })
                .then(function (data) {
                    var exerciseList = document.getElementById('exercise-list');
                    if (exerciseList) {
                        exerciseList.innerHTML = "";
                        data.forEach(function (exercise) {
                            var div = document.createElement('div');
                            div.classList.add('exercise-item');
                            div.innerHTML = `
                                    <h3>${exercise.name}</h3>
                                    <p>${exercise.type}<p>
                                    <p>${exercise.equipment}<p>
                                    <p>${exercise.difficulty}<p>
                                    `
                            exerciseList.appendChild(div);
                        })
                    }
                })
                .catch(function (error) {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        })
    })
});
