@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<body>
        <header>
            <h1 class="title">Jennifer Willems</h1>
            <h2 class="subtitle">Web Developer & Designer</h2>
        <div class="bio">
            <h3>About Me</h3>
            <p>A brief introduction about your skills, experience, and passion for web development.</p>
        </div>
        </header>

        <section class="character-sheet">
            <h2>Character Sheet</h2>
            <div class="character-grid">
                <div class="character-info">
                    <p><strong>Name:</strong> Jennifer Willems</p>
                    <p><strong>Clan:</strong> Toreador</p>
                    <p><strong>Concept:</strong> Shadow Artist</p>
                    <p><strong>Generation:</strong> 11th</p>
                </div>
                <div class="disciplines">
                    <h3>Disciplines</h3>
                    <p>Design: <span class="dots">●●○○○</span></p>
                    <p>Front-end <span class="dots">●●●○○</span></p>
                </div>
                <div class="attributes">
                    <h3>Attributes</h3>
                    <p>Strength: <span class="dots">●●○○○</span></p>
                    <p>Dexterity: <span class="dots">●●●○○</span></p>
                    <p>Stamina: <span class="dots">●○○○○</span></p>
                </div>
            </div>
        </section>
@endsection

