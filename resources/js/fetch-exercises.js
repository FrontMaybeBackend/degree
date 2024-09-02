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
                            var div = document.createElement('table');
                            div.setAttribute('border',3);
                            div.setAttribute('width','100%');
                            div.classList.add('exercise-item');
                            div.innerHTML = `
                                     <tr>
                <th>Ćwiczenia</th>
                <th>Typ</th>
                <th>Wyposażenie</th>
                <th>Poziom trudności</th>
                <th>Dodaj do Planu</th>
            </tr>
            <tr>
                <td>${exercise.name}</td>
                <td>${exercise.type}</td>
                <td>${exercise.equipment}</td>
                <td>${exercise.difficulty}</td>
                <td> <button>+</button></td>
            </tr>

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
