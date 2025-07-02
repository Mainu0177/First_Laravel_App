@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <!-- Contact Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="display-5 mb-4">Get In Touch</h2>
                    <p class="lead mb-4">Have a project in mind or want to discuss potential collaboration? Feel free to reach out!</p>

                    <div class="mb-4">
                        <h5 class="mb-3">Contact Information</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <span>Bangladesh, Dhaka, Narayanganj</span>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <a href="mailto:john@example.com">softmainu@gmail.com</a>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <a href="tel:+1234567890">(+88) 01771211148</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="mb-3">Follow Me</h5>
                        <div class="social-links">
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                            <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram fa-lg"></i></a>
                            <a href="#" class="text-decoration-none"><i class="fab fa-github fa-lg"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-4">Send Me a Message</h5>
                            <form id="contactForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" required>
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
    </section>

    <!-- Map Section -->
    <section class="py-0">
        <div class="container-fluid px-0">
            <div class="ratio ratio-21x9">
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215256836312!2d-73.9878449241646!3d40.74844097138988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1689877607784!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467388.8930312468!2d90.62242975097656!3d23.766068123217256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b10812a520a3%3A0x6d3af4457bec4c90!2sNarayanganj!5e0!3m2!1sen!2sbd!4v1751467774280!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    @endsection
