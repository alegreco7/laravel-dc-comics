@extends('layout.base')

@section('content')
    <div class="jumbo-container">
        <div class="blue-jumbo-bar">
            <div class="detail-img-container">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>

    <div class="py-5 mt-2">
        <div class="my-container-lg">
            <div class="row">
                <div class="col-8 comic-info-container">
                    <div>
                        <h1>{{ $comic['title'] }}</h1>
                    </div>

                    <div class="stock-price-container">
                        <div class="row align-items-center">
                            <div class="col-8 pr-0 d-flex justify-content-between">

                                <div class="p-2 py-3 ml-2">
                                    <span class="my-light-green fw-bold">U.S.
                                        Price:
                                    </span>
                                    <span class=" fw-bold text-white">
                                        {{ $comic['price'] }}
                                    </span>
                                </div>

                                <div class="my-border-black-r py-3 px-3">
                                    <span class="my-light-green fw-bold">AVAILABLE</span>
                                </div>
                            </div>

                            <div class="col-4 pl-0 text-white text-center">
                                <span class="fw-bold">Check Availability &#9662</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <p> {{ $comic['description'] }}</p>
                    </div>

                </div>

                <div class="col-4">
                    <div class="adv-container">
                        <div class="text-end mb-1">ADVERTISEMENT</div>
                        <div>
                            <a href="#">
                                <img src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">ì
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-5 my-bg-grey">
        <div class="my-container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="talent-specs-container">
                        <div class="row">
                            <div class="col-6">
                                <div class="table-container">
                                    <h5>Talent</h5>
                                    <table>
                                        <tr>
                                            <td class="td-index">Art by:</td>
                                            <td>
                                                <p class="my-blue">{{ $comic['artists'] }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-index">Written by:</td>
                                            <td>
                                                <p class="my-blue">{{ $comic['writers'] }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="col-6">

                                <div class="table-container">
                                    <h5>Specs</h5>
                                    <table>
                                        <tr>
                                            <td class="td-index">Series:</td>
                                            <td>
                                                <a href="#">{{ $comic['series'] }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-index">U.S. Price:</td>
                                            <td>
                                                {{ $comic['price'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="td-index">On Sale Date:</td>
                                            <td>
                                                {{ $comic['sale_date'] }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection