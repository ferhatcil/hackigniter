<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                HackIgniter
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">

            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                   aria-label="Open user menu">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-muted">UI Designer</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a href="https://github.com/ferhatcil" target="_blank" class="dropdown-item">Github</a>
                    <a href="https://cyberdetails.org" target="_blank" class="dropdown-item">cyberdetails.org</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo base_url("Logout"); ?>" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               class="icon" width="24" height="24"
                                                                               viewBox="0 0 24 24" stroke-width="2"
                                                                               stroke="currentColor" fill="none"
                                                                               stroke-linecap="round"
                                                                               stroke-linejoin="round"><path
                                  stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline
                                  points="5 12 3 12 12 3 21 12 19 12"/><path
                                  d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/><path
                                  d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/></svg>
                  </span>
                        <span class="nav-link-title">
                    Anasayfa
                  </span>
                    </a>
                </li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#Vulnerabilities" data-bs-toggle="dropdown" role="button"
                       aria-expanded="false">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                  d="M9 9v-1a3 3 0 0 1 6 0v1"/><path
                                  d="M8 9h8a6 6 0 0 1 1 3v3a5 5 0 0 1 -10 0v-3a6 6 0 0 1 1 -3"/><line x1="3" y1="13"
                                                                                                      x2="7" y2="13"/><line
                                  x1="17" y1="13" x2="21" y2="13"/><line x1="12" y1="20" x2="12" y2="14"/><line x1="4"
                                                                                                                y1="19"
                                                                                                                x2="7.35"
                                                                                                                y2="17"/><line
                                  x1="20" y1="19" x2="16.65" y2="17"/><line x1="4" y1="7" x2="7.75" y2="9.4"/><line
                                  x1="20" y1="7" x2="16.25" y2="9.4"/></svg>
                  </span>
                        <span class="nav-link-title">
                    Zafiyetler
                  </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/errorBasedSqli") ?>">
                            Error Based SQL Injection
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/timeBasedSqli") ?>">
                            Time Based SQL Injection
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/idor") ?>">
                            IDOR
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/csrf") ?>">
                            CSRF
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/xss") ?>">
                            XSS
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/osCommand") ?>">
                            OS Command
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/ssrf") ?>">
                            SSRF
                        </a>
                        <a class="dropdown-item" href="<?php echo base_url("Vulnerabilities/missingFunction") ?>">
                            Missing Function
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("Challenge"); ?>">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg"
                                                                               class="icon" width="24" height="24"
                                                                               viewBox="0 0 24 24" stroke-width="2"
                                                                               stroke="currentColor" fill="none"
                                                                               stroke-linecap="round"
                                                                               stroke-linejoin="round"><path
                                  stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                  d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><line
                                  x1="9" y1="9" x2="10" y2="9"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9"
                                                                                                            y1="17"
                                                                                                            x2="15"
                                                                                                            y2="17"/></svg>
                  </span>
                        <span class="nav-link-title">
                    Challenge Accepted
                  </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>