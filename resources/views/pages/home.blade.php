@extends('layouts.app')

@section('title', 'Koe Bi Suy Basile — Développeur Full Stack & IA')

@section('content')

{{-- ====================================================
     SECTION 1 — HERO
     ===================================================== --}}
<section class="hero" id="about">
    <div class="hero-inner">

        {{-- Texte gauche --}}
        <div class="hero-text">
            <div class="hero-badge">
                <span class="hero-badge-dot" aria-hidden="true"></span>
                Disponible pour de nouvelles opportunités
            </div>

            <h1>
                Koe Bi Suy<br>
                <span>Basile</span>
            </h1>

            <p class="hero-desc">
                Développeur Full Stack passionné par l'Intelligence Artificielle.
                Je conçois des solutions web modernes avec PHP/Laravel, Python et l'IA générative.
                Basé à Abidjan, Côte d'Ivoire.
            </p>

            <div class="hero-actions">
                <a href="#projects" class="btn-primary">
                    <i class="ti ti-layout-grid" aria-hidden="true"></i>
                    Voir mes projets
                </a>
                <a href="https://wa.me/2250778142101" class="btn-whatsapp" target="_blank" rel="noopener">
                    <i class="ti ti-brand-whatsapp" aria-hidden="true"></i>
                    WhatsApp
                </a>
                <a href="#contact" class="btn-outline">
                    <i class="ti ti-mail" aria-hidden="true"></i>
                    M'écrire
                </a>
            </div>

            <div class="hero-socials">
                <a href="https://linkedin.com/in/basile-koe-bi-ab534b297"
                   class="social-link" target="_blank" rel="noopener" aria-label="Mon LinkedIn">
                    <i class="ti ti-brand-linkedin" aria-hidden="true"></i>
                </a>
                <a href="https://github.com/koewilliams5"
                   class="social-link" target="_blank" rel="noopener" aria-label="Mon GitHub">
                    <i class="ti ti-brand-github" aria-hidden="true"></i>
                </a>
                <a href="mailto:koebibasile5@gmail.com"
                   class="social-link" aria-label="Mon email">
                    <i class="ti ti-mail" aria-hidden="true"></i>
                </a>
                <a href="https://wa.me/2250778142101"
                   class="social-link" target="_blank" rel="noopener" aria-label="Mon WhatsApp">
                    <i class="ti ti-brand-whatsapp" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        {{-- Photo droite --}}
        <div class="photo-card">
            <div class="photo-wrapper">
                {{--
                    ⭐ COMMENT AJOUTER TA PHOTO :
                    1. Copie ta photo dans le dossier :  public/images/basile.PNG
                    2. Supprime le bloc <div class="photo-placeholder"> ci-dessous
                    3. Décommente la balise <img> ci-dessous
                --}}

                <img
                    src="{{ asset('images/basile.PNG') }}"
                    alt="Koe Bi Suy Basile — Développeur Full Stack"
                    width="320"
                    height="400"
                > 
            </div>

            <div class="photo-badge photo-badge-1" aria-hidden="true">
                <div>
                    <div class="badge-number">2+</div>
                    <div class="badge-label">Ans d'expérience<br>en développement</div>
                </div>
            </div>

            <div class="photo-badge photo-badge-2" aria-hidden="true">
                <i class="ti ti-certificate" style="color:var(--gold);font-size:1.2rem"></i>
                <div>
                    <div style="font-size:0.8rem;font-weight:600">Certifié</div>
                    <div class="badge-label">GenAI &amp; MOS</div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ====================================================
     STATISTIQUES
     ===================================================== --}}
<div class="divider" aria-hidden="true"></div>

<div class="stats-section">
    <div class="stats-row">
        <div class="stat-box">
            <div class="stat-number">2+</div>
            <div class="stat-label">Projets techniques livrés</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">6+</div>
            <div class="stat-label">Technologies maîtrisées</div>
        </div>
        <div class="stat-box">
            <div class="stat-number">914</div>
            <div class="stat-label">Score MOS Excel / 1000</div>
        </div>
    </div>
</div>

<div class="divider" aria-hidden="true"></div>

{{-- ====================================================
     SECTION 2 — COMPÉTENCES
     ===================================================== --}}
<section class="skills-section" id="skills">
    <div class="container">
        <div class="section-label">Compétences</div>
        <h2 class="section-title">Ce que je sais faire</h2>
        <p class="section-sub">
            Des compétences solides couvrant le développement web, l'IA et la gestion des données,
            pour construire des solutions complètes de bout en bout.
        </p>

        <div class="skills-grid">
            {{-- Card 1 — Web --}}
            <article class="skill-card">
                <div class="skill-icon purple" aria-hidden="true">
                    <i class="ti ti-code"></i>
                </div>
                <h3>Développement Web Full Stack</h3>
                <p>
                    Conception et développement d'applications web robustes avec des architectures MVC,
                    des API REST et des interfaces modernes et réactives.
                </p>
                <div class="skill-tags">
                    <span class="tag">PHP</span>
                    <span class="tag">Laravel</span>
                    <span class="tag">Python</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">React</span>
                    <span class="tag">HTML / CSS</span>
                    <span class="tag">SQL</span>
                </div>
            </article>

            {{-- Card 2 — IA --}}
            <article class="skill-card">
                <div class="skill-icon teal" aria-hidden="true">
                    <i class="ti ti-brain"></i>
                </div>
                <h3>Intelligence Artificielle & Data</h3>
                <p>
                    Intégration d'IA générative, analyse de données et création de modèles
                    de machine learning pour résoudre des problèmes concrets.
                </p>
                <div class="skill-tags">
                    <span class="tag">GenAI</span>
                    <span class="tag">Machine Learning</span>
                    <span class="tag">Scikit-Learn</span>
                    <span class="tag">Pandas</span>
                    <span class="tag">NumPy</span>
                    <span class="tag">OpenAI API</span>
                </div>
            </article>

            {{-- Card 3 — BDD & API --}}
            <article class="skill-card">
                <div class="skill-icon gold" aria-hidden="true">
                    <i class="ti ti-database"></i>
                </div>
                <h3>Bases de données & API</h3>
                <p>
                    Conception, optimisation de bases de données relationnelles et intégration
                    d'APIs tierces pour la synchronisation et l'enrichissement de données.
                </p>
                <div class="skill-tags">
                    <span class="tag">MySQL</span>
                    <span class="tag">SQL Server</span>
                    <span class="tag">API REST</span>
                    <span class="tag">Crossref</span>
                    <span class="tag">OpenAlex</span>
                    <span class="tag">Git / GitHub</span>
                </div>
            </article>
        </div>
    </div>
</section>

<div class="divider" aria-hidden="true"></div>

{{-- ====================================================
     SECTION 3 — PROJETS
     ===================================================== --}}
<section class="projects-section" id="projects">
    <div class="container">
        <div class="section-label">Projets</div>
        <h2 class="section-title">Réalisations techniques</h2>
        <p class="section-sub">
            Des projets concrets qui démontrent mes compétences en développement web et en IA,
            conçus pour résoudre des problèmes réels.
        </p>

        <div class="projects-grid">

            {{-- Projet 1 --}}
            <article class="project-card">
                <div class="project-thumb purple" aria-hidden="true">
                    <i class="ti ti-id-badge-2" style="font-size:3rem;color:var(--accent2)"></i>
                </div>
                <div class="project-type-tag purple">
                    <i class="ti ti-tag" style="font-size:0.7rem" aria-hidden="true"></i>
                    Laravel · PHP · API REST
                </div>
                <h3>Système de Gestion de Cartes Étudiantes</h3>
                <p>
                    Application web développée à l'INP-HB pour gérer et imprimer les cartes étudiantes.
                    Inclut une synchronisation automatique des données via API, des modules d'administration
                    et une automatisation complète des traitements administratifs.
                </p>
                <div class="project-footer">
                    <div class="project-stack">
                        <span class="stack-badge">PHP</span>
                        <span class="stack-badge">Laravel</span>
                        <span class="stack-badge">MySQL</span>
                        <span class="stack-badge">API REST</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/koewilliams5"
                           class="icon-btn" target="_blank" rel="noopener" aria-label="Voir sur GitHub">
                            <i class="ti ti-brand-github" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="icon-btn" aria-label="Voir le projet en ligne">
                            <i class="ti ti-external-link" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </article>

            {{-- Projet 2 --}}
            <article class="project-card">
                <div class="project-thumb teal" aria-hidden="true">
                    <i class="ti ti-microscope" style="font-size:3rem;color:var(--teal)"></i>
                </div>
                <div class="project-type-tag teal">
                    <i class="ti ti-tag" style="font-size:0.7rem" aria-hidden="true"></i>
                    IA · Python · Multi-API
                </div>
                <h3>Plateforme de Recherche Scientifique par IA</h3>
                <p>
                    Plateforme intelligente pour rechercher, analyser et enrichir automatiquement
                    des articles scientifiques. Intégration de Crossref, OpenAlex, Semantic Scholar
                    et OpenAI pour extraire et structurer les métadonnées des publications.
                </p>
                <div class="project-footer">
                    <div class="project-stack">
                        <span class="stack-badge">Python</span>
                        <span class="stack-badge">OpenAI</span>
                        <span class="stack-badge">Crossref</span>
                        <span class="stack-badge">OpenAlex</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/koewilliams5"
                           class="icon-btn" target="_blank" rel="noopener" aria-label="Voir sur GitHub">
                            <i class="ti ti-brand-github" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="icon-btn" aria-label="Voir le projet en ligne">
                            <i class="ti ti-external-link" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<div class="divider" aria-hidden="true"></div>

