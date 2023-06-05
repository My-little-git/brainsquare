@extends('layouts.app-master')

@section('title', 'Главная')

@section('content')

    <section id="home">
        <div class="container">
            <div class="ad__wrapper">
                @include('layouts.partials.ad')
            </div>
            <div class="events">
                <div class="section__title">Ближайшие события</div>
                <div class="events__table">
                    <div class="events__titles events__grid">
                        <div>Время</div>
                        <div>Группа</div>
                        <div>Тема</div>
                        <div>Предмет</div>
                        <div>Аудитория</div>
                    </div>
                    <div class="events__body">
                        <div class="events__day-wrapper">
                            <div class="events__day">cегодня</div>
                            <div class="event__card">
                                <div class="events__grid">
                                    <div>18:30-20:00</div>
                                    <div class="d-flex"><img class="lesson-type__icon" src="{{ Vite::images('icons/group.svg') }}" alt="">Информатика 10-11 кл Питон 1 гр. Осипов</div>
                                    <div>25 задача. Маска. Модуль fnmatvh</div>
                                    <div>Информатика</div>
                                    <div><a class="event__geo" href="https://yandex.ru/maps?text=Сыктывкар, просп. Бумажников, 37А" target="_blank">Эжва, Триумф</a>, 238 каб.</div>
                                </div>
                                <button class="event__menu-button"></button>
                                <div class="event__menu d-none">
                                    <a href="">Не смогу прийти</a>
                                    <a href="">Домашнее задание</a>
                                </div>
                            </div>
                        </div>
                        <div class="events__day-wrapper">
                            <div class="events__day">завтра</div>
                            <div class="event__card">
                                <div class="events__grid">
                                    <div>13:00-14:30</div>
                                    <div class="d-flex"><img class="lesson-type__icon" src="{{ Vite::images('icons/person.svg') }}" alt="">Симоненко Анастасия</div>
                                    <div>14 задача</div>
                                    <div>Английский язык</div>
                                    <div><a class="event__geo" href="https://yandex.ru/maps?text=Сыктывкар, Тентюковская улица, 320" target="_blank">Сыктывкар, Антлантида</a>, 429 каб.</div>
                                </div>
                                <button class="event__menu-button"></button>
                                <div class="event__menu d-none">
                                    <a href="">Не смогу прийти</a>
                                    <a href="">Домашнее задание</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
