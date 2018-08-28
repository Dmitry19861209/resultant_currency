$(document).ready(function () {
  /* Обновить таблицу с валютой по таймеру */
  timer(refreshCurrency, 15000);
});

/* Обновить таблицу с валютой вручную */
$('#refresh-currency').click(function () {
  refreshCurrency();
});

/* Метод обновления таблицы с валютой */
function refreshCurrency() {
  let _token = $('[name="_token"]').val(),
    url = "/get-currency?_token=" + _token,
    tbody = $('table tbody'),
    tr = '';

  $.ajax({
    type: 'POST',
    url: url,
    success: function (data) { console.log(data);
      if (data.status === "ok") {
        const currencies = checkCurrency(data.currency);

        $.each(currencies, function( index, value ) {
          //Удаляем все строки у tbody
          tbody.find('tr').remove();
          //Формируем новые
          tr += '<tr>' +
          '<td scope="row">' + index + '</td>' +
          '<td>' + value.name + '</td>' +
          '<td>' + value.volume + '</td>' +
          '<td>' + value.price.amount + '</td>' +
          '</tr>';
        });

        //Записываем их в tbody
        setTimeout(function () {
          tbody.append(tr)
        }, 200);
      }
    }
  });
}

/* Проверить массив валюты */
function checkCurrency(currency) {
  return (currency && currency.stock) ? currency.stock : []
}

/* Таймер */
function timer(action, interval) {
  // начать повторы с интервалом
  let timerId = setInterval(function() {
    action();
  }, interval);
}