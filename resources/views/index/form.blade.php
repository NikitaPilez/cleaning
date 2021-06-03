@extends('welcome')
@section('content')
<div class="card container">
    <div class="card-body">
        <h3 class="mb-5 text-center">Заполните анкету</h3>
        <form id="form1" class="form-validate" action="/ordering">
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
                    <label for="street">Улица</label>
                    <input type="text" class="form-control" name="street" placeholder="Введите улицу и номер дома"
                        required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="gender">Дата</label>
                    <input class="form-control" type="date" value="{{ now()->format('Y-m-d') }}" min="{{ now()->format('Y-m-d') }}" name="dateofbirth"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="example-time-input">Время</label>
                    <input class="form-control" type="time" name="datetime" min="09:00" max="21:00" value="13:45:00"
                        id="example-time-input">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="service">Услуга</label>
                    <select name="service" class="form-control" required>
                        <option value="">Выберите услугу</option>
                        @isset($services)
                            @foreach ($services as $service)
                                <option>{{ $service->title }} </option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>
            <button type="submit" class="btn m-t-30 mt-3">Заказать</button>
            <a class="btn m-t-30 mt-3 btn-white" href="/">На главную</a>
        </form>
    </div>
</div>
@endsection