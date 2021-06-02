@extends('welcome')
@section('content')
<div class="card container">
    <div class="card-body">
        <h3 class="mb-5 text-center">Заполните анкету</h3>
        <form id="form1" class="form-validate">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" name="name" placeholder="Введите имя" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">Фамилия</label>
                    <input type="text" class="form-control" name="surname" placeholder="Введите фамилию" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telephone">Телефон</label>
                    <input class="form-control" type="tel" name="telephone" placeholder="Введите номер телефона"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Введите адрес почты" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Город</label>
                    <input type="text" class="form-control" name="city" placeholder="Введите город" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">Улица</label>
                    <input type="text" class="form-control" name="address" placeholder="Введите улицу и номер дома"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gender">Дата</label>
                    <input class="form-control" type="date" min="{{ now()->format('Y-m-d') }}" name="dateofbirth"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="example-time-input">Время</label>
                    <input class="form-control" type="time" min="09:00" max="21:00" value="13:45:00"
                        id="example-time-input">
                </div>
            </div>
            <div class="form-group mb-1">
                <label>Услуги</label>
                <div class="ml-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders" id="reminders" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders">Услуга</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders2" id="reminders2" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders2">Услуга</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders3" id="reminders3" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders3">Услуга</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders4" id="reminders4" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders4">Услуга</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders5" id="reminders5" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders5">Услуга</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="reminders6" id="reminders6" class="custom-control-input" value="1"
                            required>
                        <label class="custom-control-label" for="reminders6">Услуга</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn m-t-30 mt-3">Заказать</button>
            <a class="btn m-t-30 mt-3 btn-white" href="/">На главную</a>
        </form>
    </div>
</div>
@endsection