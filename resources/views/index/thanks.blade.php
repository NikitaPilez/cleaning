@extends('welcome')
@section('content')
<div class="container mt-lg-5">
    <h3 class="mb-5 text-center">Спасибо за заказ</h3>
    <div class="row" style="font-size: larger;">
				<div class="col-md-6 d-md-flex justify-content-center">
					<div class="details_item">
						<ul class="list">
							<li><span>Номер заказа</span> : {{$order->id}}</li>
							<li><span>Имя</span> : {{$order->name}}</li>
							<li><span>Фамилия</span> : {{$order->surname}}</li>
							<li><span>Телефон</span> : {{$order->phone}}</li>
							<li><span>Почта </span> : {{$order->email}}</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 d-md-flex justify-content-center mt-5 mt-md-0">
					<div class="details_item">
						<ul class="list">
							<li><span>Услуга</span> : {{$order->service->title}}</li>
							<li><span>Город</span> : {{$order->city}}</li>
							<li><span>Адрес</span> : {{$order->street}}</li>
							<li><span>Дата</span> : {{$order->date}}</li>
							<li><span>Время</span> : {{$order->time}}</li>
						</ul>
					</div>
				</div>
			</div>
<div>
@endsection