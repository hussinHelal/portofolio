@extends('layouts.app')

@section('title','Hussein_Helal | Home')
@section('logo','Hussein_Helal')

@section('content')
<style>
    body {
        background-color: #1a2a4b; /* Dark blue background */
        color: #f8f9fa; /* Light text color for contrast */
        font-size: 1.1rem; /* Slightly larger base font size */
    }

    h1, h2, h3, h4, h5, h6 {
        color: #e0e0e0; /* Slightly lighter headings */
    }

    .separator {
        border-top: 2px solid #007bff; /* Blue line separator */
        margin: 4rem 0; /* Add vertical space */
    }

    .card {
        background-color: #2a3a5b; /* Darker card background */
        color: #f8f9fa; /* Light text in cards */
    }

    .skill-box {
        background-color: #2a3a5b;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .skill-box .icon {
        width: 100%;
        max-width: 80px;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        margin-bottom: 10px;
    }

    .skill-box .icon i {
        font-size: 3rem; /* Adjust icon size */
        color: #007bff; /* Example color for icons */
    }

    .skill-box img {
        width: 100%;
        max-width: 80px;
        height: auto;
        object-fit: contain;
        display: none; /* Hide if not used anymore, or remove if original images are completely replaced */
    }

    .header-container {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .contact-form label {
        color: #e0e0e0;
    }
</style>
<div class="container py-5">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hussein_Helal | Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}

        <div class="mt-3 row justify-content-center header-container">
            <div class="text-center col-12 d-flex flex-column flex-md-row justify-content-between align-items-center text-md-start">
                <header id="header-section">
                    <h2>Hi, I'm Hussein Helal</h2>
                    <p>
                        I'm a 25-year-old <strong class='text-primary'>LAMP Stack Developer</strong> with a strong passion for web development.
                        I specialize in building modern, efficient, and scalable web applications using the <strong class="text-danger">Laravel</strong> framework and the LAMP Stack.
                    </p>
                </header>
                <img src="{{ asset('imgs/wall.png') }}" alt="header_picture" class="mt-3 img-fluid mt-md-0" style="max-width: 400px; height: auto;">
            </div>
        </div>
        <div class="separator"></div>

        <div class="mt-2 row justify-content-center">
            <div class="col-md-8">
               <span class="text-center">
                <h3 id="skills-section">Skills</h3>
               </span>

               <div class="flex-wrap gap-3 wrapper d-flex justify-content-center">
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-html5"></i>
                        </div>
                    </div>
                    <p>HTML5</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                    </div>
                    <p>CSS</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-js"></i>
                        </div>
                    </div>
                    <p>JavaScript</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-bootstrap"></i>
                        </div>
                    </div>
                    <p>Bootstrap</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-php"></i>
                        </div>
                    </div>
                    <p>PHP</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-laravel"></i>
                        </div>
                    </div>
                    <p>Laravel</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-brands fa-vuejs"></i>
                        </div>
                    </div>
                    <p>Vue.js</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                    </div>
                    <p>jQuery</p>
                </div>
                <div class="text-center skill-box col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="skill-title">
                        <div class="icon">
                            <i class="fa-solid fa-database"></i>
                        </div>
                    </div>
                    <p>MySQL</p>
                </div>
               </div>
            </div>
        </div>
        <div class="separator"></div>

        <div class="mt-4 row justify-content-center">
            <div class="col-md-8">
                <span class="text-center">
                    <h3 id="projects-section">Projects</h3>
                </span>
                <div class="mt-3 row justify-content-center">
                    <div class="mb-4 col-md-6 col-12">
                        <div class="border-0 card">
                            <div class="text-center card-body">
                                <h5 class="card-title">Project Title 1</h5>
                                <img src="{{asset('public/img/project1.png')}}" class="mb-2 img-fluid" alt="Project 1">
                                <p class="card-text">This is a description of project 1. It highlights the key features and technologies used.</p>
                                <a href="#" class="btn btn-link">GitHub Link</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-md-6 col-12">
                        <div class="border-0 card">
                            <div class="text-center card-body">
                                <h5 class="card-title">Project Title 2</h5>
                                <img src="{{asset('public/img/project2.png')}}" class="mb-2 img-fluid" alt="Project 2">
                                <p class="card-text">This is a description of project 2. It highlights the key features and technologies used.</p>
                                <a href="#" class="btn btn-link">GitHub Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator"></div>

        <div class="mt-4 row justify-content-center">
            <div class="col-md-8">
                <span class="text-center">
                    <h3 id="contact-section">Contact Me</h3>
                </span>
                <div class="mt-3 border-0 card">
                    <div class="card-body">
                        <p><strong>Name:</strong> Hussein Helal</p>
                        <p><strong>Email:</strong> hussinhelal202@gmail.com</p>
                        <p><strong>Phone:</strong> +201030481258</p>
                        <p><strong>Github:</strong> <a href="https://github.com/hussinHelal" target="_blank">hussinHelal</a></p>

                        <h5 class="mt-4">Send me a message:</h5>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
