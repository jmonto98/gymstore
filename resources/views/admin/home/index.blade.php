@extends('layouts.admin')
@section('title', $viewData["title"])

@section('content')


<div class="card">
    <div class="card-header">
        <h3>{{__('messages.dashboard')}}</h3>
    </div>
    <div class="card-body">
        <div class="iframe-container">
            <iframe title="Informe gymStore" src="https://app.powerbi.com/view?r=eyJrIjoiOGI2NGU3ZjAtN2NmZi00YWJjLWI0OWItMDJkZGMyYTY3Yzc4IiwidCI6Ijk5ZjdiNTVlLTljYmUtNDY3Yi04MTQzLTkxOTc4MjkxOGFmYiIsImMiOjR9" allowFullScreen="true"></iframe>
        </div>
    </div>
</div>
@endsection
