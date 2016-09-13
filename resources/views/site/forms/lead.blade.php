<div class="lead-form">
    <form method="POST" action="{{ route('client.store') }}" id="lead-form" data-yandex-goal-name="{{ $yandexGoalName }}">
        {{ csrf_field() }}
        <input type="hidden" name="description" id="description">

        <div class="form-group" id="lead-form-name-block">
            <label for="name">Имя</label>
            <input type="text" name="name" id="name" placeholder="Введите ваше имя.">
            <span id="lead-form-name-help" class="help-block"></span>
        </div>

        <div class="form-group" id="lead-form-phone-block">
            <label for="phone">Номер телефона</label>
            <input type="tel" name="phone" id="phone" placeholder="Введите ваш номер телефона.">
            <span id="lead-form-phone-help" class="help-block"></span>
        </div>

        <div class="form-group" id="lead-form-submit-block">
            <input type="submit" value="Заказать услугу">
            <span id="lead-form-submit-help" class="help-block"></span>
        </div>

        <p>
            Ваши контактные данные необходимы нам для того, чтобы мы смогли связаться с вами
            и записать вас к нашим юристам.
        </p>

    </form>
</div>

<div id="lead-form-modal">
    <span id="modal-close"><i aria-hidden="true"></i></span>
    <h2>Заявка отправлена</h2>
    <p>
        <span></span>, ваша заявка успешно отправлена. В ближайшее время вам позвонит наш
        специалист для согласования времени встречи.
    </p>
    <p>
        Наши сотрудники работают с 10:00 до 19:00 часов (суббота и воскресение выходные дни).
    </p>
</div>
<div id="modal-overlay"></div>