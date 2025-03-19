@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<body>
        <header>
            <div class="banner_title">
                <img src="{{ asset('img/template_img.png') }}" alt="Image">
                <h1 >Jennifer Willems</h1>
            </div>
                <h2 class="subtitle">Web Developer & Designer</h2>
        <div class="bio">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores autem blanditiis commodi, consectetur corporis dignissimos dolor fugit id laboriosam molestias necessitatibus odio perferendis quam qui quidem suscipit ut vero
            . Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dignissimos ex facilis fugiat in laboriosam nemo praesentium quam reprehenderit sit. Corporis inventore laborum obcaecati officia quaerat ratione repellendus rerum voluptas.</p>
            <button>Switch style</button>
        </div>

        </header>
{{--       ---------------------------------------------- project example---------------------------------------------------------}}
        <section class="example_project">
            <div class="grid_projects">
                    <div class="project-card">
                        <a href="https://www.happyoutdoorliving.nl/" target="_blank">
                            <img src="{{ asset('/img/template_img.png') }}" alt="Happy Outdoor Living">
                        </a>
                        <h5>Happy Outdoor Living</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eos maiores minima quibusdam sequi tenetur velit! Ab aliquam cumque dignissimos eligendi ipsa, laborum nemo nostrum odit perspiciatis reiciendis rerum!</p>
                        <button onclick="window.open('https://www.happyoutdoorliving.nl/', '_blank')">Visit Site</button>
                    </div>
                        <div class="project-card">
                            <a href="https://www.happyoutdoorliving.nl/" target="_blank">
                                <img src="{{ asset('/img/template_img.png') }}" alt="Happy Outdoor Living">
                            </a>
                            <h5>Happy Outdoor Living</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eos maiores minima quibusdam sequi tenetur velit! Ab aliquam cumque dignissimos eligendi ipsa, laborum nemo nostrum odit perspiciatis reiciendis rerum!</p>
                            <button onclick="window.open('https://www.happyoutdoorliving.nl/', '_blank')">Visit Site</button>
                        </div>
                            <div class="project-card">
                                <a href="https://www.happyoutdoorliving.nl/" target="_blank">
                                    <img src="{{ asset('/img/template_img.png') }}" alt="Happy Outdoor Living">
                                </a>
                                <h5>Happy Outdoor Living</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eos maiores minima quibusdam sequi tenetur velit! Ab aliquam cumque dignissimos eligendi ipsa, laborum nemo nostrum odit perspiciatis reiciendis rerum!</p>
                                <button onclick="window.open('https://www.happyoutdoorliving.nl/', '_blank')">Visit Site</button>
                            </div>
                            <div class="project-card">
                                <a href="https://www.happyoutdoorliving.nl/" target="_blank">
                                    <img src="{{ asset('/img/template_img.png') }}" alt="Happy Outdoor Living">
                                </a>
                                <h5>Happy Outdoor Living</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis eos maiores minima quibusdam sequi tenetur velit! Ab aliquam cumque dignissimos eligendi ipsa, laborum nemo nostrum odit perspiciatis reiciendis rerum!</p>
                                <button onclick="window.open('https://www.happyoutdoorliving.nl/', '_blank')">Visit Site</button>
                            </div>
                    </div>
            </div>
        </section>
{{----------------------------------------project example---------------------------------------------------------------}}
        <section class="character_sheet">
            <h2>Character Sheet</h2>
            <div class="character_grid">
                <div class="character_info">
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


        <section class="slider-test">
            <div class="your-slider">
                <div class="slide">
                    <img src="{{ asset('/img/template_img.png') }}" alt="Image 1">
                    <h3>Project One</h3>
                    <p>A dark and elegant masterpiece that echoes the past.</p>
                </div>
                <div class="slide">
                    <img src="{{ asset('/img/template_img.png') }}" alt="Image 2">
                    <h3>Project Two</h3>
                    <p>An eerie yet beautiful creation shrouded in mystery.</p>
                </div>
                <div class="slide">
                    <img src="{{ asset('/img/template_img.png') }}" alt="Image 3">
                    <h3>Project Three</h3>
                    <p>A gothic marvel standing against the test of time.</p>
                </div>
            </div>
        </section>

        <footer class="gothic-footer">
            <div class="footer-content">
                <div class="footer-info">
                    <h2>Contact Us</h2>
                    <p>Email: contact@example.com</p>
                    <p>Phone: +123 456 7890</p>
                    <p>Location: A location near by</p>
                </div>

                <div class="contact-form">
                    <h3>Send a Message</h3>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <input type="text" name="phone" placeholder="Your Phone (Optional)">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                        <button type="submit">Send Message</button>
                    </form>

                </div>

            </div>
        </footer>






@endsection

