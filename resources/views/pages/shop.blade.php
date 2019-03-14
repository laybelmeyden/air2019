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
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat2.jpg">
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
    
    <form action="https://money.yandex.ru/eshop.xml" method="post">
    {{ csrf_field() }}
    <input name="shopId" value="131650" type="hidden" required/>
    <input name="scid" value="905333" type="hidden" required/>
    <input name="sum" value="300" type="hidden" required>
        <!-- Modal Structure -->
    <div id="modalshop" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="custName" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="custEmail" type="email" class="validate " required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="custAddr" type="text" class="validate " required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="orderDetails" type="hidden" class="validate" value="Электронный сертификат от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства» ">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn_magad" value="Заплатить">
    </div>
    </div>
    </form>
    </div>
    <!---->
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat2.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2">Электронный и бумажный сертификат</p>
      <p class="magad1">от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»</p>
      <p class="shop__p__item">Стоимость: 500 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop2">Заказать</a>
    </div>
    </div>
    </div>
    
    <form action="https://money.yandex.ru/eshop.xml" method="post">
    {{ csrf_field() }}
    <input name="shopId" value="131650" type="hidden" required/>
    <input name="scid" value="905333" type="hidden" required/>
    <input name="sum" value="500" type="hidden" required>
        <!-- Modal Structure -->
    <div id="modalshop2" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="custName" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="custEmail" type="email" class="validate " required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="custAddr" type="text" class="validate " required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="orderDetails" type="hidden" class="validate" value="Электронный и бумажный сертификат от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn_magad" value="Заплатить">
    </div>
    </div>
    </form>
    </div>
    <!---->
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2" style="font-size: 20px;">Сертификат о дополнительном образовании от ведущего московского вуза (Национальный исследовательский университет «Московский авиационный институт»)</p>
      <p class="magad1">о прохождении курса обучения по программе «Основы технологического предпринимательства» </p>
      <p class="shop__p__item">Стоимость: 4300 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop3">Заказать</a>
    </div>
    </div>
    </div>
    
     <form action="https://money.yandex.ru/eshop.xml" method="post">
    {{ csrf_field() }}
    <input name="shopId" value="131650" type="hidden" required/>
    <input name="scid" value="905333" type="hidden" required/>
    <input name="sum" value="4300" type="hidden" required>
        <!-- Modal Structure -->
    <div id="modalshop3" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="custName" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="custEmail" type="email" class="validate" required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="custAddr" type="text" class="validate" required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="orderDetails" type="hidden" class="validate" value="Сертификат о дополнительном образовании от ведущего московского вуза (Национальный исследовательский университет «Московский авиационный институт») о прохождении курса обучения по программе «Основы технологического предпринимательства»">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn_magad" value="Заплатить">
    </div>
    </div>
    </form>
    </div>
          <p>* <a href="https://vk.com/doc22052708_493522097?hash=b9009d26310ce5afbd&dl=e38395ca1668652197" target="_blank" class="shop__item__href">Условия оферты</a></p>
          <p class="center">Полное наименование: Автономная некоммерческая организация «Агентство инновационного развития» <br>

Сокращенное наименование: АНО «АИР». <br>
Юридический адрес: 105425, г. Москва, Сиреневый бульвар, 12 корп. 1 Почтовый адрес 115088, г. Москва, <br>
ул. 2-я Машиностроения, <br>
25 строение «5» оф. 412 <br>
ИНН 7719289634 КПП 771901001 <br>
ОГРН 1127799006323 <br>
Расчетный счет №40703810201500000158 <br>
Название банка: ТОЧКА ПАО БАНКА "ФК ОТКРЫТИЕ" г. Москва <br>
БИК: 044525999 Корр. счет: 30101810845250000999 <br>
info@rusinnovations.com</p>
    </div>
    </div>
@endsection
