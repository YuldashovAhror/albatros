<div class="feedback">
    <div class="feedback-content">
        <div class="feedback-wrap">
            <span class="feedback__close">
                <img src="img/close-black.svg" alt="ico">
            </span>
            <h4 class="feedback__title">
                Форма обратной связи
            </h4>
            <p class="feedback__text">
                Оставьте ваши координаты и мы свяжемся с вами в ближайшее время
            </p>
            <form action="#" class="feedback-form form">
                <div class="form__wrap">
                    <input type="tel" class="form__tel" id="phone" placeholder="+998" maxlength="19" required="" pattern="^[0-9-+\s()]*$" inputmode="text">
                    <input id="token" value="{{ csrf_token() }}" type="hidden">
                </div>
                <input type="text" class="form__name" id="first_name" required="" placeholder="Как вас зовут?">
                <p class="feedback__text">
                    Нажимая кнопку «Отправить», вы подтверждаете свое согласие на обработку персональных данных
                </p>
                <button type="submit" onclick="send()" class="form__btn btn">
                    Отправить заявку
                </button>
            </form>
        </div>
        <div class="feedback-done">
            <img src="img/done.svg" alt="ico">
            <div class="feedback-done__title">
                Ваша заявка успешно отправлена
            </div>
            <p class="feedback-done__text">
                Наши менеджеры обязательно свяжутся с Вами 
                и ответят на все Ваши вопросы.
            </p>
            <a href="/
            " class="form__btn btn">На главную</a>
        </div>
    </div>
</div>

<script>
    function send() {
        let token = $("#token").val();
        let name = $('#first_name').val();
        let phone = $('#phone').val();
        // let department_id = $('#contact').val();
        
        $.ajax({
            token: token,
            type: "get",
            url: "/dashboard/feedback/store",
            data: {
                name: name,
                phone: phone,
                // department_id: department_id,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
        setTimeout(() => {
            $('.feedback-content').hide()
            $('.feedback-done').show()
            $("#name").val('');
            $("#phone").val('');
            // $("#contact").val('');
        }, 1000)
        
    }
</script>