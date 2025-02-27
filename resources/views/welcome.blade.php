@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<body>
    <div class="portfolio-container">
        <header>
            <h1 class="title">Your Name</h1>
            <h2 class="subtitle">Web Developer & Designer</h2>
        </header>

        <section class="bio">
            <h3>About Me</h3>
            <p>A brief introduction about your skills, experience, and passion for web development.</p>
        </section>

        <section class="projects">
            <h3>Projects</h3>
            <div class="project-card">
                <h4>Project Name</h4>
                <p>Description of the project.</p>
            </div>
            <div class="project-card">
                <h4>Another Project</h4>
                <p>Description of the project.</p>
            </div>
        </section>
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
                    <p>Dominate: <span class="dots">●●○○○</span></p>
                    <p>Obtenebration: <span class="dots">●●●○○</span></p>
                </div>
                <div class="attributes">
                    <h3>Attributes</h3>
                    <p>Strength: <span class="dots">●●○○○</span></p>
                    <p>Dexterity: <span class="dots">●●●○○</span></p>
                    <p>Stamina: <span class="dots">●○○○○</span></p>
                </div>
            </div>
        </section>
    </div>
@endsection