{{-- ====================================================
     SECTION 4 — EXPÉRIENCE & FORMATION
     ===================================================== --}}
<section class="exp-section" id="experience">
    <div class="exp-section-grid">

        {{-- Colonne gauche — Expérience --}}
        <div>
            <div class="section-label">Expérience</div>
            <h2 class="section-title">Parcours professionnel</h2>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-meta">
                        <span class="timeline-date">Fév 2025 – Août 2025</span>
                        <span class="timeline-company">INP-HB · Yamoussoukro</span>
                    </div>
                    <h3>Stagiaire Développeur d'Applications</h3>
                    <ul class="timeline-bullets">
                        <li>Développement d'applications web avec PHP et Laravel</li>
                        <li>Gestion et optimisation de bases de données MySQL</li>
                        <li>Mise en place de solutions numériques pour les services administratifs</li>
                        <li>Synchronisation de données via API REST</li>
                    </ul>
                </div>

                <div class="timeline-item">
                    <div class="timeline-meta">
                        <span class="timeline-date">Août 2023 – Sept 2023</span>
                        <span class="timeline-company">Agence Emploi Jeune · Yamoussoukro</span>
                    </div>
                    <h3>Stagiaire en Informatique</h3>
                    <ul class="timeline-bullets">
                        <li>Gestion de bases de données</li>
                        <li>Assistance technique et maintenance des équipements</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Colonne droite — Formation --}}
        <div>
            <div class="section-label">Formation</div>
            <h2 class="section-title">Éducation</h2>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-meta">
                        <span class="timeline-date">Mai 2026 – Juil 2026</span>
                        <span class="timeline-company">Developers Institute · TLV</span>
                    </div>
                    <h3>Certification Expert GenAI & Machine Learning</h3>
                    <p>Intelligence artificielle générative et apprentissage automatique — Coding Bootcamp</p>
                </div>

                <div class="timeline-item">
                    <div class="timeline-meta">
                        <span class="timeline-date">2022 – 2024</span>
                        <span class="timeline-company">Université PIGIER · Yamoussoukro</span>
                    </div>
                    <h3>BTS Informatique — Développeur d'Applications</h3>
                    <p>Développement d'applications, bases de données, systèmes d'information</p>
                </div>
            </div>

            {{-- Certifications --}}
            <div style="margin-top: 2.5rem;">
                <div class="section-label" style="margin-bottom:1rem;">Certifications</div>
                <div class="cert-grid">
                    <div class="cert-card">
                        <div class="cert-icon gold" aria-hidden="true">
                            <i class="ti ti-award"></i>
                        </div>
                        <div>
                            <h4>Microsoft Office Specialist — Excel</h4>
                            <p>Score 914/1000 &nbsp;|&nbsp; Réf. 44581444<br>Identifiant : koebi0501576 &nbsp;|&nbsp; Juin 2023</p>
                        </div>
                    </div>
                    <div class="cert-card">
                        <div class="cert-icon purple" aria-hidden="true">
                            <i class="ti ti-brain"></i>
                        </div>
                        <div>
                            <h4>Expert GenAI & Machine Learning</h4>
                            <p>Developers Institute · TLV Coding Bootcamp<br>2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="divider" aria-hidden="true"></div>

{{-- ====================================================
     SECTION 5 — CONTACT
     ===================================================== --}}
