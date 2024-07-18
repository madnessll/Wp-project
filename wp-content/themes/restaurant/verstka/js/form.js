jQuery(document).ready(function($){
  var form = $('#contactForm');
  var action = form.attr('action');

  form.on('submit', function(event){
    // Предотвращение отправки формы по умолчанию
    event.preventDefault();

    // Сбор данных формы
    var formData = {
      name: $('#name').val(),
      email: $('#email').val(),
      select1: $('#select1').val(),
      message: $('#message').val()
    };

    // Отправка AJAX-запроса
    $.ajax({
      url: action,
      type: 'POST',
      data: formData,
      error: function(r, t, e){
        console.log('Ошибка:', r);
        console.log('Тип ошибки:', t);
        console.log('Сообщение об ошибке:', e);
      },
      success: function(response){
        console.log('Ответ сервера:', response);
        form.html('Данные отправлены');
      }
    });
  });
});
