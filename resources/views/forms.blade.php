@extends('layouts.app')


@section('title-block')FORMS @endsection


@section('content')
<form action="{{route ('contact-form')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="name">Введите имя</label>
		<input class="form-control" type="text" name="name" placeholder="Имя" id="name">
	</div>
	<div>
		<label for="email">Введите eMail</label>
		<input class="form-control" type="text" name="email" placeholder="eMail" id="emeil">
	</div>
	<div>	
		<label for="subject">Введите тему сообщения</label>
		<input class="form-control" type="subject" name="name" placeholder="Тема сообщения" id="subject">
	</div>
	<div>	
		<label for="message">Собщение</label>
		<textarea class="form-control"name="message" placeholder="Собщение" id="message"></textarea> 
	</div>
	<div>
	<button type="submits" class="btn btn-success mt-3">Отправить</button>
	</div>
</form>
@endsection