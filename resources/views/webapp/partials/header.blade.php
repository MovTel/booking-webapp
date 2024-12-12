<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>@isset($title){{ $title }}@endisset | Movietelle</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/fontawesome/css/font-awesome.min.css" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap-select.min.css">
    <!-- RANGE SLIDER STYLE SHEET  -->  
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/range-slider.min.css"> 

    <!-- DASHBOARD SCROLL BAR STYLE SHEET  --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/m-custom-scrollbar.min.css">     
    
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">
    <!-- DROPZONE STYLE SHEET -->    
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dropzone.css">
        <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/flaticon.min.css"> 
    
    <!-- CLUSTER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/cluster-css.css">
        
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

 
</head>

<body>

	<div class="page-wraper">
        <x-navigation />
        <x-sidebar />        

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">