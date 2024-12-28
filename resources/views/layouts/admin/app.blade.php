<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.admin.links')
</head>
<body class=" layout-boxed">
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
@include('livewire.admin.layout.header')
<div class="main-container " id="container">
    <div class="overlay"></div>
    <div class="search-overlay"></div>
    @include('livewire.admin.layout.sidebar')
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            {{$slot}}
        </div>
    </div>
</div>
@include('layouts.admin.scripts')
</body>
</html>
