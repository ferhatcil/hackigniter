<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Kurulum Sayfası
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-8">
                    <div class="card card-lg">
                        <div class="card-body">
                            <div class="markdown">
                                <h3>Veritabanını manuel bir şekilde mysql içerisine yüklemek istiyorsanız:</h3>
                                <ol>
                                    <li>İndirdiğiniz proje içerisinde yer alan hackigniter.sql dosyasını bulun.</li>
                                    <li>Eğer bu işlemi XAMPP üzerinden gerçekleştiriyorsanız, phpmyadmin üzerinden <b>içe
                                            aktar</b> seçeneği ile veritabanını kolaylıkla oluşturabilirsiniz.
                                    </li>
                                    <li>Eğer bu işlemi terminal üzerinden gerçekleştiriyorsanız, <b>mysql -u username -p
                                            database_name < file.sql</b> komutu ile veritabanını kolaylıkla
                                        aktarabilirsiniz.
                                    </li>
                                </ol>
                                <h3>Veritabanını otamatik bir şekilde mysql içerisine yüklenmesini istiyorsanız:</h3>
                                <ol>
                                    <li>Hadi durma aşağıdaki butona tıkla</li>
                                </ol>
                                <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                    <form method="POST" action="<?php echo base_url("Setup/Run") ?>">
                                        <button type="submit" name="setup" class="btn btn-success btn-pill w-100" value="1">Yükle</button>
                                    </form>
                                </div>
                                <h3>Veritabanını başarılı bir şekilde yüklediyseniz:</h3>
                                <ol>
                                    <li>İsteğinize göre Setup ile ilgili sayfaları silebilirsiniz.( <b><i>Tavsiye
                                                edilir.</i></b> )
                                    </li>
                                    <li>İlgili setup dosyaları <b>application/controllers</b>, <b>application/views</b>
                                        ve <b>application/models</b> içerisinde yer almaktadır.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="me-3">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/scale -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="7" y1="20" x2="17" y2="20"></line>
                                        <path d="M6 6l6 -1l6 1"></path>
                                        <line x1="12" y1="3" x2="12" y2="20"></line>
                                        <path d="M9 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path>
                                        <path d="M21 12l-3 -6l-3 6a3 3 0 0 0 6 0"></path>
                                    </svg>
                                </div>
                                <div>
                                    <small class="text-muted">ferhatcil/hackigniter is licensed under the</small>
                                    <h3 class="lh-1">MIT License</h3>
                                </div>
                            </div>
                            <div class="text-muted mb-3">
                                A short and simple permissive license with conditions only requiring preservation of
                                copyright and
                                license notices. Licensed works, modifications, and larger works may be distributed
                                under different terms
                                and without source code.
                            </div>
                            <h4>Permissions</h4>
                            <ul class="list-unstyled space-y-1">
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    Commercial use
                                </li>
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    Modification
                                </li>
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    Distribution
                                </li>
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M5 12l5 5l10 -10"></path>
                                    </svg>
                                    Private use
                                </li>
                            </ul>
                            <h4>Limitations</h4>
                            <ul class="list-unstyled space-y-1">
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/x -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    Liability
                                </li>
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/x -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-red" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    Warranty
                                </li>
                            </ul>
                            <h4>Conditions</h4>
                            <ul class="list-unstyled space-y-1">
                                <li><!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue" width="24"
                                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                         fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="9"></circle>
                                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                        <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                    </svg>
                                    License and copyright notice
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            This is not legal advice.
                            <a href="https://github.com/ferhatcil/hackigniter/blob/main/LICENSE" target="_blank">Learn
                                more about repository licenses.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer footer-transparent d-print-none">
        <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
                <div class="col-lg-auto ms-lg-auto">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a
                                    href="https://github.com/ferhatcil/hackigniter/blob/main/LICENSE"
                                    class="link-secondary">License</a></li>
                        <li class="list-inline-item"><a
                                    href="https://github.com/ferhatcil/hackigniter/archive/refs/tags/v0.0-pilot.2.zip"
                                    target="_blank"
                                    class="link-secondary" rel="noopener">Source code</a></li>
                        <li class="list-inline-item">
                            <a href="https://github.com/ferhatcil/" target="_blank" class="link-secondary"
                               rel="noopener">
                                <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                </svg>
                                Sponsor
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                            Copyright © 2021
                            <a href="." class="link-secondary">HackIgniter</a>.
                            All rights reserved.
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="link-secondary" rel="noopener">HackIgniter v0.0-pilot.3 - Vulnerable Web
                                Application</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>