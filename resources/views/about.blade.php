@extends('layouts.default')

@section('title', 'About')

@section('content')
   <h1 class="aboutus">About Us</h1>
   <p class="breadCrumbs">Home / About Us</p>

   <div class="containerCards">
        <div class="cardOne">
            <div class="pictureBox">
                <img src="{{ asset('img/people/Tim.png') }}" class="peopleImg">
            </div>
            <div class="textBox">
                <h3 class="name">Tim Bernhard</h3>
                <p class="email">tim_bernhard@sluz.ch</p>
                <p class="role">Project Manager</p>
            </div>
        </div>
        <div class="cardTwo">
            <div class="pictureBox">
                <img src="{{ asset('img/people/yannic.png') }}" class="peopleImg">
            </div>
            <div class="textBox">
                <h3 class="name">Yannic Studer</h3>
                <p class="email">yannic_studer@sluz.ch</p>
                <p class="role">Design Manager</p>
            </div>
        </div>
        <div class="cardThree">
            <div class="pictureBox">
                <img src="{{ asset('img/people/demian.png') }}" class="peopleImg">
            </div>
            <div class="textBox">
                <h3 class="name">Demian Flury</h3>
                <p class="email">demian_flury@sluz.ch</p>
                <p class="role">Backend Developer</p>
            </div>
        </div>
        <div class="cardFour">
            <div class="pictureBox">
                <img src="{{ asset('img/people/elija.png') }}" class="peopleImg">
            </div>
            <div class="textBox">
                <h3 class="name">Elija Zürcher</h3>
                <p class="email">elija_zuercher@sluz.ch</p>
                <p class="role">Frontend Developer</p>
            </div>
        </div>
        <div class="cardFive">
            <div class="pictureBox">
                <img src="{{ asset('img/people/xavier.png') }}" class="peopleImg">
            </div>
            <div class="textBox">
                <h3 class="name">Xavier Scherer</h3>
                <p class="email">xavier_scherer@sluz.ch</p>
                <p class="role">Backend Developer</p>
            </div>
        </div>


   </div>
@endsection
