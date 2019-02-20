@extends('layouts.master')

@section('content')

    <div class="container">
    <div class="row">
    <div class="col l12 s12 m12">
      <h2 class="its_poik_rob">СЕРТИФИКАТЫ</h2>
    </div>  
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="http://ovk-compani.ru/files/core/%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%20Electrolux.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2">Электронный сертификат</p>
      <p class="magad1">от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»</p>
      <p class="shop__p__item">Стоимость: 300 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop">Заказать</a>
    </div>
    </div>
    </div>
    
    <form action="/shopform" method="POST">
    {{ csrf_field() }}
        <!-- Modal Structure -->
    <div id="modalshop" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="shop_fio" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
    <div class="col s12 item__shop__form">
      <label>Год рождения</label>
      <select name="shop_select">
      <option value="" disabled selected>Выберите Ваш год рождения</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      </select>
    </div>
    <div class="col s12 item__shop__form">
      <label>Мероприятия</label>
      <select>
      <option value="" name="shop_select_2" disabled selected>Выберите мерипроятие в котором вы планируете участвовать</option>
      <option>Стартап-школа 1</option>
      <option>Стартап-школа 2</option>
      <option>Стартап-школа 3</option>
      <option>Стартап-школа 4</option>
      </select>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="email" type="email" class="validate ">
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="waves-effect btn_magad btn">Оплатить</button>
    </div>
    </div>
    </form>
    
    </div>
    </div>
    </div>

@endsection
