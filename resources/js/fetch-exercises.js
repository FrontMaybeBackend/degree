document.addEventListener('DOMContentLoaded', function () {
    var selectElement = document.getElementById('exercises');

    selectElement.addEventListener('change', function () {
        let muscle = selectElement.value;

        if (muscle !== "Wybierz Partie") {
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
                    var formExercise = document.getElementById('makeTraining');

                    if (exerciseList) {
                        exerciseList.innerHTML = "";

                        data.forEach(function (exercise) {
                            var div = document.createElement('table');
                            div.setAttribute('border', 3);
                            div.setAttribute('width', '100%');
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
                                    <td><button class="addExercise" data-select-muscle="${exercise.name}">+</button></td>
                                </tr>
                            `;
                            exerciseList.appendChild(div);
                        });

                        let addButtons = document.querySelectorAll('.addExercise');
                        addButtons.forEach(function (button) {
                            button.addEventListener('click', function () {
                                // Pobieranie nazwy ćwiczenia z atrybutu `data-select-muscle`
                                let exerciseName = button.getAttribute('data-select-muscle');

                                // Sprawdzenie, czy znaleziono nazwę ćwiczenia
                                if (exerciseName) {
                                    // Dodawanie ćwiczenia do formularza
                                    formExercise.innerHTML += `
                                        <div class="form-group">
                                            <label for="exercise">Ćwiczenie</label>
                                            <input name="exercise[]" id="exercise" readonly value="${exerciseName}"><br>
                                        </div>
                                    `;

                                    // Ustawienie widoczności przycisku 'Stwórz'
                                    document.getElementById('btnCreate').removeAttribute('hidden');
                                }
                            });
                        });
                    }
                })
                .catch(function (error) {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }
    });
});
