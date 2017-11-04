window.onload = function () {
    InvalidInputHelper(document.getElementById('fio'), {
        'change': function (val) {
            return !val.match(/^[A-Za-z0-9а-яА-Я_]+\s[A-Za-z0-9а-яА-Я_]+\s[A-Za-z0-9а-яА-Я_]+$/gi)
                ? "Ф.И.О. должно состоять из 3-х слов, разделенных пробелом" : "";
        },
    });
    InvalidInputHelper(document.getElementById('ans2'), {
        'change': function (val) {
            return !val.match(/^\-?\d+$/g)
                ? "Введите целочисленное значение" : "";
        }
    });
};