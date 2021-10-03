//@chalma скрипты для графика


$(document).ready(function(){



var data = {
    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 
              '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', 
              '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
    series:  [
      [
        {meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">1 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">2 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">3 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">4 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">5 июля 2021</span>', value: 12},
        {meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">6 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">7 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">8 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">9 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">10 июля 2021</span>', value: 13},
        {meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">11 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">12 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">13 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">14 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">15 июля 2021</span>', value: 12},
        {meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">16 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">17 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">18 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">19 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">20 июля 2021</span>', value: 13},
        {meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">21 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">22 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">23 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">24 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">25 июля 2021</span>', value: 12},
        {meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">26 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">27 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">28 июля 2021</span>', value: 13},{meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">29 июля 2021</span>', value: 12},{meta: '<span>Посетители</span><p>13 000</p><span class="tooltip-date">30 июля 2021</span>', value: 13},
        {meta: '<span>Посетители</span><p>12 000</p><span class="tooltip-date">31 июля 2021</span>', value: 12}
      ],
      [
        {meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">1 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">2 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">3 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">4 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">5 июля 2021</span>', value: 22},
        {meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">6 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">7 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">8 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">9 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">10 июля 2021</span>', value: 23},
        {meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">11 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">12 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">13 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">14 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">15 июля 2021</span>', value: 22},
        {meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">16 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">17 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">18 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">19 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">20 июля 2021</span>', value: 23},
        {meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">21 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">22 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">23 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">24 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">25 июля 2021</span>', value: 22},
        {meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">26 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">27 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">28 июля 2021</span>', value: 23},{meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">29 июля 2021</span>', value: 22},{meta: '<span>Количество покупок</span><p>23 000</p><span class="tooltip-date">30 июля 2021</span>', value: 23},
        {meta: '<span>Количество покупок</span><p>22 000</p><span class="tooltip-date">31 июля 2021</span>', value: 22}
      ],
      [
        {meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">1 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">2 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">3 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">4 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">5 июля 2021</span>', value: 15},
        {meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">6 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">7 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">8 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">9 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">10 июля 2021</span>', value: 7},
        {meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">11 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">12 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">13 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">14 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">15 июля 2021</span>', value: 15},
        {meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">16 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">17 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">18 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">19 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">20 июля 2021</span>', value: 7},
        {meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">21 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">22 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">23 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">24 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">25 июля 2021</span>', value: 15},
        {meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">26 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">27 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">28 июля 2021</span>', value: 7},{meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">29 июля 2021</span>', value: 15},{meta: '<span>Средний чек</span><p>7 000</p><span class="tooltip-date">30 июля 2021</span>', value: 7},
        {meta: '<span>Средний чек</span><p>15 000</p><span class="tooltip-date">31 июля 2021</span>', value: 15}
      ],
      [
        {meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">1 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">2 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">3 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">4 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">5 июля 2021</span>', value: 29},
        {meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">6 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">7 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">8 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">9 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">10 июля 2021</span>', value: 20},
        {meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">11 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">12 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">13 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">14 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">15 июля 2021</span>', value: 29},
        {meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">16 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">17 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">18 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">19 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">20 июля 2021</span>', value: 20},
        {meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">21 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">22 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">23 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">24 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">25 июля 2021</span>', value: 29},
        {meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">26 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">27 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">28 июля 2021</span>', value: 20},{meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">29 июля 2021</span>', value: 29},{meta: '<span>Общий объем продаж</span><p>20 000</p><span class="tooltip-date">30 июля 2021</span>', value: 20},
        {meta: '<span>Общий объем продаж</span><p>29 000</p><span class="tooltip-date">31 июля 2021</span>', value: 29}
      ],
      [
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">1 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">2 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">3 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">4 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">5 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">6 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">7 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">8 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">9 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">10 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">11 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">12 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">13 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">14 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">15 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">16 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">17 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">18 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">19 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">20 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">21 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">22 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">23 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">24 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">25 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">26 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">27 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">28 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">29 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">30 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">31 июля 2021</span>', value: 17}
      ],
    ]  
  };
  var data2 = {
    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 
              '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', 
              '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
    series:  [
      [
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">1 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">2 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">3 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">4 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">5 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">6 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">7 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">8 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">9 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">10 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">11 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">12 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">13 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">14 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">15 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">16 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">17 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">18 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">19 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">20 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">21 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">22 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">23 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">24 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">25 июля 2021</span>', value: 17},
        {meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">26 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">27 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">28 июля 2021</span>', value: 16},{meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">29 июля 2021</span>', value: 17},{meta: '<span> Трафик он-лайн</span><p>16 000</p><span class="tooltip-date">30 июля 2021</span>', value: 16},
        {meta: '<span> Трафик он-лайн</span><p>17 000</p><span class="tooltip-date">31 июля 2021</span>', value: 17}
      ],
    ]  
  };

alert(document.body.clientWidth);
  if (document.body.clientWidth > 576) {
    // Устанавливаем несколько опцией, меняя настройки по умолчанию
    var options = {

      height: '400px',
      transformTooltipTextFnc: true,
        //отступы
      chartPadding: {
          top: 50,
          bottom: 50
        },
        
      // Отрисовывать точки линейного графика
      showPoint: true,
      // Сглаживания линий
      lineSmooth: true,
      // Настройки X-оси
      axisX: {
        // Включаем сетку для этой оси
        showGrid: false,
        // показываем метки
        showLabel: true,
        
      },
      // настройки Y-оси 
      axisY: {
        //наименьшее и наибольшее значение
        high: 30,
        low: 0,
        //только целые значения
        onlyInteger: true,
        // Смещение от меток
        offset: 60,
        // Отключаем сетку для этой оси
        showGrid: false,
        // Функция интерполяции метки позволяет менять значение метки,
        // в текущем примере появляются миллионы "m".
        labelInterpolationFnc: function(value) {
          if(value % 2 === 0) {
            if(value === 0) return '0';
            else return value + ' 000' + '/\n' + value + ' млн';
          }
          
        }
      },
      plugins: [
        Chartist.plugins.tooltip({
          metaIsHTML : true,
          class : 'chalma-tooltip'
        })
      ]
    };
  } else {
    // Устанавливаем несколько опцией, меняя настройки по умолчанию
    var options = {

      height: '200px',
      transformTooltipTextFnc: true,
        //отступы
      chartPadding: {
          top: 20,
          bottom: 15
        },
        
      // Отрисовывать точки линейного графика
      showPoint: true,
      // Сглаживания линий
      lineSmooth: true,
      // Настройки X-оси
      axisX: {
        // Включаем сетку для этой оси
        showGrid: false,
        // показываем метки
        showLabel: true,
        
      },
      // настройки Y-оси 
      axisY: {
        //наименьшее и наибольшее значение
        high: 30,
        low: 0,
        //только целые значения
        onlyInteger: true,
        // Смещение от меток
        offset: 5,
        // Отключаем сетку для этой оси
        showGrid: false,
        // Функция интерполяции метки позволяет менять значение метки,
        // в текущем примере появляются миллионы "m".
        labelInterpolationFnc: function(value) {
          if(value % 2 === 0) {
            if(value === 0) return '0';
            else return value;
          }
          
        }
      },
      plugins: [
        Chartist.plugins.tooltip({
          metaIsHTML : true,
          class : 'chalma-tooltip'
        })
      ]
    };
  }

  // Не забываем включить третий параметр
  var chart = new Chartist.Line('.chart', data, options);

  //@chalma смена месяца
  let elem = document.querySelector('#month');
  elem.oninput = function () {
    if(elem.value === "2021-07") {
      Chartist.Line('.chart', data, options);
    } else {
      Chartist.Line('.chart', data2, options);
    } 
  }
  
  // @chalma вертикальные линиии при наведении на точку
  chart.on('created', function(bar) {
    $('.ct-point').on('mouseover', function() {
      let x1 = $(this).attr('x1');
      let x2 = $(this).attr('x2');
      let y1 = $(this).attr('y1');
      let y2 = $(this).attr('y2');
      $("g.ct-grids")
      .append('<svg ><line x1="'+x1+'" x2="'+x2+'" y1="'+y1+'" y2="320" class="ct-grid ct-horizontal"></line></svg>');
    });

    $('.ct-point').on('mouseout', function() {
      $('line.ct-grid.ct-horizontal').remove();
    });
  });

  //@chalma анимация у фильтра
  $("input#people").change(function(){
    if ($(this).prop('checked')) {
      //$('.ct-series-a').fadeIn().show();
      $('.ct-series-a').css('opacity', '1');
  
    } else {
      //$('.ct-series-a').fadeOut(300); 
      $('.ct-series-a').css('opacity', '0.1');
    }
    });
    $("input#buy-count").change(function(){
    if ($(this).prop('checked')) {
      //$('.ct-series-b').fadeIn().show();
      $('.ct-series-b').css('opacity', '1');
  
    } else {
      //$('.ct-series-b').fadeOut(300); 
      $('.ct-series-b').css('opacity', '0.1');
    }
    });
    $("input#average-check").change(function(){
    if ($(this).prop('checked')) {
      //$('.ct-series-c').fadeIn().show();
      $('.ct-series-c').css('opacity', '1');
  
    } else {
      //$('.ct-series-c').fadeOut(300); 
      $('.ct-series-c').css('opacity', '0.1');
    }
    });
    $("input#total-sales").change(function(){
    if ($(this).prop('checked')) {
      //$('.ct-series-d').fadeIn().show();
      $('.ct-series-d').css('opacity', '1');
  
    } else {
      //$('.ct-series-d').fadeOut(300); 
      $('.ct-series-d').css('opacity', '0.1');
    }
    });
    $("input#online-trafic").change(function(){
    if ($(this).prop('checked')) {
      //$('.ct-series-e').fadeIn().show();
      $('.ct-series-e').css('opacity', '1');
  
    } else {
      //$('.ct-series-e').fadeOut(300); 
      $('.ct-series-e').css('opacity', '0.1');
    }
    });
  
})