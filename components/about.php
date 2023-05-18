<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>About</h2>
            <p>Welcome to my portfolio website! I'm Thomas Li, a skilled software engineer with experience in
                backend development, mobile app development, and data analytics.<br>
                I hold a diploma in Mobile Software Development from Republic Polytechnic in Singapore.</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3>Software Developer &amp; UI/UX Designer.</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore
                    magna aliqua.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                <span>11 November 1999</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <span>www.example.com</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                <span>+65 8170 1017</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                <span>Singapore</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>
                                <?php
                                $birthYear = 1999;
                                $currentYear = date("Y");
                                $age = $currentYear - $birthYear;
                                echo $age;
                                ?>
                                </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Academic Qualification:</strong> <span>Diploma</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <span>email@example.com</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                <span>Available</span></li>
                        </ul>
                    </div>
                </div>
                <p>
                    With proficiency in a wide range of programming languages and frameworks, along with expertise in
                    databases, cloud platforms, and various tools, I am well-equipped to tackle software development
                    projects. I am also skilled in design software and have experience with office productivity tools.
                    <br><br>
                    My technical prowess enables me to develop innovative solutions and contribute to enhancing
                    efficiency and user experiences.
                </p>
            </div>
        </div>

    </div>
</section>