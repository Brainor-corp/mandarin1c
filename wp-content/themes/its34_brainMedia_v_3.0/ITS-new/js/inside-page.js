$(document).ready(function () {
    //для бока с вопросам и ответами, меняет красный плюс на желтый минус при нажатиии на collapse

    $('.collapse').on('show.bs.collapse', function () {
        $(this).closest('.question-row').find('.collapse-symbol').removeClass('answer-symbol');
        $(this).closest('.question-row').find('.collapse-symbol').addClass('active-symbol');
    });
    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).closest('.question-row').find('.collapse-symbol').removeClass('active-symbol');
        $(this).closest('.question-row').find('.collapse-symbol').addClass('answer-symbol');
    });
});