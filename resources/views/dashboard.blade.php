@extends('template')


@section('contents')

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <table class='table table-striped table-condensed'>
                                
                                <thead>
                                <th>Data</th>
                                <th>Total</th>
                                </thead>
                            
                            @foreach($dados as $dt)
                            <tr>
                                <td>{{ $dt['data'] }}</td>
                                <td>{{ $dt['total'] }}</td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </section>
@endsection