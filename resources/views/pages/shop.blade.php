@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
      <div class="col l12 s12 m12">
         <h2 class="its_poik_rob">СЕРТИФИКАТЫ</h2>
     </div>  
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="http://ovk-compani.ru/files/core/%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%20Electrolux.jpg" class="materialboxed">
        </div>
        <div class="card-content">
        <p><b>Электронный сертификат</b> от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»</p>
        <p><b>Стоимость: 300 рублей.</b></p>
        </div>
        <div class="card-action" style="text-align:right;">
            <a class="waves-effect waves-light btn modal-trigger" href="#modalshop">Заказать</a>
        </div>
      </div>
       <!-- Modal Structure -->
  <div id="modalshop" class="modal modal_shop">
    <div class="modal-content">
      <h4>Заказать сертификат</h4>
      <div class="form">
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate ">
          <label for="first_name">First Name</label>
        </div>
        <div class="col s12">
            <label>Browser Select</label>
            <select>
              <option>Пункт 1</option>
              <option>Пункт 2</option>
            </select>
        </div>
        <div class="col s12">
            <label>Browser Select</label>
            <select>
              <option>Пункт 1</option>
              <option>Пункт 2</option>
            </select>
        </div>
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate ">
          <label for="first_name">First Name</label>
        </div>
      </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Заказать</a>
    </div>
  </div>
    </div>
    
    </div>
</div>

@endsection
