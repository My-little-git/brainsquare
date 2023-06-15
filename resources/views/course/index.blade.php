@extends('layouts.app-master')

@section('title', 'Курсы')

@section('content')

    <section id="course-index">
        <div class="container">
            <div class="section__title">Курсы</div>
            <div class="courses">
                <div class="cards">

                </div>
                <form class="filters">
                    <div class="filter search">
                        <div class="title">Поиск по курсам</div>
                        <input type="text" class="search__input" placeholder="Введите название курса">
                    </div>
                    <div class="filter duration">
                        <div class="title">Длительность</div>
                        <div id="range"></div>
                        <input type="range" min="0" max="24" aria-valuemin="0" aria-valuemax="24" multiple>
                    </div>
                    <div class="filter subject">
                        <div class="title">Предмет</div>
                        <div class="subjects">
                            <div>
                                <input name="subject" class="subject" id="subject-1" value="1" type="checkbox">
                                <label for="subject-1">Информатика</label>
                            </div>
                            <div>
                                <input name="subject" class="subject" id="subject-2" value="2" type="checkbox">
                                <label for="subject-2">Математика</label>
                            </div>
                        </div>
                        <div class="more"><img src="{{ Vite::images('icons/arrow-down.svg') }}" alt="">ЕЩЁ 7 ПРЕДМЕТОВ</div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