<section class="contact-section" id="contact">
    <div class="contact-inner">

        {{-- Colonne gauche — Informations de contact --}}
        <div>
            <div class="section-label">Contact</div>
            <h2 class="section-title">Travaillons<br>ensemble</h2>
            <p style="color:var(--text2);font-size:0.9rem;line-height:1.8;margin-bottom:0.5rem">
                Disponible pour des missions freelance, des opportunités de stage ou d'emploi.
                Je réponds sous 24 heures.
            </p>

            <div class="contact-channels">
                <a href="mailto:koebibasile5@gmail.com" class="contact-item">
                    <div class="contact-icon ci-mail" aria-hidden="true">
                        <i class="ti ti-mail"></i>
                    </div>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value">koebibasile5@gmail.com</div>
                    </div>
                    <i class="ti ti-chevron-right contact-arrow" aria-hidden="true"></i>
                </a>

                <a href="tel:+2250778142101" class="contact-item">
                    <div class="contact-icon ci-phone" aria-hidden="true">
                        <i class="ti ti-phone"></i>
                    </div>
                    <div>
                        <div class="contact-label">Téléphone</div>
                        <div class="contact-value">(+225) 07 78 14 21 01</div>
                    </div>
                    <i class="ti ti-chevron-right contact-arrow" aria-hidden="true"></i>
                </a>

                <a href="https://wa.me/2250778142101" target="_blank" rel="noopener" class="contact-item">
                    <div class="contact-icon ci-wa" aria-hidden="true">
                        <i class="ti ti-brand-whatsapp"></i>
                    </div>
                    <div>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value">+225 07 78 14 21 01</div>
                    </div>
                    <i class="ti ti-external-link contact-arrow" aria-hidden="true"></i>
                </a>

                <a href="https://linkedin.com/in/basile-koe-bi-ab534b297"
                   target="_blank" rel="noopener" class="contact-item">
                    <div class="contact-icon ci-li" aria-hidden="true">
                        <i class="ti ti-brand-linkedin"></i>
                    </div>
                    <div>
                        <div class="contact-label">LinkedIn</div>
                        <div class="contact-value">basile-koe-bi-ab534b297</div>
                    </div>
                    <i class="ti ti-external-link contact-arrow" aria-hidden="true"></i>
                </a>

                <a href="https://github.com/koewilliams5"
                   target="_blank" rel="noopener" class="contact-item">
                    <div class="contact-icon ci-gh" aria-hidden="true">
                        <i class="ti ti-brand-github"></i>
                    </div>
                    <div>
                        <div class="contact-label">GitHub</div>
                        <div class="contact-value">koewilliams5</div>
                    </div>
                    <i class="ti ti-external-link contact-arrow" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        {{-- Colonne droite — Formulaire --}}
        <div class="contact-form">
            <h2>Envoyer un message</h2>
            <p>Décrivez votre projet ou opportunité, je vous réponds rapidement.</p>

            {{-- Messages de succès/erreur --}}
            @if(session('success'))
                <div class="alert success" style="display:block">
                    <i class="ti ti-circle-check" aria-hidden="true"></i>
                    {{ session('success') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert error" style="display:block">
                    <i class="ti ti-alert-circle" aria-hidden="true"></i>
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" id="contact-form" novalidate>
                @csrf

                <div class="form-row">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Nom complet <span style="color:#f87171">*</span></label>
                        <input type="text" id="name" name="name"
                               placeholder="Jean Dupont"
                               value="{{ old('name') }}"
                               required>
                        <div class="form-error">{{ $errors->first('name') }}</div>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email">Adresse email <span style="color:#f87171">*</span></label>
                        <input type="email" id="email" name="email"
                               placeholder="jean@example.com"
                               value="{{ old('email') }}"
                               required>
                        <div class="form-error">{{ $errors->first('email') }}</div>
                    </div>
                </div>

                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                    <label for="subject">Sujet <span style="color:#f87171">*</span></label>
                    <input type="text" id="subject" name="subject"
                           placeholder="Proposition de mission freelance..."
                           value="{{ old('subject') }}"
                           required>
                    <div class="form-error">{{ $errors->first('subject') }}</div>
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    <label for="message">Message <span style="color:#f87171">*</span></label>
                    <textarea id="message" name="message"
                              placeholder="Décrivez votre projet, vos besoins, votre budget..."
                              required>{{ old('message') }}</textarea>
                    <div class="form-error">{{ $errors->first('message') }}</div>
                </div>

                <button type="submit" class="submit-btn" id="submit-btn">
                    <i class="ti ti-send" aria-hidden="true"></i>
                    <span id="btn-text">Envoyer le message</span>
                </button>

                <div class="alert success" id="form-success">
                    <i class="ti ti-circle-check" aria-hidden="true"></i>
                    Message envoyé ! Je vous réponds sous 24 heures.
                </div>
                <div class="alert error" id="form-error">
                    <i class="ti ti-alert-circle" aria-hidden="true"></i>
                    Une erreur est survenue. Veuillez réessayer.
                </div>
            </form>
        </div>

    </div>
</section>

@endsection
