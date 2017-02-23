@extends('welcome')

@section('content')
    <!--PROJECTEUR-->
    @include('layouts.projecteur')

    @include('layouts.competence1')

    <!--BLOC APPLI MOBILE-->

    @include('layouts.appli_mobile')

    <!--Photo background-->

    @include('layouts.photo_background')

    <!--Photo background-->

    @include('layouts.banniere')

    <!--Photo background-->

    @include('layouts.recommendations')

        <!--1 ER BLOC compétences-->
@endsection
